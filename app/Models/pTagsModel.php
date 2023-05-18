<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pTagsModel extends Model
{
    use HasFactory;
    protected $table="p_tags";
    protected $primaryKey='tag_id';
}
