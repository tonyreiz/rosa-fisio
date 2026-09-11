<!DOCTYPE html>
<html lang="pt-br">
<head>
    @include('partials.site.head')
</head>
<body>
    @include('partials.site.header')
    <main>

        
    @yield('content')
    </main>
    
    @include('partials.site.footer')
    
    @include('partials.site.script')
</body>

</html>