<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * Array to hold roles
     *
     * @var array
     */
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
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Establish relationship
     *
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Assign roles to the user
     *
     * @param Role $role
     */
    public function assignRole(Role $role)
    {
        $this->roles()->save($role);
    }

    /**
     * Save all the roles that is applicable to a user
     *
     * @param array $ids
     */
    public function assignRolesByID(array $ids)
    {
        $this->roles()->detach();
        $roles = Role::whereIn('id', $ids);
        $this->roles()->saveMany($roles->get());
    }

    /**
     * Get the roles the user has
     *
     * @param $role
     * @return mixed
     */
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('name', $role);
        }
        return $role->intersect($this->roles);
    }

    /**
     * Return a comma seperated string of the roles applicable to the user
     *
     * @return string
     */
    public function roleNames(): string
    {
        $roleNames = array_map(function (Role $role) {
            return $role->name;
        }, $this->roles->all());
        return implode(',', $roleNames);
    }

    /**
     * Soft Delete the selected user
     *
     * @param $id
     */
    static function softDelete($id)
    {
        User::find($id)->delete();
    }

    /**
     * Restore the selected user
     *
     * @param $id
     */
    static function softRestore($id)
    {
        User::withTrashed()->where('id', $id)->restore();
    }
}
