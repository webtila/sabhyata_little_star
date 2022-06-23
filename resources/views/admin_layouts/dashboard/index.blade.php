@extends('home')
@section('admin_content')
<div class="container-fluid">
        <h1 class="text-center text-success">DASHBOARD</h1>
    <div class="row">      
      <div class="col-lg-4 col-6">
             <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Faculty</p>
              </div>
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <a href="/faculty" class="small-box-footer">View More<i class="fas fa-arrow-circle-right"></i></a>
              </div>
             </div>
             <div class="col-lg-4 col-6">
              <div class="small-box bg-danger">
               <div class="inner">
                 <h3>2</h3>
 
                 <p>Birthday</p>
               </div>
               <div class="icon">
                 <i class="fas fa-gift"></i>
               </div>
               <a href="/faculty" class="small-box-footer">View More<i class="fas fa-arrow-circle-right"></i></a>
               </div>
              </div>
            </div>
              <div class="col-lg-8 col-6">
                <div class="small-box bg-success">
                 <div class="inner">
                   <h3>15</h3>
   
                   <p>Gallery</p>
                 </div>
                 <div class="icon">
                   <i class="fas fa-th-large"></i>
                 </div>
                 <a href="/faculty" class="small-box-footer">View More<i class="fas fa-arrow-circle-right"></i></a>
                 </div>
                </div>
   
  </div>
  @endsection