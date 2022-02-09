<?php
//Lấy dữ liệu từ form gọi lên
$e=$_POST['email'];
$p=$_POST['password'];
//Kết nối đến database
$db=mysqli_connect("localhost","root","","wh");
//Truy vấn dữ liệu- tìm email và password nhận được có trong database không?
$sql= "select * from users where email='$e' and password='$p'";
// Thực thi truy vấn
$rs=mysqli_query($db, $sql);

if(mysqli_num_rows($rs) > 0){
    header("location: index.html");
} else {
    /*Rules:
    - email: phải nhập, định dạng email
    - password: phải nhập, > 8, phải có
    */
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Khai báo mạng $error để chứa lỗi
        $error = [];
        //validate Email
        if (empty(trim($_POST['email']))) {
            $error['email']['required'] = 'Email không được để trống';
        } else {
            if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                $error['email']['invaild'] = 'Email không đúng định dạng';
            }
        }
        //validate password
        if (empty(trim($_POST['password']))) {
            $error['password']['required'] = 'Password không được để trống';
        } else {
            if (strlen(trim($_POST['password'])) < 7) {
                $error['password']['min'] = 'Mật khẩu phải từ 8 kí tự trở lên';
            }
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - HorusENT</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h1 class="text-center font-weight-light my-4">ĐĂNG NHẬP</h1></div>
                            <div class="card-body">
                                <div class="small mb-3 text-muted">Vui lòng nhập email công ty.</div>
                                <form action="login.php" method="POST" ROLE="form">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="" type="text" placeholder="Email" name="email" >
                                        <label for="">Email</label>
                                        <?php
                                        echo (!empty($error['email']['required']))?'<span style="color: red;">'.$error['email']['required'].'</span>':false;
                                        echo (!empty($error['email']['invaild']))?'<span style="color: red;">'.$error['email']['invaild'].'</span>':false;
                                        ?>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="password" id="" placeholder="Mật khẩu" name="password">
                                        <label for="">Mật khẩu</label>
                                        <?php
                                        echo (!empty($error['password']['required']))?'<span style="color: red;">'.$error['password']['required'].'</span>':false;
                                        echo (!empty($error['password']['min']))?'<span style="color: red;">'.$error['password']['min'].'</span>':false;
                                        ?>
                                    </div>
                                    <div>
                                        <center><button type="submit" class="btn btn-primary">Đăng nhập</button></center>
                                    </div>
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
</body>
</html>
