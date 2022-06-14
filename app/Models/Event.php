<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    use HasFactory;
    protected $table = "tbl_event";
    protected $fillable = [
        'author',
        'title',
        'description',
        'image',
        'location',
        'date',
        'status',
        'created_by',
        'updated_by'
    ];

}
