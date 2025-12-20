<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
   

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1 style="font-size: 30px;font weight: bold;">Send Email to {{$message->name}}</h1>

            <form action="{{url('send_user_email',$message->id)}}" method="POST">
                @csrf
    
                <div style="padding:15px;">
                <label>Greeting</label>
                <input type="text" style="color:black;" name="greeting" class="form-control" >
                </div>
    
                <div style="padding:15px;">
                <label>Body</label>
                <input type="text" style="color:black;" name="body" class="form-control" >
                </div>
    
                <div style="padding:15px;">
                <label>Action Text</label>
                <input type="text" style="color:black;" name="actiontext" class="form-control" >
                </div>
    
                <div style="padding:15px;">
                <label>Action URL</label>
                <input type="text" style="color:black;" name="actionurl" class="form-control" >
                </div>
    
                <div style="padding:15px;">
                <label>End Part</label>
                <input type="text" style="color:black;" name="endpart" class="form-control" >
                </div>
    
                <div style="padding:15px;">
                <input type="submit" class="btn btn-primary"; value="Send Email">
                </div>
    
            </form>
                </div>


          </div>
        </div>
    </div>


        @include('admin.footer')
  </body>
</html>