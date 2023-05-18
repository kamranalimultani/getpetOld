<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ultraCatModel extends Model
{
    use HasFactory;
    protected $table="ultra_cat";
    protected $primaryKey="uCat_id";
}
