<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Group;

class Voucher extends Model
{
	protected $table      = 'students';
  protected $primaryKey = 'id';
  public $timestamps    = true;
  protected $fillable   = [
    'user_id','group_id','monto','estado','imagen'
  ];
  public function user()
  {
  	return $this->belongsTo(User::class,'user_id');
  }
  public function group()
  {
  	return $this->belongsTo(Group::class,'group_id');
  }
}
