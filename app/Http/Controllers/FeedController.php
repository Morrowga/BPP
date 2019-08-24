<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Feed;
use Session;
use Auth;

class FeedController extends Controller
{
    public function __construct() {
        $this->middleware("auth:web,admin");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeds = Feed::orderBy('id', 'desc')->paginate(10);

        return view('newfeeds.newfeedhist')->withFeeds($feeds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newfeeds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:feeds,slug',
            'body'  => 'required'
        ));

        $feed = new Feed;

        $feed->title = $request->title;
        $feed->slug = $request->slug;
        $feed->body = $request->body;

        $feed->save();
        
        Session::flash('success','The Blog post was successfully save!');

        return redirect()->route('newfeeds.show', $feed->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feed = Feed::find($id);
        return view('newfeeds.show')->withFeed($feed);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feed = Feed::find($id);

        return view('newfeeds.edit')->withFeed($feed);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $feed = Feed::find($id);
        if ($request->input('slug') == $feed->slug ){
            $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required'
            ));
        } else {
            $this->validate($request, array(
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:feeds,slug',
                'body' => 'required'
            ));
        }

        $feed = Feed::find($id);

        $feed->title = $request->input('title');
        $feed->slug = $request->input('slug');
        $feed->body = $request->input('body');

        $feed->save();

        Session::flash('success', 'This post was successfully saved.');
        
        return redirect()->route('newfeeds.show', $feed->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feed = Feed::find($id);

        $feed->delete();

        Session::flash('success', 'The Post was successfully deleted.');
        return redirect()->route('newfeeds.index');
    }
}
