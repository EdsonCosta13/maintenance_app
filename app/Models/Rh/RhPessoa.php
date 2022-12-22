<?php

namespace App\Models\Rh;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RhPessoa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='rh_pessoas';
    protected $primaryKey='rh_pessoa_id';

    protected $fillable=[
        'rh_pessoa_id',
        'nome',
        'sobrenome',
        'cpf',
        'data_nascimento',
        'grl_genero_id',
        'grl_estado_civil_id',
    ];

    public function genero()
    {
        return $this->belongsTo('App\Models\Grl\GrlGenero','grl_genero_id','grl_genero_id');
    }

    public function estado_civil()
    {
        return $this->belongsTo('App\Models\Grl\GrlEstadoCivil','grl_estado_civil_id','grl_estado_civil_id');
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function veiculo()
    {
        return $this->hasMany('App\Models\Admin\AdminVeiculo','admin_veiculo_id','admin_veiculo_id');
    }
}
