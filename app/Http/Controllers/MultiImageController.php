<?php

namespace App\Http\Controllers;

use App\MultiImage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MultiImageController extends Controller
{
    public function index()
    {
        $datas = MultiImage::get();

        return view('index', compact('datas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);

        $data = new MultiImage;
        $data->name = $request->name;

        if(isset($request->image)) {

            $img = Image::make($request->image);
            $ext = $request->image->extension();
            $filename = 'img_' . date('sdHmYl') . '_' . rand(1000, 9000) . '.' . $ext;


            $img->resize(1000, 1000, function ($constraints) {
                $constraints->aspectRatio();
                $constraints->upsize();
            })->save('public/images/' . $filename);

            $data->image = $filename;
        }
        $data->save();

        return redirect()->route('multi.index');
    }
}
