@extends('home')
@section('admin_content')
<div class="container-fluid">
   @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
    @endif

<div class=" card-body container-fluid col-lg-8">
    <p>
        {{-- <a href="/faculty" class="btn btn-primary">View All</a> --}}
        <h2>BIRTHDAY</h2>
        <i  class="fas fa-chevron-right">Data Updating Section</i>
        <a href="{{url('birthday')}}" class="btn btn-danger float-end">BACK</a>
    </p>
<form action="{{url('update-birthday/'.$bday->$id)}}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
        @method('PUT')
    <div class="form-group">
        <label>Student Name</label>
        <input type="text" class="form-control" value="{{$bday->name}}"name="name" required>
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="text" class="form-control" value="{{$bday->age}}"name="age" required>
    </div>
    <div class="form-group">
        <input type="file" name="photo" class="form-control" >
        <img src="{{asset('uploads/birthday_image/'.$bday->photo)}}" width="100px" height="100px" alt="Image" alt="">
    </div>
    <button class="btn rounded-pill btn-primary"type="submit">UPDATE</button>
</form>

</div>
  </div>
  @endsection