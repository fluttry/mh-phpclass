<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>madhu dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="/admin/dashboard.css">
    
</head>
<body>
    <!--Top navbar starts here-->
    <?php
    include "topnav.php";
    ?>
      <!--Top navbar ends here-->

      <!--Dashboard Body starts-->
    <div class="container-fluid">
      <div class="row">
          <!-- Sidebar menu-->
               <?php
               include "sidenav.php";
               ?>
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <!-- Main Content -->
                             

          </main>
      </div>
  </div>
      <!--Dashboard Body Ends-->
    <script type="javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>