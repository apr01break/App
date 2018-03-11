@extends('adminlte::layouts.app')
@section('main-content')
<!--FOR ADMIN USERS-->
@if($user->hasrole('administrator'))
hola
@endif

<!--FOR STUDENT USER-->
@endsection
