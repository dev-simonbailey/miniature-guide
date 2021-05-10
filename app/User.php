<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    public $role = [];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'department',
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

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function assignRole(Role $role)
    {
        $this->roles()->save($role);
    }

    public function assignRolesByID(array $roleID) {
        $roles = Role::where('id',['in'=>$roleID]);
        $this->roles()->saveMany($roles);
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }
        return $role->intersect($this->roles);
    }

    public function roleNames(): string
    {
        $roleNames = array_map(function(Role $role) {
            return $role->name;
        }, $this->roles->all());
        return implode(',', $roleNames);
    }

    static function softDelete($id)
    {
        User::find($id)->delete();
    }

    static function softRestore($id)
    {
        User::withTrashed()->where('id', $id)->restore();
    }
}
