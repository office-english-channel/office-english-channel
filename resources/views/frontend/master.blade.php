<!DOCTYPE html>
<html lang="en">
<head>
    @include("frontend.partials.head")
    @include("frontend.partials.head-css")
    @yield('pagelevelcss')    
</head>
 
<body id="page-top">

    @include("frontend.partials.preloader")
    
            @yield('content')
        
    @include("frontend.partials.footer-js")
    
    @yield('pageleveljs')

</body>

</html>