<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'department',
        'role',
        'home',
        'email',
        'password'
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

    public function getRoles()
    {
        return $this->belongsToMany(Roles::class,'roles_user');
    }

    public function getUserRolesPermissions()
    {
        return $this->hasManyThrough(Permissions::class, Roles::class);
    }

}

/*

https://laravel.io/forum/10-17-2014-nested-many-to-many-relationships#15823

'project_id', // Foreign key on the environments table...
'environment_id', // Foreign key on the deployments table...
'id', // Local key on the projects table...
'id' // Local key on the environments table...
*/
