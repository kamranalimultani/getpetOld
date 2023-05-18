<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productRequestModal extends Model
{
    use HasFactory;
    protected $table="productRequest";
    protected $primaryKey="id";
}
