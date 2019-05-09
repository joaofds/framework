<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('includes.head')

</head>
<body>
    <div class="container">
        <div id="main" class="row">
            @yield('content')
        </div>

        <footer class="row">
            @include('includes.footer')
            
        </footer>
    </div>
@include('includes.footerjs')
</body>
</html>