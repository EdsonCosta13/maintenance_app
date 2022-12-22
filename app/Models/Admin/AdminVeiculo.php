<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminVeiculo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'admin_veiculos';
    protected $primaryKey = 'admin_veiculo_id';
   
    protected $fillable = [
        'placa',
        'user_id',
        'admin_veiculo_id',
        'admin_marca_id',
    ];

    public function marca()
    {
        return $this->belongsTo('App\Models\Admin\AdminMarca','admin_marca_id','admin_marca_id');
    }

    public function modelos()
    {
        return $this->hasMany('App\Models\Admin\AdminModelo','admin_modelo_id','admin_modelo_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','user_id');
    }

    public function manutencaos()
    {
        return $this->hasMany('App\Models\Grl\GrlManutencao','grl_manutencao_id','grl_manutencao_id');
    }
}
