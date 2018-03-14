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
					<a href="{{route('student.edit',$user->id)}}" class="btn btn-primary btn-sl pull-right">TU FICHA DE MATRICULA</a>
						@endif
				</div>
				<div id="slickcourses">
					<div class="panel panel-primary" >
						<div class="panel-heading">ITIL FOUNDATION</div>
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac gravida felis. Sed arcu erat, feugiat vel mi et, tristique elementum diam. Aliquam interdum rhoncus ante, sit amet tempus tellus commodo eget. In ullamcorper mattis tellus, eget tempus velit egestas id. Nunc fringilla, ipsum sed consectetur sodales,</div>
						<div class="panel-footer">Ver más...</div>
					</div>
					<div class="panel panel-danger" >
						<div class="panel-heading">SCRUM</div>
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac gravida felis. Sed arcu erat, feugiat vel mi et, tristique elementum diam. Aliquam interdum rhoncus ante, sit amet tempus tellus commodo eget. In ullamcorper mattis tellus, eget tempus velit egestas id. Nunc fringilla, ipsum sed consectetur sodales,</div>
						<div class="panel-footer">Ver más...</div>
					</div>
					<div class="panel panel-default" >
						<div class="panel-heading">BIG DATA</div>
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac gravida felis. Sed arcu erat, feugiat vel mi et, tristique elementum diam. Aliquam interdum rhoncus ante, sit amet tempus tellus commodo eget. In ullamcorper mattis tellus, eget tempus velit egestas id. Nunc fringilla, ipsum sed consectetur sodales,</div>
						<div class="panel-footer">Ver más...</div>
					</div>
					<div class="panel panel-success" >
						<div class="panel-heading">DESIGN THINKIN</div>
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac gravida felis. Sed arcu erat, feugiat vel mi et, tristique elementum diam. Aliquam interdum rhoncus ante, sit amet tempus tellus commodo eget. In ullamcorper mattis tellus, eget tempus velit egestas id. Nunc fringilla, ipsum sed consectetur sodales,</div>
						<div class="panel-footer">Ver más...</div>
					</div>
					<div class="panel panel-warning" >
						<div class="panel-heading">PMP</div>
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac gravida felis. Sed arcu erat, feugiat vel mi et, tristique elementum diam. Aliquam interdum rhoncus ante, sit amet tempus tellus commodo eget. In ullamcorper mattis tellus, eget tempus velit egestas id. Nunc fringilla, ipsum sed consectetur sodales,</div>
						<div class="panel-footer">Ver más...</div>
					</div>
				</div>
				<div class="paginator-center text-color text-center">
			    <a href="#" class="btn btn-primary">VER TODOS LOS CURSOS</a>
			    <ul class="list-group">
						<li><a href="javascript:void(0)" class="prev">Anterior<i class="fa fa-arrow-left"></i> <span></span> </a></li>
						<li><a href="javascript:void(0)" class="next"><i class="fa fa-arrow-right next"></i>Siguiente <span></span> </a></li>

			    </ul>
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
