<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PermissionsRolesPivotTable;

class Roles extends Model
{

    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    public function getRolesPermissions()
    {
        return $this->belongsToMany(Permissions::class);
    }
}
