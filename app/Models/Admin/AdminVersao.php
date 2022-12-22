<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminVersao extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'admin_versaos';
    protected $primaryKey = 'admin_versao_id';

    protected $fillable = [
        'admin_versao_id',
        'designacao',
        'admin_modelo_id',
    ];

    /*
        public function veiculos()
    {
        return $this->belongsTo('App\Models\Admin\AdminModelo','admin_modelo_id','admin_modelo_id');
    }
    */

    public function modelo()
    {
        return $this->belongsTo('App\Models\Admin\AdminModelo','admin_modelo_id','admin_modelo_id');
    }
}
