<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    use HasFactory;
    use UUID;

    protected $table = 'utentes';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = true;

    protected $fillable = [
        'utilizador_id',
        'filiacao',
        'numero_bi',
        'residencia',
        'naturalidade',
        'provincia',
        'emissao_bi',
        'altura',
        'validade_bi',
        'sexo',
        'estado_civil',
        'data_nascimento',
    ];

    public function utilizador()
    {
        return $this->belongsTo(Utilizador::class, 'utilizador_id');
    }
}
