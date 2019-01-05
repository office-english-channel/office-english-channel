<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    @include("frontend.partials.head")
    @include("frontend.partials.head-css")
    @yield('pagelevelcss')    
</head>

<body>

    @include("frontend.partials.preloader")
    
    <div class="wrapper push-wrapper">
        @include("frontend.partials.header")
        
            @yield('content')
        
        @include("frontend.partials.footer")
    </div>
    
    @include("frontend.partials.footer-js")
    
    @include("frontend.partials.venderslider-model")
    @include("frontend.partials.venderslidersingle-model")
    @include("frontend.partials.vender-model")
    @include("frontend.partials.category-model")

    @yield('pageleveljs')

</body>

</html>