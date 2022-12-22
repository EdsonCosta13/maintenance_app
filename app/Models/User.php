<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Rh\RhPessoa;
use App\Models\Seg\SegRole;



class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table="users";
    protected $primaryKey='user_id';
    protected $fillable = [
        'email',
        'password',
        'rh_pessoa_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pessoa()
    {
        return $this->belongsTo('App\Models\Rh\RhPessoa','rh_pessoa_id','rh_pessoa_id');
    }

    public function role()
    {
        return $this->belongsToMany('App\Models\Seg\SegRole','seg_user_roles');
    }

    public function veiculos()
    {
        return $this->hasMany('App\Models\Admin\AdminVeiculo','admin_veiculo_id','admin_veiculo_id');
    }
}
