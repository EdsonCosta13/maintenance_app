<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMarca extends Model
{
    use HasFactory;
    use SoftDeletes;  

    protected $table = 'admin_marcas';
    protected $primaryKey = 'admin_marca_id';

    protected $fillable = [
        'admin_marca_id',
        'designacao',
    ];

    public function veiculos()
    {
        return $this->hasMany('App\Models\Admin\AdminVeiculo','admin_veiculo_id','admin_veiculo_id');
    }
}
