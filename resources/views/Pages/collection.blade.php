<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    @include('Pages.styles')

    <style>
        #cont{
            margin-top: 1cm;

           /* position: absolute;*/
        }
    </style>

</head>
<body>
        <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
@include('Pages.navbar')

       <div class="pcoded-main-container">
       <div class="pcoded-wrapper">
@include('Pages.sidebar')

 <!-- Contents -->
  <div id="cont">
    <div class="pcoded-content">
        @yield('content')
    </div>
</div>
  <!-- Contents -->
</div>
</div>
</div>
</div>



@include('Pages.scripts')
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');


             // Basic example
$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "paging":true // false to disable pagination (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
});

// Basic example
/*$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});*/





    </script>
</body>






</html>
