@extends('home')
@section('admin_content')
<div class="container-fluid">
   @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif

<div class=" card-body container-fluid col-lg-8">
    <p>
        {{-- <a href="/faculty" class="btn btn-primary">View All</a> --}}
        <h2>GALLERY EDIT</h2>
        <i  class="fas fa-chevron-right">Data Gallery Edit Section</i>
        <a href="{{url('gallery')}}" class="btn btn-danger float-end">BACK</a>
    </p>
<form action="{{url('update-gallery/'.$gal->id)}}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
        @method('PUT')
    <div class="form-group">
        <label> Name</label>
        <input type="text" class="form-control" value="{{$gal->name}}" name="name" required>
    </div>
  
    <div class="form-group">
        <input type="file" name="gallery_pic" class="form-control" >
        {{-- <img src="{{asset('uploads/gallery_image/'.$gal->imagefile)}}" width="100px" height="100px" alt="Image" alt=""> --}}
    </div>
    <button class="btn rounded-pill btn-primary"type="submit">Submit</button>
</form>

</div>
  </div>
  @endsection