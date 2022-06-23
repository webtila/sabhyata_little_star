<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Birthday;

class BirthdayController extends Controller
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
        return view('admin_layouts/birthday.index')->with('birthdays',Birthday::orderBy('updated_at','DESC')->get());
    }
    public function create(){
        return view('admin_layouts/birthday.create');
    }
    public function store(Request $request){
        $bday=new Birthday;
        $bday->name=$request->input('name');
        $bday->age=$request->input('age');
        if ($request->hasFile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/birthday_image/',$filename);
            $bday->photo=$filename;

        }
        $bday->save();
        return redirect()->back()->with('status','Birthday Record Added Successfully');
    }
    public function edit($id){
        $bday=Birthday::find($id);
        return view('admin_layouts/birthday.edit',compact('bday'));
    }
    public function destroy($id){
        $bday=Birthday::find($id);
                     $destination='uploads/birthday_image/'.$bday->photo;
                     if(File::exists($destination)){
                         File::delete($destination);
                     }
                     $bday->delete();
                     return redirect()->back()->with('status','Student Record Deleted Successfully');
    }
}
