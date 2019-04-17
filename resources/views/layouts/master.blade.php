<!DOCTYPE html>
<html lang="en">
   <head>

      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

      <title>@stack('title')  &mdash; Stisla</title>

      <!-- Lits of Css That can be Pushed to Base Page form Child page before loading all the base css  -->

      @stack('beforeBaseCss')

      <!-- General CSS Files -->
      <link rel="stylesheet" href="{{asset('stislaassets/modules/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('stislaassets/modules/fontawesome/css/all.min.css')}}">

      <!-- Template CSS -->
      <link rel="stylesheet" href="{{asset('stislaassets/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('stislaassets/css/components.css')}}">

      <!-- Lits of Css That can be Pushed to Base Page form Child page after loading all the base css  -->

      @stack('afterBaseCss')

      <!-- Start GA -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'UA-94034622-3');
      </script>
      <!-- /END GA -->

   </head>
   <body>
      <div id="app">
         <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>

            @include('layouts.topbar')

            <div class="main-sidebar sidebar-style-2">

               <!-- Start Sidebar Menus -->
               @include('layouts.sidebar')
               <!-- End Sidebar Menus -->

            </div>
            <!--Start  Main Content -->
            <div class="main-content">
               <section class="section">

                  
                     @stack('pageSectionHeader')
                  

                  @yield('content')
                  
               </section>
            </div>

            <!--End  Main Content -->

            @include('layouts.footer')
         </div>
      </div>

      <!-- Lits of JS That can be Pushed to Base Page form Child page before loading all the base js  -->

      @stack('beforeBaseJs')

      <!-- General JS Scripts -->
      <script src="{{asset('stislaassets/modules/jquery.min.js')}}"></script>
      <script src="{{asset('stislaassets/modules/popper.js')}}"></script>
      <script src="{{asset('stislaassets/modules/tooltip.js')}}"></script>
      <script src="{{asset('stislaassets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('stislaassets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
      <script src="{{asset('stislaassets/modules/moment.min.js')}}"></script>
      <script src="{{asset('stislaassets/js/stisla.js')}}"></script>

      <!-- Template JS File -->
      <script src="{{asset('stislaassets/js/scripts.js')}}"></script>
      <script src="{{asset('stislaassets/js/custom.js')}}"></script>

      <!-- Lits of JS That can be Pushed to Base Page form Child page after loading all the base js  -->

      @stack('afterBaseJs')
   </body>
</html>