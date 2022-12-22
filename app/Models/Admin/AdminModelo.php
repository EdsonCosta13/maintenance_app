<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminModelo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'admin_modelos';
    protected $primaryKey = 'admin_modelo_id';

    protected $fillable = [
        'admin_modelo_id',
        'designacao',
        'admin_veiculo_id',
    ];

    public function veiculos()  
    {
        return $this->belongsTo('App\Models\Admin\AdminVeiculo','admin_veiculo_id','admin_veiculo_id');
    }

    public function versaos()
    {
        return $this->hasMany('App\Models\Admin\AdminVersao','admin_versao_id','admin_versao_id');
    }
}
