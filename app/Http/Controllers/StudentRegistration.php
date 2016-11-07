<?php

namespace App\Http\Controllers;

use App\StudentApplication;
use App\StudentApplicationCourseDetail;
use App\StudentApplicationOtherDetail;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Session;

class StudentRegistration extends Controller
{
    //

    public function registerPageOne(Request $request)
    {
        $request->session()->forget('student_application_obj');
        $request->session()->forget('student_other_detail_obj');
        $request->session()->forget('student_course_detail_obj');
        $request->session()->forget('page_one_submit');
        $request->session()->forget('page_two_submit');
        $request->session()->forget('page_three_submit');
        return view('registrationform');
    }
    public function registerPageTwo(Request $request)
    {
        $value = $request->session()->get('page_one_submit');
        if($value){
            return view('registrationform2');
        }
        return view('errorPage');
    }
    public function registerPageThree(Request $request)
    {
        $value = $request->session()->get('page_two_submit');
        if($value){
            return view('registrationform3');
        }
        return view('errorPage');

    }

    public function submitPageOne(Request $request)
    {
        $input = array_filter($request->all(),'strlen');

        $application = new StudentApplication($input);
        error_log(print_r($application->toArray(),true));

        if (!strcmp($input['addressSameAsAbove'],'y')){
            $application->permanentStreet = $input['currentStreet'];
            $application->permanentCity = $input['currentCity'];
            $application->permanentState = $input['currentState'];
            $application->permanentCountry = $input['currentCountry'];
            $application->permanentZip = $input['currentZip'];
            $application->permanentHomePhone = $input['currentHomePhone'];
        }
        $request->session()->put('student_application_obj',$application);
        $request->session()->put('page_one_submit',true);

        return redirect('register/2');
    }

    public function submitPageTwo(Request $request)
    {
        $input = array_filter($request->all(),'strlen');

        $application = $request->session()->get('student_application_obj');

        $application->fill($input);

        $college_id = 1;
        $otherDetailCollection = array();
        while ( array_key_exists('College'.$college_id,$input) ) {
            $otherDetail = new StudentApplicationOtherDetail;
            $otherDetail->detailType = 'College';
            $otherDetail->detailvalue = $input['College'.$college_id];
            array_push($otherDetailCollection,$otherDetail);
            $college_id++;
        }

        $courseDetailCollection = array();
        $course_types = array('math', 'currmathscience', 'science');
        for ( $i = 0; $i < count($course_types); $i++ ) {
            $course_index = 1;
            $course_type = $course_types[$i];
            while ( array_key_exists($course_type.'course'.$course_index,$input) ) {
                $courseDetail = new StudentApplicationCourseDetail;
                $courseDetail->courseType = $course_type;
                $courseDetail->courseID = $input[$course_type.'course'.$course_index];
                $courseDetail->courseTitle = $input[$course_type.'title'.$course_index];
                $courseDetail->courseGrade = $input[$course_type.'grade'.$course_index];
                array_push($courseDetailCollection,$courseDetail);
                $course_index++;
            }
        }

        $request->session()->put('student_application_obj',$application);
        $request->session()->put('student_other_detail_obj',$otherDetailCollection);
        $request->session()->put('student_course_detail_obj',$courseDetailCollection);

        $request->session()->forget('page_one_submit');
        $request->session()->put('page_two_submit',true);
        return redirect('register/3');
    }

    public function submitPageThree(Request $request)
    {
	$this->validate($request, [
	'g-recaptcha-response' => 'required|captcha'
    	]);

        $input = array_filter($request->all(),'strlen');

        $application = $request->session()->get('student_application_obj');
        $application->fill($input);

        $application->save();

        $application_id = $application->id;

        $file = $request->file('attachFileOne');
        if($file){
            $application->attachFileOne = $request->file('attachFileOne')->getClientOriginalName();
            //$origFileExt = $request->file('attachFileOne')->getClientOriginalExtension();
            $filename = $application_id . '_' . $request->file('attachFileOne')->getClientOriginalName();
            Storage::disk('local')->put($filename, File::get($file));
        }

        $file = $request->file('attachFileTwo');
        if($file){
            $application->attachFileTwo = $request->file('attachFileTwo')->getClientOriginalName();
            //$origFileExt = $request->file('attachFileTwo')->getClientOriginalExtension();
            $filename = $application_id . '_' . $request->file('attachFileTwo')->getClientOriginalName();
            Storage::disk('local')->put($filename, File::get($file));
        }
        $application->status = 'pending';
        $application->update();

        $otherDetailCollection = $request->session()->get('student_other_detail_obj');
        
        $award_id = 1;
        while ( array_key_exists('Award'.$award_id,$input) ) {
            $otherDetail = new StudentApplicationOtherDetail;
            $otherDetail->detailType = 'Award';
            $otherDetail->detailvalue = $input['Award'.$award_id];
            array_push($otherDetailCollection,$otherDetail);
            $award_id++;
        }

        $program_id=1;
        while ( array_key_exists('Program'.$program_id,$input) ) {
            $otherDetail = new StudentApplicationOtherDetail;
            $otherDetail->detailType = 'Program';
            $otherDetail->detailvalue = $input['Program'.$program_id];
            array_push($otherDetailCollection,$otherDetail);
            $program_id++;
        }

        foreach ($otherDetailCollection as $otherDetail){
            $otherDetail->application_id = $application_id;
            $otherDetail->save();
        }

        $courseDetailCollection = $request->session()->get('student_course_detail_obj');

        foreach ($courseDetailCollection as $courseDetail){
            $courseDetail->application_id = $application_id;
            $courseDetail->save();
        }

        $request->session()->forget('student_application_obj');
        $request->session()->forget('student_other_detail_obj');
        $request->session()->forget('student_course_detail_obj');
        $request->session()->forget('page_one_submit');
        $request->session()->forget('page_two_submit');
        $request->session()->forget('page_three_submit');
        $request->session()->put('page_three_submit',true);
        return redirect('success');
    }

    public function successPage(Request $request){

        $value = $request->session()->get('page_three_submit');
        if(true){
            $request->session()->forget('student_application_obj');
            $request->session()->forget('student_other_detail_obj');
            $request->session()->forget('student_course_detail_obj');
            $request->session()->forget('page_one_submit');
            $request->session()->forget('page_two_submit');
            $request->session()->forget('page_three_submit');
            return view('successPage');
        }
        return view('errorPage');
    }

    public function errorPage(){
        return view('errorPage');
    }
}
