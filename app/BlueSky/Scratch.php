<?php

namespace App\BlueSky;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Scratch extends Model
{
    const FIELD_USER_ID = 'user_id';
    const FIELD_POST = 'post';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'scratch_table';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        self::FIELD_POST,
        self::FIELD_USER_ID
    ];

    /**
     * Get the user that owns the scratch.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
