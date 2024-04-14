<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Sistem Informasi Sertifikasi dan Pelatihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gambar-tombol-login{
            width: 190px;
            height: 53px;
            background-image: url("gambar/Button (1).png");
            background-size: cover;
            border: none;   
        }
        .gambar-tombol-lihat{
            width: 190px;
            height: 53px;
            background-image: url("gambar/Button (2).png");
            background-size: cover;
            border: none;   
        }
        .gambar-tombol-selengkapnya{
            width: 190px;
            height: 53px;
            background-image: url("gambar/Button (3).png");
            background-size: cover;
            border: none;
        }
        .navbar-font{
            font-family: interface;
            font-size: medium;
        }
        .judul-font{
            font-family: Playfair Display;
            font-size: large;
        }
        .kotak-button{
            background-image: url("gambar/Rectangle 1473.png");
            width: 100px;
            height: 30px;
        }
        .warna-footer{
            background-color: #282A3A;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top" >
        <div class="container-fluid">
            <img src="gambar/logo.jpg" width="150px" height="50px">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto px-5 nav-underline">
                    <li class="nav-item px-3">
                        <a class="nav-link active navbar-font" aria-current="page" href="beranda">Beranda</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="pelatihan">Pelatihan</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="sertifikasi">Sertifikasi</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link navbar-font" href="promosi">Promosi</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav ml-auto px-5 dropdown-menu">
                    <li class="nav-item">
                        <a>Level: {{Auth::user()->role}}</a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li class="nav-item">
                        <a href="{{route('actionlogout'}}"><i class="fa fa-power-off"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 125px;">
        <h1>SEKOLAH KOPI RAISA</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <p>SI-SIP bekerja sama dengan sekolah kopi RAISA. SI-SIP merupakan sebuah Sistem Informasi Sertifikasi <br> dan Pelatihan untuk menghubungkan petani kopi dan fasilitator Legalitas serta menyediakan promosi.</p>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <a class="btn gambar-tombol-login" role="button" href="login"></a>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-direction:column" style="height: 550px">
        <img src="gambar/Frame 48095571.png" width="1100px" height="400px">
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <div class="card" style="border-top:none;border-bottom: 1px solid #000;border-left:none;border-right:none;width:65rem"></div>
    </div>
    <div class="d-flex justify-content-center">...</div>
    <div class="d-flex justify-content-center judul-font">
        <h1>Pelatihan</h1>
    </div>
    <div class="d-flex justify-content-center judul-font align-items-center" style="height: 75px;">
        <p>Lorem ipsum dolor sit amet consectetur. Scelerisque urna vel sit dolor fringilla</p>
    </div>
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 700px;">
        <div class="row">
            <div class="col-md-4 md-3 mb-sm-0">
                <div class="card" style="width:18rem">
                    <img src="gambar/Rectangle 1461.png" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Pelatihan A</h2>
                        <p class="card-title" style="color:darkgrey;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, non! Facilis eveniet sequi tenetur deleniti, quaerat totam consectetur libero minima, at et quis animi vel adipisci odio, debitis iusto quo.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="card" style="border-top:none;border-bottom:none;border-left:none;border-right:none;width:max-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start">
                                            <img src="gambar/User.png" alt="modul" style="width: 20px; height:20px; margin-right:5px">
                                            <span>10 Modul</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card" style="border-top:none;border-bottom:none;border-left:none;border-right:none;width:max-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <img src="gambar/stopwatch 2.png" alt="modul" style="width: 20px; height:20px; margin-right:5px">
                                            <span>1 j 30 m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 md-3 mb-sm-0">
                <div class="card" style="width:18rem">
                    <img src="gambar/Rectangle 1461.png" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Pelatihan B</h2>
                        <p class="card-title" style="color: darkgrey;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, non! Facilis eveniet sequi tenetur deleniti, quaerat totam consectetur libero minima, at et quis animi vel adipisci odio, debitis iusto quo.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="card" style="border-top:none;border-bottom:none;border-left:none;border-right:none;width:max-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start">
                                            <img src="gambar/User.png" alt="modul" style="width: 20px; height:20px; margin-right:5px">
                                            <span>10 Modul</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card" style="border-top:none;border-bottom:none;border-left:none;border-right:none;width:max-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <img src="gambar/stopwatch 2.png" alt="modul" style="width: 20px; height:20px; margin-right:5px">
                                            <span>1 j 30 m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 md-3 mb-sm-0">
                <div class="card" style="width:18rem">
                    <img src="gambar/Rectangle 1461.png" alt="">
                    <div class="card-body">
                        <h2 class="card-title">Pelatihan C</h2>
                        <p class="card-title" style="color: darkgrey;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, non! Facilis eveniet sequi tenetur deleniti, quaerat totam consectetur libero minima, at et quis animi vel adipisci odio, debitis iusto quo.</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="card" style="border-top:none;border-bottom:none;border-left:none;border-right:none;width:max-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start">
                                            <img src="gambar/User.png" alt="modul" style="width: 20px; height:20px; margin-right:5px">
                                            <span>10 Modul</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 mb-3">
                                <div class="card" style="border-top:none;border-bottom:none;border-left:none;border-right:none;width:max-content">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-end">
                                            <img src="gambar/stopwatch 2.png" alt="modul" style="width: 20px; height:20px; margin-right:5px">
                                            <span>1 j 30 m</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center">
        <a class="btn gambar-tombol-lihat" role="button" href="#"></a>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <div class="card" style="border-top:none;border-bottom: 1px solid #000;border-left:none;border-right:none;width:65rem"></div>
    </div>
    <div class="d-flex justify-content-center">...</div>
    <div class="d-flex justify-content-center judul-font" style="height: 100px;">
        <h1>Sertifikasi</h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-6 mb-3" style="width: 500px;">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis optio obcaecati recusandae corrupti ut est a sint totam distinctio, dolore ipsam nemo repellendus architecto impedit consectetur enim veniam dignissimos et?<br><br>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem id exercitationem deleniti ea voluptatum neque molestias similique, tempora sapiente! Ipsa est laudantium optio ducimus distinctio error ad ex quae ipsum!<br><br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae itaque nemo veniam magni aut quaerat consequuntur quia, impedit tempora debitis aliquid dolores? Error nemo impedit nisi dolore facilis reiciendis aliquid!</p>
                <a class="btn gambar-tombol-selengkapnya" role="button" href="#"></a>
            </div>
            <div class="col-6 mb-3">
                <img src="gambar/Frame 48095532.png" alt="sertifikasi" width="500px" height="400px">
            </div>
        </div>
    </div>   
    <div class="d-flex justify-content-center align-items-center" style="height: 100px;">
        <div class="card" style="border-top:none;border-bottom: 1px solid #000;border-left:none;border-right:none;width:65rem"></div>
    </div> 
    <div class="d-flex justify-content-center">...</div>
    <div class="d-flex justify-content-center judul-font" style="height: 100px;">
        <h1>Promosi</h1>
    </div>
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 450px;">
        <div class="row">
            <div class="col-4 mb-3">
                <div class="card" style="width:18rem;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <img src="gambar/Frame 48095539.png" alt="">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, non! Facilis eveniet sequi tenetur deleniti, quaerat totam consectetur libero minima, at et quis animi vel adipisci odio, debitis iusto quo.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card" style="width:18rem;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <img src="gambar/Frame 48095539 (1).png" alt="">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis praesentium iusto, asperiores, optio molestiae, libero dignissimos repellendus alias expedita aperiam odio maxime quia consectetur ratione ex eos quidem quas officiis.</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card" style="width:18rem;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <img src="gambar/Frame 48095539 (2).png" alt="">
                    <div class="card-body">
                        <p class="card-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis ipsum officiis, numquam voluptates alias et ipsam fugiat atque provident totam odit dolores, adipisci molestiae unde consectetur, quasi sit earum accusamus?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center" style="height: 200px;">
        <a class="btn gambar-tombol-selengkapnya" role="button" href="#"></a>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-direction:column judul-font warna-footer" style="height: 350px;">
        <div class="row">
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="width:350px;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <img src="gambar/Frame 28.png" alt="logo" width="240px">
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="width:350px;border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="card-body">
                        <p class="card-title">email : <br>Phone : 081230663820</p>
                    </div>
                </div>
            </div>
            <div class="col-4 mb-3">
                <div class="card warna-footer" style="border-top:none;border-bottom:none;border-left:none;border-right:none;">
                    <div class="card-body">
                        <p class="card-title">Social Media</p>
                        <div class="row">
                            <div class="col-2 mb-3">
                                <img src="gambar/Facebook.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Twitter.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Instagram.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Linkedin.png" alt="" width="50px" height="50px">
                            </div>
                            <div class="col-2 mb-3">
                                <img src="gambar/Youtube.png" alt="" width="60px" height="60px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>