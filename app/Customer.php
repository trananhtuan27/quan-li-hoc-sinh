<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
protected $table = "customers";
public $timestamps = false;
protected $fillable = ['id','Name','Email'];
}
