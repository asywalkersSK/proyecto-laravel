<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $table="test";
    protected $primaryKey="id";
    protected $fillable=["pregunta"];
    protected $guarded=[];
    public $timestamps=false;

}
