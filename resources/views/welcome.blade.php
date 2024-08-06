<!DOCTYPE html>
<html lang="en">
<head>
  <title>CINEMA XXI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
  @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-violet-100 to-rose-100">


{{-- Header Start --}}
@include('header')
{{-- Header End --}}

{{-- Content Start --}}
@include('content')
{{-- Content End --}}

{{-- Footer Start --}}
@include('footer')
{{-- Footer End --}}

    

</body>
</html>
