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

    public function guestUpVoters(){
      return $this->morphMany(Followable::class, 'followable')->where('relation','upvote')->where('isGuest',1);
    }

    public function guestDownVoters(){
      return $this->morphMany(Followable::class, 'followable')->where('relation','downvote')->where('isGuest',1);
    }


    //Functions for guest voting

    public function cancelVote($ip){
    	return \App\Followable::where('ip',$ip)->where('followable_type',get_class($this))->delete();
    }

    public function guestHasVoted($ip,$vote="upvote"){
    	return \App\Followable::where('ip',$ip)->where('followable_type',get_class($this))->first();
    }

    public function guestHasUpvoted($ip){

      return \App\Followable::where("ip",$ip)
                            ->where("followable_id",$this->id)
                            ->where('followable_type',get_class($this))
                            ->where("relation","upvote")->first();
    }
  	
  	public function guestHasDownVoted($ip){

      return \App\Followable::where("ip",$ip)
                            ->where("followable_id",$this->id)
                            ->where('followable_type',get_class($this))
                            ->where("relation","upvote")->first();
  	}

  	public function guestDownVote($ip){

      $vote = new \App\Followable(); 
      $vote->ip= $ip;
      $vote->relation="downvote";
      $vote->isGuest =1;
      $vote->followable_id = $this->id;
      $vote->followable_type = get_class($this);
      return $vote->save();

  	}

  	public function guestUpvote($ip){

    	$vote = new \App\Followable(); 
      $vote->ip= $ip;
      $vote->relation="upvote";
      $vote->isGuest =1;
      $vote->followable_id = $this->id;
      $vote->followable_type = get_class($this);
      return $vote->save();

    }

}
