<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model{
    use HasFactory;
    protected $table = "tbl_gallery";
    protected $fillable = [
        'title',
        'description',
        'author',
        'image',
        'status',
        'created_by',
        'updated_by'
    ];
}
