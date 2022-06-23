@extends('home')
@section('admin_content')
<div class="container-fluid">
   @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif

<div class=" card-body container-fluid col-lg-8">
    <p>
        {{-- <a href="/faculty" class="btn btn-primary">View All</a> --}}
        <h2>FACULTY</h2>
        <i  class="fas fa-chevron-right">Edit Faculty Details</i>
        <a href="{{url('faculty')}}" class="btn btn-danger float-end">BACK</a>
    </p>
<form action="{{url('update-faculty/'.$staff->id)}}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
        @method('PUT')
    <div class="form-group">
        <label>Staff Name</label>
        <input type="text" class="form-control" name="name" value="{{$staff->name}}"required>
    </div>
    <div class="form-group">
        <label>Designation</label>
        <input type="text" class="form-control" name="rank" value="{{$staff->rank}}"required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" name="desc" value="{{$staff->desc}}"required>
    </div>
    <div class="form-group">
        <input type="file" name="faculty_pic" class="form-control" >
        <img src="{{asset('uploads/faculty_image/'.$staff->filepath)}}" width="70px" height="70px" alt="Image" alt="">
    </div> 
    <button class="btn rounded-pill btn-primary"type="submit">UPDATE</button>
</form>

</div>
  </div>
  @endsection