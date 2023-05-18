<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagsModel extends Model
{
    protected $table="posts_tags";
    protected $primaryKey="tag_id";
}
