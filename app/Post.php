<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'user_id',
    ];
    public function user() {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
