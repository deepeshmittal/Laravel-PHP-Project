<?php

namespace App\Http\Controllers;

use App\StudentApplication;
use App\StudentApplicationCourseDetail;
use App\StudentApplicationOtherDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Config;


use App\Http\Requests;

class AdminView extends Controller
{
    //
    public function viewAllApplications(Request $request,$year = null)
    {
        if(is_null($year)){
            $application_term = Config::get('view.application_semester');
        }else{
            $application_term = $year;
        }

        $application = StudentApplication::where('application_term',$application_term)->get();
        $app_term = StudentApplication::select('application_term')->groupBy('application_term')->get()->toArray();
        return view('adminPage')->with([
            "application" => $application,
            "app_term" => $app_term,
            "dropdown_value" => $year
        ]);
    }

    public function viewApplicationDetails(Request $request, $app_id){
        $application = StudentApplication::find($app_id);
        $college_details = StudentApplicationOtherDetail::where([
            ['application_id','=',$app_id],
            ['detailType','=','College']
        ])->get();
        $math_courses = StudentApplicationCourseDetail::where([
            ['application_id','=',$app_id],
            ['courseType','=','math']
        ])->get();
        $science_courses = StudentApplicationCourseDetail::where([
            ['application_id','=',$app_id],
            ['courseType','=','science']
        ])->get();
        $mathscience_courses = StudentApplicationCourseDetail::where([
            ['application_id','=',$app_id],
            ['courseType','=','currmathscience']
        ])->get();
        $award = StudentApplicationotherDetail::where([
            ['application_id','=',$app_id],
            ['detailType','=','Award']
        ])->get();
        $program = StudentApplicationotherDetail::where([
            ['application_id','=',$app_id],
            ['detailType','=','Program']
        ])->get();

        $file1 = $application->attachFileOne;
        $file2 = $application->attachFileTwo;

        return view('applicationDetails')->with([
            "application" => $application,
            "college" => $college_details,
            "math_courses" => $math_courses,
            "science_courses" => $science_courses,
            "mathscience_courses" => $mathscience_courses,
            "award" => $award,
            "program" => $program,
            "file1" => $file1,
            "file2" => $file2
        ]);
    }

    public function approveApplication(Request $request){
        $app_id = $request->input('application-id');
        StudentApplication::where('id',$app_id)->update(['status' => 'approved']);
        $application = StudentApplication::all();
        return redirect('admin/review-applications')->with([
            "application" => $application
        ]);
    }

    public function rejectApplication(Request $request){
        $app_id = $request->input('application-id');
        StudentApplication::where('id',$app_id)->update(['status' => 'rejected']);
        $application = StudentApplication::all();
        return redirect('admin/review-applications')->with([
            "application" => $application
        ]);
    }

    public function deleteApplication(Request $request){
        $app_id = $request->input('application-id');
        StudentApplication::where('id',$app_id)->delete();
        $application = StudentApplication::all();
        return redirect('admin/review-applications')->with([
            "application" => $application
        ]);
    }
    
    public function getFileController(Request $request, $app_id, $file){
        $file_path = storage_path() . "/app/mtbi_application_files/" . $app_id . "_" . $file;
        if (file_exists($file_path)){
            return Response::download($file_path, $file, [
            'Content-Length: '. filesize($file_path)
        ]);    
        }else{
            return ("<h1>Error : File Not Found<h1>");
        }
    }
}
