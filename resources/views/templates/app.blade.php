
<!DOCTYPE html>
<html lang="en">

<head>
  @include('templates.head')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('templates.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('templates.sidebar')
      <!-- <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/icons/mdi.html">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav> -->
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        @include('templates.footer')
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{url('/assets_dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{url('/assets_dashboard/vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('/assets_dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{url('/assets_dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
  <script src="{{url('/assets_dashboard/js/dataTables.select.min.js')}}"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{url('/assets_dashboard/js/off-canvas.js')}}"></script>
  <script src="{{url('/assets_dashboard/js/hoverable-collapse.js')}}"></script>
  <script src="{{url('/assets_dashboard/js/template.js')}}"></script>
  <script src="{{url('/assets_dashboard/js/settings.js')}}"></script>
  <script src="{{url('/assets_dashboard/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{url('/assets_dashboard/js/dashboard.js')}}"></script>
  <script src="{{url('/assets_dashboard/js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->

  <script>
    $(document).ready( function () {
      $('#dataTable').DataTable();
    });

    function checkDate()
    {
      var tgl = new Date().getDate();
      var bulan = new Date().getMonth()+1;
      var tahun = new Date().getFullYear();

      var jam = new Date().getHours();
      var menit = new Date().getMinutes();

      var tgl_sekarang = bulan >= 10 ? tahun+"-"+bulan+"-"+tgl : tahun+"-0"+bulan+"-"+tgl;

      var date_now = new Date(tgl_sekarang).getTime();
      var date_pick = new Date($('#tanggal').val()).getTime();
      
      if(date_pick < date_now){
        $('#tanggal').addClass('is-invalid');
        $('#btnSubmit').attr('disabled','true');
      } else {
        $('#tanggal').removeClass('is-invalid');
        $('#btnSubmit').removeAttr('disabled');
        if(date_now == date_pick){
          var time_pick = $('#jam').val().split(":");
          if(time_pick[0] < jam){
            $('#jam').addClass('is-invalid');
            $('#btnSubmit').attr('disabled','true');
          } else {
            if(time_pick[0] == jam){
              if(time_pick[1] < menit){
                $('#jam').addClass('is-invalid');
                $('#btnSubmit').attr('disabled','true');
              } else {
                $('#jam').removeClass('is-invalid');
                $('#btnSubmit').removeAttr('disabled');
              }
            } else {
              $('#jam').removeClass('is-invalid');
              $('#btnSubmit').removeAttr('disabled');
            }
          }
        }
      }
    }

    $('#pelamar').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    });
  </script>
</body>

</html>

