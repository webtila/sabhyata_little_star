<?php

namespace App\Http\Controllers;
use App\Models\Faculty;
use App\Models\Birthday;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        // return view('index');
        // return view('index')->with('faculties',Faculty::orderBy('updated_at','DESC')->get());
        $faculties=Faculty::all();
        $birthday=Birthday::all();
        $gallery=Gallery::all();
        return view('index')
        ->with('faculties',$faculties)
        ->with('birthday',$birthday)
        ->with('gallery',$gallery);
        // $data['faculties']= Faculty::all();
        // $data['birthday']=Birthday::all();
        // $data['gallery']=Gallery::all();
        //  // return view('index',compact(['faculties','birthday','gallery']));
        //  return view('index',['data'=>$data]);
    }
}
