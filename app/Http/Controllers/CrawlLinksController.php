<?php

namespace App\Http\Controllers;

use App\CrawlLinks;
use Illuminate\Http\Request;
use Goutte;

ini_set('max_execution_time', 480);

class CrawlLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        for($i=1; $i<=21;$i++){

            $url = "https://imgflip.com/memetemplates?page=".$i;
            $crawler = Goutte::request('GET', $url);
            $crawler->filter('h3.mt-title > a')->each(function($node){

                $title = $node->attr("title");
                $link = "https://imgflip.com".$node->attr("href");
                $image = "https://imgflip.com/s".$node->attr("href").".jpg";

                $link = CrawlLinks::firstOrNew( ['link'=>$link]);
                $link->imgLink = $image;
                $link->title = $title;
                $link->save();
                
            });

        }
      

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\CrawlLinks  $crawlLinks
     * @return \Illuminate\Http\Response
     */
    public function show(CrawlLinks $crawlLinks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CrawlLinks  $crawlLinks
     * @return \Illuminate\Http\Response
     */
    public function edit(CrawlLinks $crawlLinks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CrawlLinks  $crawlLinks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CrawlLinks $crawlLinks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CrawlLinks  $crawlLinks
     * @return \Illuminate\Http\Response
     */
    public function destroy(CrawlLinks $crawlLinks)
    {
        //
    }
}
