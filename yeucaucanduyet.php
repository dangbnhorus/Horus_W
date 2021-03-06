<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Yêu cầu cần duyệt</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <button class="btn btn-light" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="caidat.php">Cài đặt</a></li>
                <li><a class="dropdown-item" href="lichsu.php">Lịch sử</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><center><a class="btn-outline-danger" href="login.php">Đăng xuất</a></center></li>
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
            <div class="container-fluid px-4" >
                <h1 class="mt-4">Yêu cầu</h1>
                <button type="button" id="taoyeucau" onclick="location.href='taoyeucau.php';">Tạo yêu cầu</button>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Yêu cầu</li>
                </ol>
                <form >
                    <button type="button" id="yeucaucanduyet1" onclick="location.href='yeucaucanduyet.php';">Yêu cầu cần duyệt</button>
                    <button type="button" id="daduyet" onclick="location.href='daduyet.php';">Đã duyệt</button>
                    <button type="button" id="tuchoi" onclick="location.href='tuchoi.php';">Từ chối</button>
                </form>
                </br>
                <table class="table table-bordered" id="yeucaub">
                    <thead>
                    <tr style="text-align: center;">
                        <th width=3% >STT</th>
                        <th width=10%>Người yêu cầu</th>
                        <th width=17%>Thông tin yêu cầu</th>
                        <th width=31%>Lý do</th>
                        <th width=15%>Người duyệt</th>
                        <th width=12%>Ngày gửi yêu cầu</th>
                        <th width=12%>Duyệt/Từ chối</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id="maintr">
                        <td> 1 </td>
                        <td> Bùi Ngọc Đăng </td>
                        <td> 13/01/2022 08:00 - 08:30</td>
                        <td> Thi bằng lái xe</td>
                        <td> Nguyễn Duy Sơn </td>
                        <td> 13/01/2022 07:40:39</td>
                        <td>
                            <form style="text-align: center;">
                                <button type="button" id="duyet1" onclick="location.href='.php';">Duyệt</button>
                                <button type="button" id="duyet2" onclick="location.href='.php';">Từ chối</button>
                            </form>
                        </td>
                    </tr>
                    <tr id="maintr">
                        <td> 2 </td>
                        <td> Chu Văn Mai </td>
                        <td> 13/01/2022 08:00 - 08:30</td>
                        <td> Thi bằng lái xe</td>
                        <td> Nguyễn Duy Sơn </td>
                        <td> 13/01/2022 07:40:39</td>
                        <td>
                            <form style="text-align: center;">
                                <button type="button" id="duyet1" onclick="location.href='.php';">Duyệt</button>
                                <button type="button" id="duyet2" onclick="location.href='.php';">Từ chối</button>
                            </form>
                        </td>
                    </tr>
                    <tr id="maintr">
                        <td> 3 </td>
                        <td> Doãn Thế Cường </td>
                        <td> 13/01/2022 08:00 - 08:30</td>
                        <td> Thi bằng lái xe</td>
                        <td> Nguyễn Duy Sơn </td>
                        <td> 13/01/2022 07:40:39</td>
                        <td>
                            <form style="text-align: center;">
                                <button type="button" id="duyet1" onclick="location.href='.php';">Duyệt</button>
                                <button type="button" id="duyet2" onclick="location.href='.php';">Từ chối</button>
                            </form>
                        </td>
                    </tr>
                    <tr id="maintr">
                        <td> 4 </td>
                        <td> Nguyễn Thị Vinh </td>
                        <td> 13/01/2022 08:00 - 08:30</td>
                        <td> Thi bằng lái xe</td>
                        <td> Nguyễn Duy Sơn </td>
                        <td> 13/01/2022 07:40:39</td>
                        <td>
                            <form style="text-align: center;">
                                <button type="button" id="duyet1" onclick="location.href='.php';">Duyệt</button>
                                <button type="button" id="duyet2" onclick="location.href='.php';">Từ chối</button>
                            </form>
                        </td>
                    </tr>
                    <tr id="maintr">
                        <td> 5 </td>
                        <td> Hồ Đăng Mỹ Nga </td>
                        <td> 13/01/2022 08:00 - 08:30</td>
                        <td> Thi bằng lái xe</td>
                        <td> Nguyễn Duy Sơn </td>
                        <td> 13/01/2022 07:40:39</td>
                        <td>
                            <form style="text-align: center;">
                                <button type="button" id="duyet1" onclick="location.href='.php';">Duyệt</button>
                                <button type="button" id="duyet2" onclick="location.href='.php';">Từ chối</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
</body>
</html>
