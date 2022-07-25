<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model{
    use HasFactory;
    protected $table = "tbl_video";
    protected $fillable = [
        'title',
        'description',
        'author',
        'video',
        'status',
        'created_by',
        'updated_by'
    ];
}
