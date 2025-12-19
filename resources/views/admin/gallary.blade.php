<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <div class="page-content w-100">
        <div class="container-fluid mt-4">
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <center>
          <h1 style="font-size: 40px; font-weight:bold;color:white;">
            Gallary
          </h1>

          <div class="row">
          @foreach($gallary as $gallary)

          <div class="col-md-3">

          


          <img src="/gallary/{{ $gallary->image }}" style="width:300px!important; height:200px!important; padding:10px;" >
          <a href="{{ url('/delete_gallary', $gallary->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this image?')">Delete Image</a>

          </div>

          @endforeach

          </div>


          <form action="{{ url('upload_gallary') }}" method="POST" enctype="multipart/form-data">

          @csrf

          <div style="padding:30px;">
            <label style="color:white;font-weight:bold;">Upload Image</label>

            <input type="file" name="image" required>
            <input class="btn btn-primary"type="submit" value="Add image" >
          </div>

          </form>

          </center>


          </div>
        </div>
      </div>
      
        @include('admin.footer')
  </body>
</html>