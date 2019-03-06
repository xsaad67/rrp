<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Sluggable;
use Overtrue\LaravelFollow\Traits\CanBeVoted;
use Overtrue\LaravelFollow\Traits\CanBeFavorited;

class Post extends Model
{
    use Sluggable,CanBeVoted,CanBeFavorited;

    protected $with=['user'];

   	public function sluggable() {
		return ['source' => 'title'];
	}

	protected $fillable = ['source'];

	public function getMediaAttribute(){
		return url("/images/memes/".$this->image);
	}

	public function getLinkAttribute()
	{
		return url("/posts/".$this->slug);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function template(){
		return $this->belongsTo(MemeTemplates::class,'template_id');
	}
	
    public function getTitleAttribute(){
        return $this->attributes['title'] = ucwords($this->attributes['title']);
    }
    
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function scopePublished($query){
    	return $query->where("isPublished",1);
    }

    public function scopeNotPublished($query)
    {
    	return $query->where("isPublished",0);
    }

  	
}
