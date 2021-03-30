<?php include "../koneksi.php"; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Project</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand" href="../index.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="https://i.ibb.co/Mc9tpJq/tb1.png" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="https://d.top4top.io/p_1915p6u5s1.jpg" width="140" alt="homepage" />
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto d-flex align-items-center">
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <?php
                        $sql = "SELECT * FROM `tb_user` WHERE id";
                        $query = mysqli_query($connect, $sql);
                        while($row = mysqli_fetch_array($query)){
                        ?>
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="<?php echo $row["gambar"];?>" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium"><?php echo $row["namalngkp"];?></span></a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./index.php"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./profile.php"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="./project.php"
                                aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Project</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="../login/logout.php"
                                class="btn d-grid btn-danger text-white">
                                Logout</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Project List</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <section id="modal">
            <div class="modal fade" id="tambahpro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form action="./function_project.php?act=tambahpro" method="post">
                <div class="container">
                <div class="row row-cols-2">
                    <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Judul:</label>
                        <input type="text" name="judul" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Judul">
                    </div>
                    </div>
                    <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Gambar:</label>
                        <input type="text" name="gambar" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Link">
                    </div>
                    </div>
                    </div>
                    <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi:</label>
                        <textarea class="form-control" name="desk" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Deskripsi"></textarea>
                    </div>
                    </div>
                    <div class="col">
                    <div class="mb-3">
                        <input type="hidden" class="form-control" value="<?php echo $row["id"];?>" name="id">
                    </div>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                </div>
            </div>
        </form>
            </div>
            </div>
            </section>
            <?php
                if (isset($_GET['id'])) {
                    $id = htmlspecialchars($_GET["id"]);

                    $sql = "DELETE FROM project WHERE id='$id'";
                    $query = mysqli_query($connect, $sql);
                    if ($query) {
                        echo "<script type='text/javascript'>alert('Berhasil Dihapus!');</script>";
                    }
                    else{
                        echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
                    }
                }
                ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <a href="https://www.wrappixel.com/templates/ampleadmin/"
                                class="btn btn-primary text-white" data-bs-toggle="modal" data-bs-target="#tambahpro">
                            Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table text-nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">No</th>
                                            <th class="border-top-0">Judul</th>
                                            <th class="border-top-0" style="width: 40%;">Gambar</th>
                                            <th class="border-top-0">Deskripsi</th>
                                            <th class="border-top-0">Actions</th>
                                        </tr>
                                    </thead>
                                    <?php
                                            $sql = "SELECT * FROM project";
                                            $no = 1;
                                            $query = mysqli_query($connect, $sql);
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $row["judul"];?></td>
                                            <td><img src="<?php echo $row["gambar"];?>" style="width: 40%;"></td>
                                            <td><?php echo $row["deskripsi"];?></td>
                                            <td>
                                                <a href="formedit.php?id=<?php echo $row['id']; ?>">
                                                <span style="color: green; cursor: pointer;"><i class="fas fa-edit"></i></span>
                                                </a>

                                                <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $row['id']; ?>">
                                                <span style="color: red;"><i class="fas fa-trash"></i></span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center"> 2021 © Angkasa Raya | Portofolio
            </footer>
        </div>
    </div>
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>