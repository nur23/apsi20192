<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Medical Representation</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/sidebar.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>SI Farmasi</h3>
            </div>

            <ul class="list-unstyled components">
                <!-- <p>Dummy Heading</p> -->
                <li class="active">
                    <a href="/medrep" data-toggle="collapse" aria-expanded="false">Home</a>
                    
                </li>
                 <li>
                    <a href="/medrep/produk">Produk</a>
                </li>
                <li class="active">
                    <a href="/medrep/tugas/{{Session::get('id')}}">Tugas</a>
                </li>
                <li>
                    <a href="/medrep/datadokter">Data Dokter</a>
                </li>
                <li class="active">
                    <a href="#Laporan">Laporan </a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="nav navbar-nav">
                    <TABLE>
                        <tr><td>{{Session::get('name')}}</td></tr>
                        
                        <tr><td><a class="nav-link" href="/medrep/logout">Logout</a></td></tr>
                    </TABLE>
                </div>
                 
            
                
            </nav>
            @yield('content')

            
        </div>
    </div>
</body>

</html>