<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin_layouts/gallery.index')->with('galleries',Gallery::orderBy('updated_at','DESC')->get());
    }
    public function create(){
        return view('admin_layouts/gallery.create');
    }
    public function store(Request $request){
        $gallery=new Gallery;
        $gallery->name=$request->input('name');
        $request->validate([
            'gallery_pic'=>'required|mimes:jpeg,jpg,png,pdf,gif,JPG|max:4000']);
        if($request->hasFile('gallery_pic'))
        {   
            $file=$request->file('gallery_pic');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/gallery_image/',$filename);
            $gallery->imagefile=$filename;
        }
        $gallery->save();
        return redirect()->back()->with('status','Image Added Successfully');
        
    }
    public function edit($id){
        $gal=Gallery::find($id);
        return view('admin_layouts/gallery.edit',compact('gal'));
    }
    public function update(Request $request,$id){
        $gal=Gallery::find($id);

        if($request->hasFile('gallery_pic'))
        {

            $destination='uploads/gallery_image/'.$gal->imagefile;
            if(File::exists($destination)){
                File::delete($destination);
        }  $file=$request->file('gallery_pic');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        $file->move('uploads/gallery_image/',$filename);
        $gal->imagefile=$filename;
        
    } 
    $gal->update(); // Finally, save the record.
    return redirect()->back()->with('status','Gallery Record Updated Successfully');
}
public function destroy($id){
    $gal=Gallery::find($id);
    $destination='uploads/gallery_image/'.$gal->imagefile;
    if(File::exists($destination)){
        File::delete($destination);
    }
    $gal->delete();
    return redirect()->back()->with('status','Gallery Image Record Deleted Successfully');
}
}