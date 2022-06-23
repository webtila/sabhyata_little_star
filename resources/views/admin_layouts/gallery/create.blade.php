@extends('home')
@section('admin_content')
<div class="container-fluid">
   @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif

<div class=" card-body container-fluid col-lg-8">
    <p>
        {{-- <a href="/faculty" class="btn btn-primary">View All</a> --}}
        <h2>GALLERY</h2>
        <i  class="fas fa-chevron-right">Data Gallery Section</i>
        <a href="{{url('gallery')}}" class="btn btn-danger float-end">BACK</a>
    </p>
<form action="{{url('add-gallery')}}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
    <div class="form-group">
        <label> Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
  
    <div class="form-group">
        <input type="file" name="gallery_pic" class="form-control" >
    </div>
    <button class="btn rounded-pill btn-primary"type="submit">Submit</button>
</form>

</div>
  </div>
  @endsection