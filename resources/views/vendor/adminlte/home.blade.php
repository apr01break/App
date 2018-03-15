@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Gesap
@endsection

@section('main-content')
<div class="container-fluid spark-screen">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h2 class="box-title">BIENVENIDO</h3>
						@if($user->hasRole('alumno'))
					<a href="{{route('student.edit',$user->id)}}" class="btn btn-danger btn-sl pull-right">TU FICHA DE MATRICULA</a>
						@endif
				</div>
				<div class="box-body">
					@foreach($groups as $group)
					<!--<a href="" style="text-decoration:none;">-->
						<div class="panel panel-primary">
			        <div class="panel-heading">
			            <h1 class="panel-title">{{$course->where('id',$group->course_id)->first()->nombre}}</h1>
			        </div>
			        <div class="panel-body">
								<div class="row">
									<div class="col-xs-6">
										<b>Fecha de inicio </b><p>{{$group->fechainicio}}</p>
										<b>Fecha de conclusion </b><p>{{$group->fechaconclusion}}</p>
									</div>
									<div class="col-xs-6">
										<b>Hora de inicio </b><p>{{$course->where('id',$group->course_id)->first()->horainicio}}</p>
										<b>Hora de conclusion </b><p>{{$course->where('id',$group->course_id)->first()->horaconclusion}}</p>
									</div>
									<div class="col-xs-6">
										<b>Dias</b>
										<p>@if($course->where('id',$group->course_id)->first()->lunes)
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
											@endif</p>
										</div>
											<div class="col-xs-6">
												<b>Modalidad</b>
												<p>@if($course->where('id',$group->course_id)->first()->online)
													Online
												@endif
												@if($course->where('id',$group->course_id)->first()->presencial)
													Presencial
												@endif</p>
											</div>
											<div class="col-xs-6">
												<b>Detalles</b>
												<p>@if($course->where('id',$group->course_id)->first()->incluye!='')
												Incluye: {{$course->where('id',$group->course_id)->first()->incluye}}
												@endif
												<br>
												@if($course->where('id',$group->course_id)->first()->horas!='')
													{{$course->where('id',$group->course_id)->first()->horas}} Horas
												@endif
											  </p>
											</div>
											<div class="col-xs-6">
												<b>Precio</b>
												<p>
													<h4><span class="label label-danger">S/.{{$course->where('id',$group->course_id)->first()->precio}}</span></h4>
												</p>
											</div>
								</div>
			        </div>
							<div class="panel-footer">
								<a href="{{route('voucher.create', [$userId, $group->id] )}}" class="btn btn-primary">ENVIAR MI VOUCHER DE PAGO</a>
							</div>
		    		</div>
					<!--</a>-->
					@endforeach
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('plugins/slick/slick.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">
<style media="screen">
.list-group li {
	list-style: none;
	display:inline;
}
</style>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('plugins/slick/slick.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function(){
      $('#slickcourses').slick({
				centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      prevArrow: $('.prev'),
      nextArrow: $('.next'),
			});
    });
</script>
@endsection
