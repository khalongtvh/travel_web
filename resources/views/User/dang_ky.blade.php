<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng Ký</title>

    <link href="{{asset('frontend/khanh/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/khanh/css/fontawsom-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/khanh/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid conya">
        <div class="side-left">
            <div class="sid-layy">
                <div class="row slid-roo">
                    <div class="data-portion">
                    </div>
                </div>
            </div>
        </div>
        <div class="side-right">
            <form action="{{URL::to('/add-customer')}}" method="POST">
                {{ csrf_field() }}
                <h1>Đăng Ký</h1>
                @if(\Session::has('error'))
                <div class="alert alert-danger">{{ \Session::get('error') }}</div>
                {{ \Session::forget('error') }}
                @endif
                <div class="form-row">
                    <div class="col" style="text-align: left; padding-left:0">
                        <label for="">Họ</label>
                        <input type="text" name="ho" class="form-control" placeholder="Họ">
                    </div>
                    <div class="col" style="text-align: left;">
                        <label for="">Tên</label>
                        <input type="text" name="ten" class="form-control" placeholder="Tên">
                    </div>
                </div>
                <div class="form-row">
                    <label for="">Email</label>
                    <input type="text" placeholder="yourname@gmail.com" name="email" class="form-control form-control-sm">
                </div>

                <div class="form-row">
                    <label for="">Mật khẩu</label>
                    <input type="password" placeholder="Mật khẩu" name="matKhau" class="form-control form-control-sm">
                </div>
                <div class="form-row">
                    <label for="">Xác Nhận Mật khẩu</label>
                    <input type="password" placeholder="Mật khẩu" name="password_confirm" class="form-control form-control-sm">
                </div>
                <div class="form-row">
                    <div class="col" style="text-align: left; padding-left:0">
                        <label for="">Ngày Sinh</label>
                        <input type="date" id="start" name="ngaySinh" value="2022-07-22" class="form-control" min="2022-01-01" max="2022-12-31">
                    </div>
                    <div class="col" style="text-align: left;">
                        <label for="">Quê Quán</label>
                        <select id="inputState" name="diaChi" class="form-control">
                            <option selected>Đà Nẵng</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>
                <div class="form-row dfr">
                    <button type="submit" class="btn btn-sm btn-success">Đăng Ký</button>
                </div>
            </form>
            <div class="form-row dfr">
                <a href="{{URL::to('/dang-ky')}}" class="btn btn-sm btn-info">Đăng Nhập</a>
            </div>
            <div class="ord-v">
                <a href="or login with"></a>
            </div>

            <!-- <div class="soc-det">
                <ul>
                    <li class="facebook"><i class="fab fa-facebook-f"></i></li>
                    <li class="twitter"><i class="fab fa-twitter"></i></li>
                    <li class="pin"><i class="fab fa-pinterest-p"></i></li>
                    <li class="link"><i class="fab fa-linkedin-in"></i></li>
                </ul>
            </div> -->
        </div>
        <div class="copyco">
            <!-- <p>Copyrigh 2019 @ smarteyeapps.com</p> -->
        </div>
    </div>
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script.js"></script>


</html>