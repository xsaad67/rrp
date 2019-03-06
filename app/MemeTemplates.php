<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Traits\Sluggable;

class MemeTemplates extends Model
{
	use Sluggable;

	protected $appends = ['templateImage'];
	
	public function sluggable() {
		return ['source' => 'title'];
	}

	public function scopePopular($query){
		return $query->inRandomOrder();
	}

	public function scopeUnPublished($query){
		return $query->where('published',0);
	}

	
	public function scopePublished($query){
		return $query->where('published',1);
	}

	public function getCreateLinkAttribute(){
		return url("/meme/create/".$this->slug);
	}

	public function getLinkAttribute(){
		return url("/template/".$this->slug);
	}

	public function getTemplateImageAttribute(){
		return asset("memetemplates/".$this->fileName);
	}

	public function memes(){
		return $this->hasMany(Post::class,"template_id");
	}
	
	public static function sortTemplatesWithMemes($limit=5){
		return static::has("memes")->withCount('memes')->orderBy('memes_count','desc')->take($limit)->get();
	}
	
}
