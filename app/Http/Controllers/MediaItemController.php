<?php

namespace App\Http\Controllers;

use App\MediaItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MediaItemController extends Controller
{
    public function index()
    {
        $media_items = MediaItem::paginate(10);
//        return $media_items;
        return view('media-items.index', compact('media_items'));
    }

    public function destroy(MediaItem $mediaItem)
    {
        Session::flash('message', '.آیتم '.$mediaItem->title_fa.' با موفقیت حذف شد');
        Session::flash('alert-class', 'alert-success');
        $mediaItem->delete();
        return back();
    }

    public function edit(MediaItem $mediaItem)
    {
//        return $workshop;
        return view('media-items.edit', compact('mediaItem'));
    }

    public function update(Request $request, MediaItem $mediaItem)
    {
        $mediaItem->update($request->all());
        $mediaItem->type = $request['type'];
        $mediaItem->save();
        Session::flash('message', '.آیتم '.$mediaItem->title_fa.' با موفقیت ویرایش شد');
        Session::flash('alert-class', 'alert-success');

        return back();
    }

    public function add()
    {
        return view('media-items.add');
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'filename.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $mediaItem = MediaItem::create($request->all());
        $mediaItem->type = $request['type'];

        /** thumbnail image*/
        $name= mt_rand(1000000000, 9999999999).".".$request->file('filename')[0]->getClientOriginalExtension();
        $request->file('filename')[0]->move(public_path().'/pictures/media-items/', $name);
        $mediaItem->pic1 = '/pictures/media-items/'.$name;

        /** slider image */
        $name= mt_rand(1000000000, 9999999999).".".$request->file('filename')[1]->getClientOriginalExtension();
        $request->file('filename')[1]->move(public_path().'/pictures/media-items/', $name);
        $mediaItem->pic2 = '/pictures/media-items/'.$name;

        $mediaItem->save();

        Session::flash('message', '.آیتم '.$mediaItem->title_fa.' با موفقیت ساخته شد');
        Session::flash('alert-class', 'alert-success');

        return back();

    }

    public function show_pictures($id)
    {
        $mediaItem = MediaItem::findOrFail($id);
        return view('media-items.pics', compact('mediaItem'));
    }

    public function special(MediaItem $mediaItem)
    {
        if ($mediaItem->special == 0)
            $mediaItem->special = 1;
        else $mediaItem->special = 0;
        $mediaItem->save();
        return back();
    }
}