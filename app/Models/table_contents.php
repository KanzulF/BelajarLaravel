<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_contents extends Model
{
    protected $fillable = ['title','description','status'];
}
