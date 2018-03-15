<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Course;
//use Illuminate\Support\Facades\Input;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        return view('course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course=new Course();
        $course-> nombre= $request->get('nombre');
        $course-> horas= $request->get('horas');
        $course-> dias= $request->get('dias');
        $course-> horainicio= $request->get('horainicio');
        $course-> horaconclusion= $request->get('horaconclusion');
        $course-> precio= $request->get('precio');
        $course-> lunes= $request->has('lunes');
        $course-> martes= $request->has('martes');
        $course-> miercoles= $request->has('miercoles');
        $course-> jueves= $request->has('jueves');
        $course-> viernes= $request->has('viernes');
        $course-> sabado= $request->has('sabado');
        $course-> domingo= $request->has('domingo');
        $course-> presencial= $request->has('presencial');
        $course-> online= $request->has('online');
        $course-> incluye= $request->get('incluye');
        $course-> descripcion= $request->get('descripcion');
        $course->save();
        return Redirect::to('course');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('course.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
