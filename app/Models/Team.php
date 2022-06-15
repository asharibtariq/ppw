<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = "tbl_team";
    protected $fillable = [
        'name',
        'designation',
        'department',
        'image',
        'description',
        'status',
        'created_by',
        'updated_by'
    ];

}
