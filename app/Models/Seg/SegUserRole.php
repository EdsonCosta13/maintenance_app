<?php

namespace App\Models\Seg;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegUserRole extends Model
{
    use HasFactory;
    protected $table = 'seg_user_roles';
    protected $primaryKey = 'seg_user_role_id';

    protected $fillable = [
        'seg_user_role_id',
        'user_id',
        'seg_role_id'
    ];
}
