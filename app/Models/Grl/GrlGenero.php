<?php

namespace App\Models\Grl;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrlGenero extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'grl_generos';
    protected $primaryKey = 'grl_genero_id';

    protected $fillable = [
        'grl_genero_id',
        'denominacao',
    ];

    public function pessoa()
    {
        return $this->hasOne('App\Models\Rh\RhPessoa','rh_pessoa_id','rh_pessoa_id');
    }
}
