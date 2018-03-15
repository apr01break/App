<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Course;
use App\Group;
use Illuminate\Support\Facades\Auth;
/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
      $groups=Group::where('estado',1)->orderBy('fechainicio','asc')->get();
      $course=Course::all();
      $userId = Auth::user()->id;
        return view('adminlte::home',compact('groups','course','userId'));
    }
}
