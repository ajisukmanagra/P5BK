<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi_ujian extends Model
{
    protected $table = 'materi_ujian';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}
