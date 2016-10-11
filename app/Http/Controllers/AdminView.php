<?php

namespace App\Http\Controllers;

use App\StudentApplication;
use App\StudentApplicationCourseDetail;
use App\StudentApplicationOtherDetail;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class AdminView extends Controller
{
    //
    public function viewAllApplications(Request $request)
    {
        $application = StudentApplication::all();
        return view('adminPage')->with([
            "application" => $application
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


        return view('applicationDetails')->with([
            "application" => $application,
            "college" => $college_details,
            "math_courses" => $math_courses,
            "science_courses" => $science_courses,
            "mathscience_courses" => $mathscience_courses,
            "award" => $award,
            "program" => $program
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
}
