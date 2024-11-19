<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    <link rel="icon" type="image/x-icon" href="/assets/brand/logo.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/mycss1.css">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

    <!-- px-10 md:block md:px-40 lg:px-60 -->

    <div class=" ">
        
        <div class="w-100">

            <div class="hidden md:block">
            @include('inc.top')
            </div>
            <div class="hidden md:block sticky sticky-top top-0">
                @include('inc.top-menu')
            </div>
            <div class="md:hidden sticky sticky-top top-0 bg-white">
                @include('inc.top-mobile')
            </div>
                
            @yield('content')


        </div>

    </div>





    <div class=" md:hidden lg:px-80 pt-4  md:px-40 bg-gray-100">
        

    </div>










    <script src="/js/modal.js"></script>


</body>
</html>