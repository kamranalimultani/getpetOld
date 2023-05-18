<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adoptionModel extends Model
{
    use HasFactory; 
    protected $table="tbl_adoption";
    protected $primaryKey="id";
}
