<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <form action="{{ url('add_room') }}" method="POST" enctype="multipart/form-data">
              @csrf  

              <div class="form-group">
                  <label for="roomTitle">Room Title</label>
                  <input type="text" name="title" id="roomTitle" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="roomDescription">Description</label>
                  <textarea name="description" id="roomDescription" class="form-control" required></textarea>
              </div>

              <div class="form-group">
                  <label for="roomPrice">Price</label>
                  <input type="number" name="price" id="roomPrice" class="form-control" required>
              </div>

              <div class="form-group">
                  <label for="roomType">Room Type</label>
                  <select name="type" id="roomType" class="form-control">
                      <option selected value="regular">Regular</option>
                      <option value="premium">Premium</option>
                      <option value="deluxe">Deluxe</option>
                  </select>  
              </div>

              <div class="form-group">
                  <label for="wifi">Free Wifi</label>
                  <select name="wifi" id="wifi" class="form-control">
                      <option selected value="yes">Yes</option>
                      <option value="no">No</option>
                  </select>  
              </div>

              <div class="form-group">
                  <label for="roomImage">Upload Image</label>
                  <input type="file" name="image" id="roomImage" class="form-control-file" required>
              </div>

              <div class="form-group mt-3">
                  <button type="submit" class="btn btn-primary">Add Room</button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>
     
    @include('admin.footer')
  </body>
</html>
