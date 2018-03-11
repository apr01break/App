@extends('adminlte::layouts.app')
@section('main-content')
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Actualización de matrícula</h3>
        </div>
      <form role="form" action="{{route('student.update',$user->id)}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="box-body">
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="nombre">Nombre completo</label>
            <input type="text"id="name" name="name" value="{{$student->name}}" class="form-control" placeholder="Escribe tu nombre..." required>
            <p class="text-aqua">Escribe el nombre que aparecera en tus certificados</p>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="dni">Documento de indentificación (D.N.I. o pasaporte)</label>
            <input type="text"id="dni" name="dni" value="{{$student->dni}}" class="form-control" placeholder="Escribe tu documento de identifación..." required>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="email">Email</label>
            <input type="text"id="email" name="email" value="{{$student->email}}" class="form-control" placeholder="Escribe tu documento de identifación..." required>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="date">Fecha de nacimiento</label>
            <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="fechanacimiento" class="form-control pull-right" id="datepicker" data-date-format="yyyy/mm/dd" data-date-end-date="-1820d" required value="{{$student->fechanacimiento}}">
            </div>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="direccion">Dirección</label>
            <input type="text"id="direccion" name="direccion" value="{{$student->direccion}}" class="form-control" placeholder="Escribe la direccion de tu domicilio..." required>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="direccion">Telefono</label>
            <input type="text"id="telefono" name="telefono" value="{{$student->telefono}}" class="form-control" placeholder="Escribe tu telefono fijo...">
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="celular">Celular</label>
            <input type="text"id="celular" name="celular" value="{{$student->celular}}" class="form-control" placeholder="Escribe tu numero móvil..." required>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="carrera">Carrera o especialidad</label>
            <input type="text"id="especialidad" name="especialidad" value="{{$student->especialidad}}" class="form-control" placeholder="Escribe tu carrera..." required>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="">Centro laboral</label>
            <input type="text"id="laboral" name="centrolaboral" value="{{$student->centrolaboral}}" class="form-control" placeholder="Escribe tu centro laboral..." required>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="conexion">¿Como te enteraste de nosotros?</label>
            <select class="form-control" name="conexion" placeholder="hola">
              <option value="facebook" {{($student->conexion == 'facebook') ? ' selected' :''}}>  FACEBOOK</option>
              <option value="google"  {{($student->conexion == 'google') ? ' selected' :''}}>GOOGLE</option>
            </select>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <label for="comentarios">Comentarios</label>
            <textarea name="comentarios" rows="8" cols="80" style="resize:none;" class="form-control"></textarea>
          </div>
          <div class="form-group col-md-8 col-md-offset-2">
            <div class="pretty p-default p-thick p-pulse p-bigger">
              @if(!empty($student->discapacidad))
                <input type="checkbox" name="checkbox" checked/>
              @else
                <input type="checkbox" name="checkbox" />
              @endif
                <div class="state p-primary-o">
                    <label>Poseo una discapacidad</label>
                </div>
            </div>
            <br />
            <br>
            <input id="showthis" name="discapacidad" size="50" type="text" class="form-control" placeholder="Escribe la discapacidad que posees..." value="{{$student->discapacidad}}"/>
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
<link rel="stylesheet" href="{{asset('plugins/datepicker/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/iCheck/pretty-checkbox.min.css')}}">
@endsection
@section('script')
<script type="text/javascript" src="{{asset('plugins/datepicker/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
//Date picker
  $(function () {
  $('#datepicker').datepicker({
    autoclose: true
  })
  if (!$('input[name="checkbox"]').is(':checked')) {
    $('input[name="discapacidad"]').hide();
  }
  $('input[name="checkbox"]').on('click', function () {
      if ($(this).prop('checked')) {
          $('input[name="discapacidad"]').fadeIn();
      } else {
          $('input[name="discapacidad"]').val('');
          $('input[name="discapacidad"]').hide();
      }
  })
  });
</script>
@endsection
