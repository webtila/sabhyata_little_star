<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Illuminate\Support\Facades\File;
class FacultyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      
        return view('admin_layouts/faculty.index')->with('faculties',Faculty::orderBy('updated_at','DESC')->get());
        
    }
    public  function create(){
            return view('admin_layouts/faculty.create');
    }
    public function store(Request $request){
        
          
          $staff = new Faculty;
          $staff->name=$request->input('name');
          $staff->rank=$request->input('rank');
          $staff->desc=$request->input('desc');

            if($request->hasFile('faculty_pic'))
            {
                $file=$request->file('faculty_pic');
                $extension=$file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/faculty_image/',$filename);
                $staff->filepath=$filename;
            }
       
           
            $staff->save(); // Finally, save the record.
            return redirect()->back()->with('status','Faculty REcord Added Successfully');
            }
    
           public function edit($id){
                $staff=Faculty::find($id);
                return view('admin_layouts/faculty.edit',compact('staff'));
           }
           public function update(Request $request,$id){
               $staff=Faculty::find($id);
               $staff->name=$request->input('name');
               $staff->rank=$request->input('rank');
               $staff->desc=$request->input('desc');
     
                 if($request->hasFile('faculty_pic'))
                 {
                     $destination='uploads/faculty_image/'.$staff->filepath;
                     if(File::exists($destination)){
                         File::delete($destination);
                     }
                     $file=$request->file('faculty_pic');
                     $extension=$file->getClientOriginalExtension();
                     $filename=time().'.'.$extension;
                     $file->move('uploads/faculty_image/',$filename);
                     $staff->filepath=$filename;
                 }
            
                
                 $staff->update(); // Finally, save the record.
                 return redirect()->back()->with('status','Faculty Record Updated Successfully');
                 }

            public function destroy($id){
                     $staff=Faculty::find($id);
                     $destination='uploads/faculty_image/'.$staff->filepath;
                     if(File::exists($destination)){
                         File::delete($destination);
                     }
                     $staff->delete();
                     return redirect()->back()->with('status','Faculty Record Deleted Successfully');
                 }
           }
 


