<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;
    protected $table = "tbl_publication";
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
