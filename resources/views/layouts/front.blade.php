<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />

    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet">

    {{-- Owl awesome --}}
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

    {{-- Google awesome --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <style>
        a{
            text-decoration: none !important;
            color: #000 !important;
        }
    </style>
</head>
<body>
@include('layouts.inc.frontnavbar')
<div class="wrapper">
    <div class="content">
        @yield('content')
    </div>
</div>

<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{ asset('frontend/js/checkout.js') }}"></script>

<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
      var availableTags = [];
      $.ajax({
          method: "GET",
          url: "/product-list",
          success: function(response){
            startAutoComplete(response);
          }
      });

      function startAutoComplete(availableTags){
        $( "#search_product" ).autocomplete({
        source: availableTags
      });
      }
    </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@if(session('status'))
    <script>
        swal("{{session('status')}}");
    </script>
@endif

@yield('scripts')

</body>
</html>
