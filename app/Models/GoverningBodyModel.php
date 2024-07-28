<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoverningBodyModel extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'pid_user',
        'email',
        'phone',
        'account_type',
        'country',
        'state',
        'city',
        'street',
        'governing_body_name',
        'governing_body_chapter',
        'governing_body_state',
        'governing_body_website',
        'governing_body_brief',
        'governing_body_officer_name',
        'governing_body_officer_phone',
        'active',
        'email_verified_at',
        'password',
        'created_at',
        'updated_at',
    ];
}
