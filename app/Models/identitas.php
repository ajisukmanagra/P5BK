<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class identitas extends Model
{
    protected $table = 'identitas';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
