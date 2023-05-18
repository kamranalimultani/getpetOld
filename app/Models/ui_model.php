<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ui_model extends Model
{
    use HasFactory;
    protected $table="ui_Slider";
    protected $primaryKey="slider_id";
}
