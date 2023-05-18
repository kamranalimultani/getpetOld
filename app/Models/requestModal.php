<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestModal extends Model
{
    use HasFactory;
    protected $table="requests";
    protected $primaryKey="id";
}
