<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
    <title>Update Room</title>
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <form action="{{ url('edit_room', $data->id) }}" method="POST" enctype="multipart/form-data">
              @csrf  

              <div class="form-group">
                  <label for="roomTitle">Room Title</label>
                  <input type="text" name="title" id="roomTitle" class="form-control" 
                         value="{{ $data->room_title }}" required>
              </div>

              <div class="form-group">
                  <label for="roomDescription">Description</label>
                  <textarea name="description" id="roomDescription" class="form-control" required>{{ $data->description }}</textarea>
              </div>

              <div class="form-group">
                  <label for="roomPrice">Price</label>
                  <input type="number" name="price" id="roomPrice" class="form-control" 
                         value="{{ $data->price }}" required>
              </div>

              <div class="form-group">
                  <label for="roomType">Room Type</label>
                  <select name="type" id="roomType" class="form-control">
                      <option value="regular" {{ $data->room_type == 'regular' ? 'selected' : '' }}>Regular</option>
                      <option value="premium" {{ $data->room_type == 'premium' ? 'selected' : '' }}>Premium</option>
                      <option value="deluxe" {{ $data->room_type == 'deluxe' ? 'selected' : '' }}>Deluxe</option>
                      <option value="luxury" {{ $data->room_type == 'luxury' ? 'selected' : '' }}>Luxury</option>
                  </select>  
              </div>

              <div class="form-group">
                  <label for="wifi">Free Wifi</label>
                  <select name="wifi" id="wifi" class="form-control">
                      <option value="yes" {{ $data->wifi == 'yes' ? 'selected' : '' }}>Yes</option>
                      <option value="no" {{ $data->wifi == 'no' ? 'selected' : '' }}>No</option>
                  </select>  
              </div>

              <div class="form-group">
                  <label for="roomImage">Change Image</label>
                  <input type="file" name="image" id="roomImage" class="form-control-file">
                  <br>
                  <label>Current Image:</label><br>
                  <img src="{{ asset('room/'.$data->image) }}" style="width:100px;height:80px;object-fit:cover;">
              </div>

              <div class="form-group mt-3">
                  <button type="submit" class="btn btn-primary">Update Room</button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
     
    @include('admin.footer')
  </body>
</html>
