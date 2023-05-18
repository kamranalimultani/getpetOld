<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pImagesModel extends Model
{
    use HasFactory;
    protected $table="p_images";
    protected $primaryKey="image_id";
}
