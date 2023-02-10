<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Pessoa extends Model
{
    use HasFactory;
    use UUID;
    
    protected $table = 'pessoas';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;
    
    //protected $attributes = [
       // ''
    //];
}
