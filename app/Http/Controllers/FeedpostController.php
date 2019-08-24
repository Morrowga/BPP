<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feed;

class FeedpostController extends Controller
{
    public function getIndex() {
        $feed = Feed::paginate(3);

        return view('frontend-pages.feed')->withFeeds($feed);
    }

    public function getSingle($slug) {
        $feed = Feed::where('slug','=', $slug)->first();

        return view('feeds.single')->withFeed($feed);
    }   
}
