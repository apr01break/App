<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;

class Group extends Model
{

	protected $table      = 'groups';
  protected $primaryKey = 'id';
  public $timestamps    = true;
  protected $fillable   = [
    'fechainicio','course_id','fechaconclusion','estado','observacion'
  ];
  public function course()
  {
    return $this->belongsTo(Course::class,'course_id');
  }
  public function vouchers()
  {  
    return $this->hasMany(Voucher::class,'group_id');
  }
}
