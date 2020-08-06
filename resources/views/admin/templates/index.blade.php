<!DOCTYPE html>
<html lang="en">
    @include('admin.templates.partials.head')
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Sidebar -->
    @include('admin.templates.partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->

        @include('admin.templates.partials.content')
        <!--Page breadcrumbs-->
      <!-- End of Main Content -->

      <!-- Footer -->
     @include('admin.templates.partials.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  @include('admin.templates.partials.logout')

  <!-- Bootstrap core JavaScript-->
@include('admin.templates.partials.js')

</body>

</html>
