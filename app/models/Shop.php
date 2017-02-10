<?php
namespace app\models;
use Illuminate\Database\Eloquent\Model as Eloquent;
class Shop extends Eloquent
{
    protected $fillable = ['name','location'];
}