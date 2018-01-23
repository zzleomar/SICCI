<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SICCI - Sistema de Información para el Control del Comercio Informal</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('template/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('template/css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('template/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/personalesT.css') }}" rel="stylesheet">
    @yield('styles')


</head>

<body>


        @include('partials.navbar')
        
                <!-- /.row -->
                <div id="contenedorPersonal">
                    
                        @yield('content')   

                </div>

            <!-- /.container-fluid -->

        

    </div>
    <!-- /#wrapper -->
<footer class="footer py-2">
        <p class="text-center text-muted">&copy;2018 <a href="·">SICCI</a> - Gobernación del Estado Sucre</p>
    </footer>
    <!-- jQuery -->

    <script src="{{ asset('template/js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
        @yield('scripts')

    <!-- Morris Charts JavaScript
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->
    <script src="{{ asset('js/personal.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    
    

</body>

</html>
