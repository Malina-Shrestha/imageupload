<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminsController extends Controller
{
    public function index()
    {
        $admins = Admin::get();

        return view('adminindex', compact('admins'));
    }

    public function create()
    {
        return view('admincreate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);

        if(isset($request->image)){
        $img = Image::make($request->image);
        $ext = $request->image->extension();
        $filename = 'img_'.date('sdHmYl').'_'.rand(1000, 9000).'.'.$ext;

        $img->resize(1000,1000, function ($constraints) {
            $constraints->aspectRatio();
            $constraints->upsize();
        })->save('public/images/'.$filename);

        $admin->image = $filename;
    }
        $admin = new Admin;
        $admin->name = $request->name;

        $admin->save();

        return redirect()->route('admin.index');
    }
}
