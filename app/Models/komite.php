<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komite extends Model
{
    protected $table = 'komite';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
