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
                            <table id="libTables" class="display">
                                <thead>
                                    <tr>
                                        <th>Kategori ID</th>
                                        <th>Kategori Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('#libTables').DataTable({
                                    "processing": true,
                                    "serverSide": true,
                                    "ajax": {
                                        "url": "./mysql/tampilkategori.php", // Ganti dengan URL ke file server-side Anda
                                        "type": "POST"
                                    },
                                    "deferRender": true,
                                    "columns": [{
                                            "data": "CatId"
                                        },
                                        {
                                            "data": "CatName"
                                        },
                                    ]
                                });
                            });
                        </script>

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