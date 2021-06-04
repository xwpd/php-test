<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id1',
        'id2',
        'userID',
    ];

    static public function findOrCreate($id1, $id2)
    {
        $user = self::where('id1', $id1)->where('id2', $id2)->first();
        if (!$user) {
            $user = new User();
            $user->userID = Str::uuid();
            $user->id1 = $id1;
            $user->id2 = $id2;
            $user->save();
        }
        return $user;
    }
}
