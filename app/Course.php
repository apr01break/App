<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Course extends Model
{
  protected $attributes = [
      'lunes' => false,
      'martes' => false,
      'miercoles' => false,
      'jueves' => false,
      'viernes' => false,
      'sabado' => false,
      'domingo' => false,
      'online' => false,
      'presencial' => false,
  ];

  protected $table      = 'courses';
  protected $primaryKey = 'id';
  public $timestamps    = true;
  protected $fillable   = [
    'nombre','horas','dias','horainicio','horaconclusion','lunes','martes','miercoles','jueves','viernes','sabado','domingo','precio','presencial','online','incluye','descripcion'
  ];
  public function groups()
  {  
    return $this->hasMany(Group::class,'course_id');
  }
}
