<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'label'
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

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    public function assignPermission(Permission $permission)
    {
        $this->permissions()->save($permission);
    }

    public function assignPermissionsByID(array $ids)
    {
        $this->permissions()->detach();
        $permissions = Permission::whereIn('id', $ids);
        $this->permissions()->saveMany($permissions->get());
    }
}
