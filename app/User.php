<?php

namespace App;

use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

//Import Roles
use dubstepmad\FormBuilder\Models\Submission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

//Import Media Library
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;

//Import Passport Tokens
use Laravel\Passport\HasApiTokens;

//Import Form Builder
use dubstepmad\FormBuilder\Traits\HasFormBuilderTraits;

class User extends Authenticatable
{
    use Notifiable, HasRoles, HasMediaTrait, HasApiTokens, HasFormBuilderTraits;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
}
