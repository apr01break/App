<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Student extends Model
{
  	protected $table      = 'students';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    protected $fillable   = [
        'user_id','name','dni','email','fechanacimiento','direccion','telefono','celular','especialidad','centrolaboral','discapacidad','conexion','comentarios','estado'
    ];
    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
}
