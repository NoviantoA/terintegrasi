<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>
<?php include "koneksi.php";



?>

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
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary  mx-auto">Edit Item</h6>
                                </div>
                                <form class="px-5 py-4" method="post" action="./mysql/edititem.php">
                                    <?php
                                    $id = (int)$_GET['id'];
                                    $data = mysqli_query($mysqli, "select * from itemtabel join categorytabel on itemtabel.itCat=categorytabel.CatId where itId = '$id'");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <div class="form-group ">
                                            <label for="name">Nama Item</label>
                                            <input type="hidden" name="idIt" value="<?php echo (int)$d['itId']; ?>">
                                            <input type="text" name="name" value="<?php echo $d['name']; ?>" class="form-control" id="name" placeholder="Nama Item">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input id="itPrice" value="<?php echo $d['itPrice']; ?>" name="itPrice" type="number" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Quantity</label>
                                                    <input id="itQty" value="<?php echo $d['itQty']; ?>" name="itQty" type="number" class="form-control" placeholder="0">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex">
                                            <button type="submit" class="btn btn-primary mt-2 px-5 ml-auto " data-toggle="button" aria-pressed="false" autocomplete="off">
                                                Add
                                            </button>
                                        <?php } ?>
                                        </div>

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