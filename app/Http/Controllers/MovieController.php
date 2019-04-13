<?php

namespace App\Http\Controllers;

use App\Movie;
use App\MoviePicture;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::with('pictures')->with('award_pictures')->paginate(10);
        return view('movies.index', compact('movies'));
    }

    public function add()
    {
        return view('movies.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'pictures.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $movie = Movie::create($request->all());
        if(($request->hasfile('pictures'))) //age ax upload karde bud: ...
        {
            foreach($request->file('pictures') as $image)
            {
                $name= mt_rand(1000000000, 9999999999).".".$image->getClientOriginalExtension();
                $image->move(public_path().'/pictures/movies/pics', $name);
                MoviePicture::create([
                    'path' => '/pictures/movies/pics'.$name,
                    'movie_id' => $movie->id
                ]);
            }
        }

        if(($request->hasfile('award_pictures'))) //age ax upload karde bud: ...
        {
            foreach($request->file('award_pictures') as $image)
            {
                $name= mt_rand(1000000000, 9999999999).".".$image->getClientOriginalExtension();
                $image->move(public_path().'/pictures/movies/awards', $name);
                MoviePicture::create([
                    'path' => '/pictures/movies/awards'.$name,
                    'movie_id' => $movie->id
                ]);
            }
        }



        Session::flash('message', '.فیلم '.$movie->name_fa.' با موفقیت ذخیره شد');
        Session::flash('alert-class', 'alert-success');

        return back();
    }


    public function show_pictures($id)
    {
        $movie = Movie::with('pictures')->with('award_pictures')->findOrFail($id);
        $pictures = $movie->picture;
        $award_pictures = $movie->award_pictures;
        return view('movies.pics', compact('pictures', 'award_pictures'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
//        return $workshop;
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        $movie->update($request->all());
        Session::flash('message', '.فیلم '.$movie->name_fa.' با موفقیت ویرایش شد');
        Session::flash('alert-class', 'alert-success');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        Session::flash('message', '.فیلم '.$movie->name_fa.' با موفقیت حذف شد');
        Session::flash('alert-class', 'alert-success');
        $movie->delete();

        return back();
    }
}
