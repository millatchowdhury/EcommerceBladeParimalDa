<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @include('Frontend.partials.css')
  </head>
  <body>
    



    @include('Frontend.partials.header')

   
    <div class="left-sidebar-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-2">
                    @include('Frontend.partials.sidebar')
                </div>
                <div class="col-xl-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>













    @include('Frontend.partials.js')
    
  </body>
</html>