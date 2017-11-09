<!DOCTYPE html>
<html lang="en">

<head>

    @include('layout.partial.head')

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            @include('layout.partial.navbar')

            @include('layout.partial.sidebar')
            
        </nav>

        <div id="page-wrapper">

            @yield('content')
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('layout.partial.js')

</body>

</html>
