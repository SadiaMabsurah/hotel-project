<!DOCTYPE html>
<html lang="en">
<head>
  @include('home.css')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="main-layout">

  <div class="loader_bg">
    <div class="loader">
      <img src="{{ asset('images/loading.gif') }}" alt="#"/>
    </div>
  </div>

  <header>
    @include('home.header')
  </header>

  @include('home.gallery')

  @include('home.footer')

  <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  <script>
    function hideLoader(){
      const loader = document.querySelector('.loader_bg');
      if (loader) loader.style.display = 'none';
    }
    document.addEventListener('DOMContentLoaded', hideLoader);
    window.addEventListener('load', hideLoader);
    setTimeout(hideLoader, 1500);
  </script>

</body>
</html>
