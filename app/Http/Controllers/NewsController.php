<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NewsRequest;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::listen(function ($q){
            info($q->sql);
        });
        $news = News::with('user')->latest()->paginate(12);

        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function filter($team){
        // DB::listen(function($q) {
        //     info($q->sql);
        // });

        $team = Team::where('name', $team)->firstOrFail();
        $news = $team->news()->with('user')->paginate(4);
        
        return view('news.index', compact('news'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('news.create', compact('teams'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $data = $request->validated();
        $news = Auth::user()->news()->create($data);
        $news->team()->sync($data['teams']);

        session()->flash('success', 'Thank you for publishing article on www.nba.com');
        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
