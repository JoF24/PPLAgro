<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="gambar/Logo SI-SIP.png" type="image/x-icon">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/halaman_utama.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-font{
            font-family: interface;
            font-size: medium;
        }
        .judul-font{
            font-family: Playfair Display;
            font-size: large;
        }
        .tombol-registrasi{
            background-size:480px 50px;
            border: none;
            cursor: pointer;
            background-image: url("gambar/Login.png");
            color: white;
            width: 480px;
            height: 50px;
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
                        <a class="nav-link navbar-font" href="beranda">Beranda</a>
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
                <ul class="navbar-nav ml-auto px-5 nav-underline">
                    <li class="nav-item">
                        <a class="nav-link navbar-font" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="registrasi" style="position:relative;">
                            <img src="gambar/Rectangle 1473.png" alt="register" width="100px" height="30px" style="position :relative;">
                            <span class="navbar-font" style="position: absolute; top:50%; left:50%; transform:translate(-50%, -50%); color:white;">Registrasi</span>    
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="d-flex justify-content-center align-items-center judul-font" style="height: 150px;">
        <h1>Registrasi</h1>
    </div>
    <div class="d-flex justify-content-center">
        <form action="" class="row g-3" style="width: 1000px">
            <div class="col-6 mb-3">
                <label for="nama" style="font-weight: bold;" class="mb-3">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama">
            </div>
            <div class="col-6 mb-3">
                <label for="nomor" style="font-weight: bold;" class="mb-3">Nomor Telepon</label>
                <input type="text" id="nomor" name="nomor" class="form-control" placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="col-6 mb-3">
                <label for="alamat" style="font-weight: bold;" class="mb-3">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">
            </div>
            <div class="col-6 mb-3">
                <label for="username" style="font-weight: bold;" class="mb-3">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username">
            </div>
            <div class="col-6 mb-3">
                <label for="kecamatan" class="mb-3" style="font-weight: bold;">Kecamatan</label>
                <select name="kecamatan" id="kecamatan" class="form-select">
                    <option value="" selected>Pilih Kecamatan</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label for="password" class="mb-3" style="font-weight: bold;">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
            </div>
            <div class="col-6 mb-3">
                <label for="kabupaten" class="mb-3" style="font-weight: bold;">Kabupaten</label>
                <select name="kabupaten" id="kabupaten" class="form-select">
                    <option value="" selected>Pilih Kabupaten</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label for="konfirpass" class="mb-3" style="font-weight: bold;">Konfirmasi Password</label>
                <input type="password" class="form-control" name="konfirpass" id="konfirpass" placeholder="Masukkan Ulang Password">
            </div>
            <div class="col-6 mb-3">
                <label for="provinsi" class="mb-3" style="font-weight: bold;">Provinsi</label>
                <select name="provinsi" id="provinsi" class="form-select">
                    <option value="" selected>Pilih Provinsi</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <button class="btn tombol-registrasi mt-4" type="submit">Registrasi</button>
            </div>
        </form>
    </div>
    <div class="d-flex" style="height:150px"></div>
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