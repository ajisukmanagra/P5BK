<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    protected $table = 'alumni';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
