<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/style1.css">
    <link rel="icon" href="/assets/img/logosmp.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/ppdb.css">
    <title>SMP Darma Bakti</title>
  </head>
  <body>
  
    @include('partial.navbar')

    <div class="content">
        @yield('konten')
    </div>
    <center>
        <br>
        <h1 style="font-family:'Times New Roman', Times, serif;color:white;text-shadow:5px 0 10px black" class="fw-bold">~ INSAN BERIMAN ~</h1>
    </center>
    <br>

    @include('partial.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>