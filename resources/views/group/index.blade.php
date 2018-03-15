@extends('adminlte::layouts.app')
@section('contentheader_title','Grupos')
@section('htmlheader_title')
	Grupos
@endsection
@section('main-content')
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Registros de grupos</h3>
          <a href="{{route('group.create')}}" class="btn btn-primary pull-right">Nuevo grupo</a>
        </div>
				<div class="box-body">
              <div class="table-responsive">
                <table id="dataTables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th data-priority="1">Nombre del curso</th>
											<th>Fecha inicio del grupo</th>
											<th>Fecha conclusion del grupo</th>
											<th>Hora inicio del curso</th>
											<th>Hora de conclusión del curso</th>
											<th>Dias</th>
                      <th data-priority="3" width="1%">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
										@foreach($groups as $group)
										<tr>
											<td>{{$course->where('id',$group->course_id)->first()->nombre}}</td>
											<td>{{$group->fechainicio}}</td>
											<td>{{$group->fechaconclusion}}</td>
											<td>{{$course->where('id',$group->course_id)->first()->horainicio}}</td>
											<td>{{$course->where('id',$group->course_id)->first()->horaconclusion}}</td>
											<td>@if($course->where('id',$group->course_id)->first()->lunes)
												Lunes
												@endif
												@if($course->where('id',$group->course_id)->first()->martes)
													Martes
													@endif
													@if($course->where('id',$group->course_id)->first()->miercoles)
														Miercoles
														@endif
														@if($course->where('id',$group->course_id)->first()->jueves)
															Jueves
															@endif
															@if($course->where('id',$group->course_id)->first()->viernes)
																Viernes
																@endif
																@if($course->where('id',$group->course_id)->first()->sabado)
																	Sabado
																	@endif
												@if($course->where('id',$group->course_id)->first()->domingo)
												Domingo
												@endif
												</td>
                      <td><a href="" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                      </td>
										</tr>
										@endforeach
                  </tbody>
                </table>
              </div>
				</div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('plugins/datatables/css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables/css/responsive.bootstrap.min.css')}}">
@endsection
@section('script')
<script type="text/javascript" src="{{asset('plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/js/responsive.bootstrap.min.js')}}"></script>
<!--
<script type="text/javascript" src="{{asset('plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/js/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/js/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/js/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('plugins/datatables/js/vfs_fonts.js')}}"></script>
-->
<script type="text/javascript">
$(function () {
	$('#dataTables').DataTable();
});
</script>

@endsection
