<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trang chủ</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php" id="hd">HORUSENT DAILY</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-light" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> &ensp; &ensp;
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false" title="Thông báo">
                    <center>
                    <svg width="24px" height="24px" viewBox="0 0 24 24"><path fill="#707070" d="M21,19V20H3V19L5,17V11C5,7.9 7.03,5.17 10,4.29C10,4.19 10,4.1 10,4A2,2 0 0,1 12,2A2,2 0 0,1 14,4C14,4.1 14,4.19 14,4.29C16.97,5.17 19,7.9 19,11V17L21,19M14,21A2,2 0 0,1 12,23A2,2 0 0,1 10,21"></path></svg>
                    </center></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="width: 400px; height:900px; border-radius: 5px; border-width: 2px;">      
                        <center>
                            <h4>Thông báo</h4>
                        </center>
                        <hr style="height: 1px; ">
                        <div id="thongbao" >
                            <li type="button" onclick="location.href='#';">Đây là nội dung thông báo số 1, nội dung thông báo số 1 đến đây là hết.</li>
                            <li type="button" onclick="location.href='#';">Đây là nội dung thông báo số 2, nội dung thông báo số 1 đến đây là hết.</li>
                            <li type="button" onclick="location.href='#';">Đây là nội dung thông báo số 3, nội dung thông báo số 1 đến đây là hết.</li>
                            <li type="button" onclick="location.href='#';">Đây là nội dung thông báo số 4, nội dung thông báo số 1 đến đây là hết.</li>
                            <li type="button" onclick="location.href='#';">Đây là nội dung thông báo số 5, nội dung thông báo số 1 đến đây là hết.</li>
                            <li type="button" onclick="location.href='#';">Đây là nội dung thông báo số 6, nội dung thông báo số 1 đến đây là hết.</li>
                            <li type="button" onclick="location.href='#';">Đây là nội dung thông báo số 7, nội dung thông báo số 1 đến đây là hết.</li>
                        </div>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="caidat.php">Cài đặt</a></li>
                        <li><a class="dropdown-item" href="lichsu.php">Lịch sử</a></li>
                        <li><hr/></li>
                        <center>
                            <b><li class="dropdown-item" type="button" onclick="location.href='login.php';" style=" margin: auto; "><b>Đăng xuất</b></li>
                        </center>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!--<div class="sb-sidenav-menu-heading">Core</div>-->
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Trang chủ
                            </a>
                            <a class="nav-link" href="nhansu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Nhân sự
                            </a>
                            <a class="nav-link" href="chamcong.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Chấm công
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Giao việc
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="vieccuatoi.php">Việc của tôi</a>
                                    <a class="nav-link" href="duan.php">Dự án</a>
                                </nav>
                            </div>
                            </a>
                            <a class="nav-link" href="yeucaucanduyet.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Yêu cầu
                            </a>
                            <a class="nav-link" href="baocao.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Báo cáo
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" id="trangchu">Trang chủ</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Trang chủ</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <b id="tc" >NHÂN SỰ</b>
                                        <nav><i id="notetc">
                                        Số lượng nhân viên: 26
                                        </i></nav>
                                    </div> 
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="nhansu.php">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">
                                        <b id="tc">DỰ ÁN</b>
                                        <nav><i id="notetc">
                                        Tổng số dự án: 7
                                        </i></nav>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="duan.php">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <b id="tc">YÊU CẦU</b>
                                        <nav><i id="notetc">
                                        Số lượng yêu cầu cần duyệt: 12
                                        </i></nav>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="yeucaucanduyet.php">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">
                                    <b id="tc">BÁO CÁO</b>
                                        <nav><i id="notetc">
                                        Các thông số về dự án và nhân sự
                                        </i></nav>
                                </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="baocao.php">Xem chi tiết</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
