<?php

namespace App\Models\Seg;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SegRole extends Model
{
    use HasFactory;
    protected $table = "seg_roles";
    protected $primaryKey = "seg_role_id";

    protected $fillable = [
        'seg_role_id',
        'denominacao',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class,'seg_user_roles');
    }
}
