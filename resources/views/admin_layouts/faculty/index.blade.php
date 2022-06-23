@extends('home')
@section('admin_content')
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-10">
      <h2 class="text-center text-primary">Faculty</h2>
    </div>
      <div class="col-lg-2">
        <a href="{{url('add-faculty')}}" class=" mb-2 rounded-pill float-end btn btn-primary">
            Add Record
        </a>
    </div>
    </div>
  
      <div class="col-lg-12 col-12">
        
        @if(session()->has('message'))
            <div>
                <div>
                    <p class="text-success text-center ">
                        {{session()->get('message')}}
                    </p>
                </div>
            </div>
        @endif
    
           
       
            <div class="container-fluid table-responsive-lg row">
               
                 
               <table class="table table-hover table-bordered text-center container">
                  <thead class="bg-primary text-light">
                  <tr>
                       
                        <th>Name</th>
                        <th>Rank</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                        
                    </tr>
                  
                  </thead>
                  
                    @foreach($faculties as $item)
                  <tbody>
                  <tr>
                        {{-- <th scope="row">{{$staff->record_no}}</th> --}}
                        <td>{{$item->name}}</td>
                        <td>{{$item->rank}}</td>
                        <td>{{$item->desc}}</td>
                        <td>
                            <img src="{{asset('uploads/faculty_image/'.$item->filepath)}}" width="70px" height="70px" alt="Image" alt="">
                        </td>
                       
                        <td><a 
                            href="{{url('edit-faculty/'.$item->id)}}" class="btn mb-2 btn-warning">
                            EDIT
                            </a>
                          
                          
                         <form action="{{url('delete-faculty/'.$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">DELETE</button>
                        
                        </form>
                        </td> 
                      <tr>
                  
                  </tbody>
                  @endforeach
                </table>
                      
            </div>
         </div>
          
                   

     
  @endsection