<?php

namespace App\Models\Grl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrlManutencao extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'grl_manutencaos';
    protected $primaryKey = 'grl_manutencao_id';

    protected $fillable = [
        'grl_manutencao_id',
        'data',
        'hora',
        'estado',
        'grl_veiculo_id',
    ];
}
