<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'topbar.php' ?>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 mx-auto pt-3">
                            <div class="card shadow mb-4" style="padding-bottom: 20%;">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary  mx-auto">Category View</h6>
                            </div>
                            <form class="px-5 py-4">
                            <div class="form-group " style="padding-top: 5%;">
                                <label for="exampleDropdownFormEmail1">Category Name</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Category Name">
                            </div>
                            <button type="button" class="btn btn-primary mt-2" data-toggle="button" aria-pressed="false" autocomplete="off">
                                Add Category
                            </button>
                            </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'footer.php' ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php include 'addons.php' ?>
    <!-- script JS  -->
    <?php include 'script.php'; ?>
</body>

</html>