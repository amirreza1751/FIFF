<?php

namespace App\Http\Controllers;

use App\Workshop;
use App\WorkshopPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workshops = Workshop::with('pictures')->paginate(10);
//        return $workshops;
        return view('workshops.index', compact('workshops'));
    }


    public function add()
    {
        return view('workshops.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'filename.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $workshop = Workshop::create($request->all());
        if(($request->hasfile('filename'))) //age ax upload karde bud: ...
        {
            foreach($request->file('filename') as $image)
            {
//                $name=$image->getClientOriginalName();
                $name= mt_rand(1000000000, 9999999999).".".$image->getClientOriginalExtension();
                $image->move(public_path().'/pictures/workshops/', $name);
                WorkshopPicture::create([
                    'path' => '/pictures/workshops/'.$name,
                    'workshop_id' => $workshop->id
                ]);
            }
        }

        Session::flash('message', '.ورکشاپ '.$workshop->subject_fa.' با موفقیت ساخته شد');
        Session::flash('alert-class', 'alert-success');

        return back();
    }


    public function show_pictures($id)
    {
        $workshop = Workshop::with('pictures')->findOrFail($id);
        $pictures = $workshop->pictures;
        return view('workshops.pics', compact('pictures'));
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
    public function edit(Workshop $workshop)
    {
//        return $workshop;
        return view('workshops.edit', compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workshop $workshop)
    {
        $workshop->update($request->all());
        Session::flash('message', '.ورکشاپ '.$workshop->subject_fa.' با موفقیت ویرایش شد');
        Session::flash('alert-class', 'alert-success');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workshop $workshop)
    {
        Session::flash('message', '.ورکشاپ '.$workshop->subject_fa.' با موفقیت حذف شد');
        Session::flash('alert-class', 'alert-success');
        $workshop->delete();

        return back();
    }

    public function special(Workshop $workshop)
    {
        if ($workshop->special == 0)
        $workshop->special = 1;
        else $workshop->special = 0;
        $workshop->save();
        return back();
    }
}
