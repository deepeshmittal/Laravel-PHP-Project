<?php

namespace App\Http\Controllers;

use App\StudentApplication;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;

class StudentRegistration extends Controller
{
    //

    public function registerPageOne()
    {
            return view('registrationform');
    }
    public function registerPageTwo()
    {
        return view('registrationform2');
    }
    public function registerPageThree()
    {
        return view('registrationform3');
    }

    public function submitPageOne(Request $request)
    {
        $input = array_filter($request->all(),'strlen');

        $application = new StudentApplication($input);

        Session::put('form1_obj',$application);

        return redirect('register/2');
    }
}
