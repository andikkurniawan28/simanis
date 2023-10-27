<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Username extends Model
{
    use HasFactory;

    protected $table = "username";

    protected $guarded = [];

    public $timestamps = false;
}
