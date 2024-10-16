<!DOCTYPE html>
<html lang="en">

<?php include "parts/head.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "parts/sidebar.php" ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <?php include "parts/topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Poznámičky</h1>

                    <h2 class="h4 mb-4 text-gray-800"> Podmienky</h2>
                    <!-- Poznámky -->
                    <p>poznámky o podmienkach</p>

                    <?php
                    $meno = "Juraj";
                        if($meno == "Juraj"){
                            echo "<strong>Juraj je super programátor </strong>";
                        } else {
                            echo "<strong>Juraj nie je super programátor x  </strong>";
                        }
                        
                    ?>
                    <p>&& - AND, || - OR</p>
                    
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "parts/footer.php" ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include "parts/scroll_to_top.php" ?>

    <!-- Logout Modal-->
    <?php include "auth/logout_modal.php" ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>