@extends('adminlte::layouts.app')
@section('contentheader_title','Comprobante')
@section('htmlheader_title')
	Crear un nuevo comprobante
@endsection
@section('main-content')
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Registra tu comprobante para el curso</h3>
        </div>
        <form class="" action="{{route('voucher.store',['userId'=>$user->id,'groupId'=>$group->id])}}" method="post" files="true" enctype="multipart/form-data">
          {{ csrf_field() }}
        <div class="box-body">
          <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Alerta!</h4>
                Por favor verifica que los datos del grupo al cual te inscribes son correctos.
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="name">Nombre del curso</label>
            <label for="" class="form-control">{{$course->nombre}}</label>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="fechainicio">Fecha de inicio</label>
            <label for="" class="form-control"> {{$group->fechainicio}}</label>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="display_name">Fecha de conclusión</label>
            <label for="" class="form-control">{{$group->fechaconclusion}}</label>
          </div>
					<div class="form-group col-md-8 col-md-offset-2">
            <label for="precio">Precio</label>
            <label for="" class="form-control">S/.{{$course->precio}}</label>
          </div>
					<div class="form-group col-md-8 col-md-offset-2">
            <label for="display_name">Cantidad de Horas</label>
            <label for="" class="form-control">{{$course->horas}}</label>
          </div>
					<div class="form-group col-md-8 col-md-offset-2">
            <label for="display_name">Incluye</label>
            <label for="" class="form-control">{{$course->incluye}}</label>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="display_name">Modalidad del curso</label>
            <label for="" class="form-control">@if($course->online) Online @endif @if($course->presencial) Presencial @endif</label>
          </div>
					<div class="form-group col-md-8 col-md-offset-2">
						<label for="incluye">Días</label>
            <label for="" class="form-control">@if($course->lunes)
              Lunes
              @endif
              @if($course->martes)
                Martes
                @endif
                @if($course->miercoles)
                  Miercoles
                  @endif
                  @if($course->jueves)
                    Jueves
                    @endif
                    @if($course->viernes)
                      Viernes
                      @endif
                      @if($course->sabado)
                        Sabado
                        @endif
              @if($course->domingo)
              Domingo
              @endif</label>
					</div>
					<div class="form-group col-md-8 col-md-offset-2">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" rows="8" cols="80" style="resize:none;" class="form-control" readonly value="{{$course->descripcion}}" ></textarea>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> ¿Todo correcto?</h4>
                Bien, ahora procede a enviarnos los datos de tu comprobante.
              </div>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="">Adjunta imagen de tu comprobante</label>
            <input type="file" name="imagen" value="" class="form-control" accept="image/x-png,image/jpeg">
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="">Escribe el monto que estas pagando</label>
            <input type="number" name="monto" value="" class="form-control" placeholder="Digite el monto que aparece en su comprobante">
          </div>
        </div>
        <div class="box-footer">
          <button type="button" name="button" class="btn btn-default">Cancelar</button>
          <button type="submit" name="button" class="btn btn-primary pull-right">Registrar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('plugins/iCheck/pretty-checkbox.min.css')}}">
@endsection
