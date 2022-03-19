<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;


//@mixin Builder

class Country extends Model
{
    use HasFactory;
    protected  $table='country';
    protected $primaryKey='Code';
    public $incrementing=false;
    protected $keyType='string';


}
