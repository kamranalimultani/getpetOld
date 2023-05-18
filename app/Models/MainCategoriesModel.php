<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategoriesModel extends Model
{
    use HasFactory;
    protected $table="main_categories";
    protected $primaryKey="main_cat_id";
}
