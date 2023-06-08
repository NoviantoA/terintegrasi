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
                    <h1 class="h3 mb-2 text-gray-800">Category View</h1>
                    <div class="row">
                        <div class="col-xl-12 col-lg-7 pt-3">
                            <form class="">
                            <div class="input-group mb-4">
                            <input type="text" class="form-control"  placeholder="Category Name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary btn-primary" style="color: white;" type="button">Add Category</button>
                            </div>
                            </form>
                        <div class="col-xl-8 col-lg-7 mx-auto pt-3">
                            <div class="card shadow mb-4" style="padding-bottom: 20%;">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary  mx-auto">Category View</h6>
                                </div>
                                <form class="px-5 py-4" method="post" action="tambahkategori.php">
                                    <div class="form-group " style="padding-top: 5%;">
                                        <label for="exampleDropdownFormEmail1">Category Name</label>
                                        <input type="text" name="kategori" class="form-control" id="exampleDropdownFormEmail1" placeholder="Category Name">
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2" data-toggle="button" aria-pressed="false" autocomplete="off">
                                        Add Category
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <iframe src="factproduction.php" width="100%" height="400px"></iframe>
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