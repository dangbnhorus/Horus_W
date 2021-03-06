<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Nhân sự</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
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
                <li><center><a class="btn-outline-danger" id="dangxuat" href="login.php">Đăng xuất</a>
                    </center>
                </li>
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
                <h1 class="mt-4">Nhân sự</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="nhansu.php">Nhân sự</a></li>
                    <li class="breadcrumb-item active">Thêm nhân viên</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-header">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h2 class="text-center font-weight-light my-4">Nhập thông tin</h2></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="name" placeholder="..."/>
                                                <label for="inputname">Họ và tên:</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputTel" type="tel" placeholder="..."/>
                                                <label for="inputTel">Số điện thoại:</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="Email" placeholder="..."/>
                                                <label for="inputEmail">Email:</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputAddress" type="text" placeholder="..."/>
                                                <label for="inputAddress">Địa chỉ:</label>
                                            </div>
                                            <div class="form-floating mb-3" >
                                                <form>
                                                    <p>Ngày sinh:
                                                        <input type="date" id="ngaysinh" style="width: 171px; height: 40px;" min="01/01/1980" max="31/12/2005" />
                                                        &ensp;
                                                        <select style="width: 171px;height: 40px;">
                                                            <option selected>Bộ phận</option>
                                                            <option value="1">Dev</option>
                                                            <option value="2">Game design</option>
                                                            <option value="3">Art</option>
                                                            <option value="3">Tester</option>
                                                        </select>
                                                        &ensp;
                                                        <select style="width: 171px;height: 40px;">
                                                            <option selected>Chức danh</option>
                                                            <option value="1">Nhân viên</option>
                                                            <option value="2">Leader</option>
                                                            <option value="3">Quản lý</option>
                                                            <option value="3">Giám đốc</option>
                                                        </select>
                                                </form>
                                                </p>
                                            </div>
                                            <br/>
                                            <br/>
                                            <center>
                                                <a class="small" href="nhansu.php">
                                                    <div class="btn btn-primary" id="btn1" style="width: 100px; height: 40px;">Lưu</div>
                                                    <script language="javascript">
                                                        var button = document.getElementById("btn1");
                                                        button.onclick = function(){
                                                            alert("Tạo nhân viên mới thành công");
                                                        }
                                                    </script>
                                                </a>
                                                &nbsp;&nbsp;&emsp;
                                                <a class="small" href="nhansu.php">
                                                    <div class="btn btn-dark" style="width: 100px; height: 40px;">Huỷ bỏ</div>
                                                </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>
