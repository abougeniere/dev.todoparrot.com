<?php namespace todoparrot\Http\Controllers;

use todoparrot\Http\Requests;
use todoparrot\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function create()
    {
        return view('about.contact');
    }

    public function store()
    {
    }

}
