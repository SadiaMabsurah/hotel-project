<!DOCTYPE html>
<html>
  <head> 
    <title>Add Room</title>
    @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
      <div class="page-content w-100">
        <div class="container-fluid mt-4">

          <div class="card">
            <div class="card-header bg-primary text-white">
              <h3 class="h5 mb-0">Add Rooms</h3>
            </div>
            <div class="card-body">

              <form action="{{ url('add_room') }}" method="POST" enctype="multipart/form-data">
                  @csrf  

                  <div class="form-group mb-2">
                      <label for="roomTitle">Room Title</label>
                      <input type="text" name="title" id="roomTitle" class="form-control" required>
                  </div>

                  <div class="form-group mb-2">
                      <label for="roomDescription">Description</label>
                      <textarea name="description" id="roomDescription" class="form-control" required></textarea>
                  </div>

                  <div class="form-group mb-2">
                      <label for="roomPrice">Price</label>
                      <input type="number" name="price" id="roomPrice" class="form-control" required>
                  </div>

                  <div class="form-group mb-2">
                      <label for="roomType">Room Type</label>
                      <select name="type" id="roomType" class="form-control">
                        <option selected value="regular">Regular</option>
                        <option value="premium">Premium</option>
                        <option value="deluxe">Deluxe</option>
                        <option value="luxury">Luxury</option>
                      </select>  
                  </div>

                  <div class="form-group mb-2">
                      <label for="wifi">Free Wifi</label>
                      <select name="wifi" id="wifi" class="form-control">
                          <option selected value="yes">Yes</option>
                          <option value="no">No</option>
                      </select>  
                  </div>

                  <div class="form-group mb-3">
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
    </div>
     
    @include('admin.footer')
  </body>
</html>
