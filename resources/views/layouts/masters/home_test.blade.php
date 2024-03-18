<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
    <meta name="apple-mobile-web-app-title" content="CodePen">
    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <title>CodePen - Project Management Dashboard UI</title>
    <link rel="canonical" href="https://codepen.io/aybukeceylan/pen/OJRNbZp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{!! url('vendor/toast/css/bootstrap-toaster.min.css') !!}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="{!! url('assets/css/home/main.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/home/custom.css') !!}" rel="stylesheet">
  </head>
  <body translate="no">
    <div class="app-container">
      @include('layouts.partials.navbar')
      <div class="app-content"> 
        @include('layouts.partials.sidebar') 
        @yield('content')
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{!! url('vendor/toast/js/bootstrap-toaster.min.js') !!}"></script>
    <script id="rendered-js">
      document.addEventListener('DOMContentLoaded', function() {
        var modeSwitch = document.querySelector('.mode-switch');
        modeSwitch.addEventListener('click', function() {
          document.documentElement.classList.toggle('dark');
          modeSwitch.classList.toggle('active');
        });
        var listView = document.querySelector('.list-view');
        var gridView = document.querySelector('.grid-view');
        var projectsList = document.querySelector('.project-boxes');
        listView.addEventListener('click', function() {
          gridView.classList.remove('active');
          listView.classList.add('active');
          projectsList.classList.remove('jsGridView');
          projectsList.classList.add('jsListView');
        });
        gridView.addEventListener('click', function() {
          gridView.classList.add('active');
          listView.classList.remove('active');
          projectsList.classList.remove('jsListView');
          projectsList.classList.add('jsGridView');
        });
        document.querySelector('.messages-btn').addEventListener('click', function() {
          document.querySelector('.messages-section').classList.add('show');
        });
        document.querySelector('.messages-close').addEventListener('click', function() {
          document.querySelector('.messages-section').classList.remove('show');
        });
      });
      //# sourceURL=pen.js
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>
    @stack('scripts')
  </body>
</html>