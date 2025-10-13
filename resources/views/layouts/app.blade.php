<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Halaman Utama' ?></title>

    <!-- Bootstrap CSS -->
    <link 
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
      rel="stylesheet"
      integrity="sha384-QWTKZyjPEjISv5WaRU90FeRpok6YctnYmDr5pNLyT2BrjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
  </head>

  <body>
    <!-- Konten Dinamis -->
    @yield('content')

    <!-- Bootstrap JS Bundle -->
    <script 
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-YvpcrYf0tY31HB6ONNkmxC5s9fDVZLESAAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous">
    </script>
  </body>
</html>
