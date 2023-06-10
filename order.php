<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>
<?php include "koneksi.php" ?>

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
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
                        </div>
                        <div class="card-body">
                            <table id="libTables" class="table table-striped table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Produk</th>
                                        <th>Kategori</th>
                                        <th>Price</th>
                                        <th>Qty</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksi.php";
                                    $result = mysqli_query($mysqli, "Select i.itid kode,  i.name name, c.CatName kategori, itPrice price, i.itQty qty from itemtabel i JOIN categorytabel c on i.itCat= c.CatId ");
                                    while ($data = mysqli_fetch_array($result)) {
                                        echo "
                                        <td>$data[name]</td>
                                        <td>$data[kategori]</td>
                                        <td>$data[price]</td>
                                        <td>$data[qty]</td>
                                        <td> 
                                        <a href='/integrasi/terintegrasi/addbil.php?id=$data[kode]' class='btn btn-success '>Get</a>
                                        </td>                                        
                                        ";
                                    }

                                    ?>


                                </tbody>
                            </table>
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

    <!-- script JS  -->
    <?php include 'script.php'; ?>
</body>

</html>