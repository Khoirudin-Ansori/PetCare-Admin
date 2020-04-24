<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- <meta charset="utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    
    <link rel="icon" href="{{asset('asset/img/bgloe.png')}}">
    <title>Pet Care</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style.css') }}">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/style2.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
  <div class="wrapper">
    <!-- sidebar -->
    <div class="sidebar">
      <nav id="sidebar">
            <div class="sidebar-header">
                <a href="/home"><img src="{{asset('asset/img/logo.png')}}" width="100%"> </a> 
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Data</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a class="nav-link active" href="/home">Data Penitipan</a>
                        </li>
                        <li>
                            <a class="nav-link active" href="/perawatan">Data Perawatan</a>
                        </li>

                        
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">User & Admin</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                      <li>
                        <a class="nav-link active" href="{{route('customer.index')}}">Data Customer</a>
                      </li>
                      <li>
                        <a class="nav-link active" href="{{route ('admin.index')}}">Data Admin</a>
                      </li>
                      <!-- <li>
                        <a href="" data-toggle="modal" data-target="#modal">Download Data Mobil as PDF</a>
                      </li> -->
                    </ul>
                </li>
               <!--  <li>
                  <a class="nav-link active" href="" data-toggle="modal" data-target="#modal">Reporting</a>
                </li>
                <li>
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modal">Total Stock</a>
                </li>
                <li>
                    <a class="nav-link" href="/mobil/trash">Trash</a>
                </li> -->
               <!--  <li>
                    <a href="#">Contact</a>
                </li> -->
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://www.instagram.com/iye_ans" class="download">About Owner</a>
                </li>
                <li>
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      {{ __('Logout') }} <img src="{{asset('asset/img/logout.png')}}" width="20%">
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    <!-- endsidebar -->

    <!-- content -->
    <div id="content">
      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/mobil/trash">Trash</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->
      <div class="roq">
        <div class="col-md6">
          <h2>Pet Care,</h2>
          <h3>For Your Life Pet</h3>
        </div>
      </div>
             @yield('content')
    </div>  
        
    <script src="https://code.jquery.com/jquery-3.3.1.slim.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>


    <script type="text/javascript">
 
  $(document).ready(function () {

    var table = $('#datatable').DataTable();

    table.on('click', '.detail', function () {

      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }

      var data = table.row($tr).data();
      console.log(data);

      $('#nama_mobil').val(data[0]);
      $('#merk_mobil').val(data[1]);
      $('#warna_mobil').val(data[2]);
      $('#kode_suplier').val(data[3]);
      $('#harga_mobil').val(data[4]);
      $('#tahun_mobil').val(data[5]);

      $('#EditModal').modal('show');

    })

  })




</script>

<!-- modal penjualan -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cooming Soon</h5>
        
      </div> -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        Cooming Soon
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div> -->
    </div>
  </div>
</div>
</div>

</body>

</html>
