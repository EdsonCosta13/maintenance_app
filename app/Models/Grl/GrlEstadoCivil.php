<?php

namespace App\Models\Grl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrlEstadoCivil extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='grl_estado_civils';
    protected $primaryKey='grl_estado_civil_id';

    protected $fillable=[
        'grl_estado_civil_id',
        'denominacao',
    ];

    public function pessoas()
    {
        return $this->hasMany('App\Models\Rh\RhPessoa','rh_pessoa_id','rh_pessoa_id');
    }
}
