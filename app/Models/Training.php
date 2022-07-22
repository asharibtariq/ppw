<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model{
    use HasFactory;
    protected $table = "tbl_training";
    protected $fillable = [
        'title',
        'description',
        'author',
        'document',
        'status',
        'created_by',
        'updated_by'
    ];
}
