<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {

        return view('home');

    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function welcome()
    {
        return view('welcome');
    }
}
