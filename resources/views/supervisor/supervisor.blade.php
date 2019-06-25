<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Supervisor</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/sidebar.css">

    <!-- Font Awesome JS -->

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
                    <a href="/supervisor/home" data-toggle="collapse" aria-expanded="false">Home</a>
                    
                </li>
                 <li>
                    <a href="/supervisor/listmedrep">Tugas dan Target MedRep</a>
                </li>
                <li>
                    <a href="/produk">Produk</a>
                </li>
                <li>
                    <a href="/laporan">Laporan</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">{{Session::get('name')}}</a>
                                </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" href="/supervisor/logout">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')

            
        </div>
    </div>
</body>

</html>