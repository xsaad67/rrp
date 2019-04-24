<?php

namespace App\Http\Controllers;

use App\Crawl;
use Illuminate\Http\Request;
use Goutte;
use App\Post;
use Image;
use App\User;
use App\Recipe;
ini_set('max_execution_time', 480);

class CrawlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $link = "https://imgflip.com/meme/Distracted-Boyfriend";
        $crawler = Goutte::request('GET', $link);
        $crawler->filter('a.meme-link > img')->first()->each(function($node){
            dump($node->attr("src"));
        });

       return $link;
    }

    public function randomUsers(){

        //Get User Info first and put them into session array
        $array  = [];
        $html = "https://randomuser.me/api/?results=40&inc=name,gender,nat,picture,email&nat=us,gb";
        $json = json_decode(file_get_contents($html));

        foreach($json->results as $key=>$row){

            $array[] = [
                        "name" => $row->name->first . " " .$row->name->last,
                        "email" => $row->email,
                        "avatar" => $row->picture->large
                    ];
        }

        // Putting data into session array
        session()->put("users",$array);


        //Save stored session into user table
        foreach(session()->get('users') as $key=>$row){
            $user = new User();
            $user->name = $row['name'];
            $user->email = $row['email'];
            $user->password = bcrypt("secret");
            $fileName = basename($row['avatar']);
            $folderName = "images/avatars/";
            dump($fileName);
            Image::make($row['avatar'])->save(public_path($folderName.$fileName));
            $user->avatar = $fileName;
            $user->save();
         }
            
        
        return session()->get("users");
    
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Used to create searches of flair.
        * change the search to search.json in url 
        * 
        * $searchJsonUrl = "https://www.reddit.com/r/MemeTemplatesOfficial/search.json?q=flair_name%3A%22Template%22&sort=new";
        */
        $url = "https://www.reddit.com/r/memes/top.json?limit=100";
        session()->put("reddit",json_decode(file_get_contents($url)));
       
        $reddit = session()->get('reddit');


        foreach($reddit->data->children as $child){
            $url=$child->data->url;
            $image = basename($url);
            $title = $child->data->title;

            if(!file_exists(public_path('images/memes/'.$image)))
            {
                Image::make($url)->save(public_path('images/memes/'.$image));

                $post =  Post::firstOrNew(['source'=>$url]);
                $post->title = $title;
                $post->user_id = rand(1,25);
                $post->source = $url;
                $post->image = $image;
                $post->website = "reddit";
                $post->save();

                dump($title);
                dump($image);
            }
            
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crawl  $crawl
     * @return \Illuminate\Http\Response
     */
    public function show(Crawl $crawl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crawl  $crawl
     * @return \Illuminate\Http\Response
     */
    public function edit(Crawl $crawl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crawl  $crawl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crawl $crawl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crawl  $crawl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crawl $crawl)
    {
        //
    }
}
