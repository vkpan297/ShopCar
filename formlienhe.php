<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<style>
    body{
        background-image:url(https://www.wallpaperup.com/uploads/wallpapers/2014/07/20/400535/5f38d80fb61e333be011432994f248f6.jpg);
        background-size:cover;
    }

</style>
</head>
<body>

<div class="container">
<br><br>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 pb-5">


                    <!--Form with header-->

                    <form action="codelienhe.php" method="post">
                        <div class="card border-primary rounded-0">
                            <div class="card-header p-0">
                                <div class="bg-info text-white text-center py-2">
                                      <h3><i class="fa fa-envelope"></i> Liên Hệ</h3>
                                    <p class="m-0">Có vấn đề gì liên hệ với chúng tôi!</p>
                                </div>
                            </div>
                            <div class="card-body p-3">

                                <!--Body-->
                              
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="tenkh" name="tenkh" placeholder="Tên khách hàng" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="sdt" name="sdt" placeholder="Số điện thoại" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                        </div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="@gmail.com" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                     <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-home text-info"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ hiện tại" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                        </div>
                                        <textarea class="form-control" id="nd" name="nd" placeholder="Nội dung" required></textarea>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <input type="submit" value="Gửi liên hệ" class="btn btn-info btn-block rounded-0 py-2">

                                </div>
                                <ul class="w3-ul" style="text-align: center;">
                                    <li class="w3-xxlarge"><a href="index.php"><i class="fa fa-home"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </form>
                    <!--Form with header-->


                </div>
    </div>
</div>
</body>
</html>