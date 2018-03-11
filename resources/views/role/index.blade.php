@extends('adminlte::layouts.app')
@section('contentheader_title','Roles')
@section('htmlheader_title')
	Roles
@endsection
@section('main-content')
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Registros de roles</h3>
          <a href="{{route('role.create')}}" class="btn btn-primary pull-right">Nuevo Rol</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
