<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    //

    public function index()
    {
        return 'hello world!';
    }

    public function contact()
    {
        return 'Contact US!';
    }
}
