<?php

namespace App\Http\Controllers;

use App\Voucher;
use Illuminate\Http\Request;
use App\Group;
use App\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Image;
use Response;
class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Group  $request
     * @return \Illuminate\Http\Response
     */
    public function create($userId,$id)
    {
      $group=Group::where('id',$id)->first();
      $course=Course::where('id',$group-> course_id)->first();
      return view('voucher.create',compact('group','course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$userId,$groupId)
    {
      $file=Input::file('imagen')->getRealPath();
      $img=Image::make($file);
      Response::make($img->encode('jpeg'));
        $voucher=new Voucher();
        $voucher-> imagen = $img;
        $voucher-> estado= 0;
        $voucher-> group_id= $groupId;
        $voucher-> user_id= $userId;
        $voucher-> monto= $request->get('monto');
        $voucher-> save();
        return Redirect::to('voucher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function show(Voucher $voucher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function edit(Voucher $voucher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voucher $voucher)
    {
        //
    }
}
