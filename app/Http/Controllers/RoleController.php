<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Role;
class RoleController extends Controller
{
  public function index(){
    $allroles=Role::all();
    return view('role.index',compact('allroles'));
  }
  public function store(Request $request){
    $newrole=new Role();
    $newrole-> name         = $request->get('name');
    $newrole-> display_name = $request->get('display_name'); //optional
    $newrole-> description  = $request->get('description');// optional
    $newrole->save();
    return Redirect::to('role');
  }
  public function create(){
    return view('role.create');
  }
  public function show($id){
    $onerole=Role::find($id);
    return view('role.show',compact('onerole'));
  }
  public function edit($id){
    $onerole=Role::find($id);
    return view('role.edit',compact('onerole'));
  }
  public function update(Request $request,$id){
    $updatedrole=Role::find($id);
    $updatedrole-> name=$request-> name;
    $updatedrole-> display_name =$request-> display_name;
    $updatedrole-> description =$request-> description;
    $upupdatedrole->save();
    return Redirect::to('role');
  }
  public function destroy($id){
    $droprole=Role::find($id);
    $droprole->delete();
    return Redirect::to('role');
  }
}
