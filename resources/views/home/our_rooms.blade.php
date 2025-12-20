<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="main-layout">

    <header>
        @include('home.header')
    </header>

    @include('home.room')

    @include('home.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      window.addEventListener('load', function () {
        const loader = document.querySelector('.loader_bg');
        if (loader) loader.style.display = 'none';
      });
    </script>
</body>
</html>
