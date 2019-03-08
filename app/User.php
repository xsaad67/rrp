<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Traits\Sluggable;
use Overtrue\LaravelFollow\Traits\CanVote;
use Overtrue\LaravelFollow\Traits\CanFavorite;

class User extends Authenticatable
{
    use Notifiable,Sluggable,CanFavorite,CanVote;

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

    public function sluggable() {
        return ['source' => 'name'];
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function getNameAttribute(){
        return $this->attributes['name'] = ucwords($this->attributes['name']);
    }
    
    public function getLinkAttribute(){
        return url("/users/".$this->slug);
    }

    public function isAdmin()
    {
        return $this->isAdmin ==1 ? true : false;
    }


    public function isNotAdmin(){
        return $this->isAdmin == 0 ? true : false;
    }


    public function getDpAttribute(){
        return is_null($this->avatar) ? \Avatar::create($this->name)->setBorder(0,'adf'): asset('images/avatars/'.$this->avatar);
    }
    public function publishedPost(){
        return $this->hasMany(Post::class)->published();
    }
}
