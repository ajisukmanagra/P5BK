<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iden extends Model
{
    protected $table = 'iden';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}

