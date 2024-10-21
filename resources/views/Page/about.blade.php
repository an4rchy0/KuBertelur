<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome Kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar-nav .nav-link {
            color: #FFFFFF;
        }
        .navbar-nav .nav-link:hover {
            background-color: #7A8F8A; 
        }
        .d-flex.flex-column a {
            color: inherit;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000e86;">
    <div class="container">
        <div class="d-flex align-items-center">
            <img alt="Logo" class="mr-3" height="40" src="{{ asset('img/logo.png') }}" width="40" style="margin-right:10px"/>
            <a class="navbar-brand" href="/" style="font-weight: bold; color: #FFFFFF;">KuBertelur</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color: #FFFFFF;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kat" style="color: #FFFFFF;">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" style="color: #FFFFFF;">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontakk" style="color: #FFFFFF;">Komunitas</a>
                </li>
            </ul>
            <div class="d-flex align-items-center space-x-4">
                <!--<input class="form-control rounded-full text-black" placeholder="Apa yang kamu cari?" type="text" style="margin-right:10px;"/>-->
                <button class="btn" style="background-color:#deb900; border-radius:12px; margin-right:10px;">Developer</button>
                <div class="d-flex align-items-center space-x-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                    <span style="color:white; margin-right:20px;"> <span style="margin-right:10px;">IDN | </span> 
                    <a href="/login"><i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="p-0 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-10" style="background-image: url({{ asset('img/ban1-4.png') }}); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center; padding:5% 20%; color:white"> <!-- 688px; width:1107px -->
        <h1 class="display-5 fw-bold" style="">KuBertelur</h1>
        <p class="col-md-12 fs-4">Merupakan sistem pengembangan usaha Mikro kecil dan Menengah yang bergerak dibidang perikanan. <br> Visi kami menciptakan unit komunitas & penjualan yang terintegrasi dari berbagai daerah.</p>
    </div>
</div>
<div style=" display: flex; justify-content:center; margin-top:10px; margin-bottom:20px;">
    <button class="btn btn-primary btn-lg" type="button" style="padding: 10px 20px; border-radius:25px;"><a href="/" style="color:inherit; text-decoration:none;">Mulai Sekarang!</a></button>
</div>
<div class="container-fluid" style="margin-top:70px;">
    <div class="container">
        <div class="row bg-body-tertiary" style="padding:1%">
            <div class="row" style="padding:1%; display: flex; justify-content:center;">
                <div style="display: flex; justify-content:center;"><h5>Tentang</h5></div>
                <div style="display: flex; justify-content:center;"><h4 class="fw-bold">KuBertelur</h4></div>
                <div class="col-md-10" style="margin-top:20px;">
                    <p style="text-align:justify">Sistem pengembang usaha Mikro Kecil dan Menengah yang bergerak di bidang perikanan. Visi kami menciptakan unit komunitas & penjualan yang terintegrasi dari berbagai daerah. Aplikasi ini mengintegrasikan Internet of Things (IoT), Website, dan juga Sistem Kecerdasan Buatan (Artificial Intelligence). Untuk jangka panjang akan dikembangkan dengan teknologi yang relevan, dengan basis permasalahan yaitu air yang kurang baik di daerah warga dan perairan  ternak.</p>
                </div>
                <div class="col-md-5 align-items-center" style="margin-top:20px; ">
                    <img alt="Logo" class="mr-3" height="40" src="{{ asset('img/tk1.png') }}" style="width:100%; height:auto"/>
                    <p style="text-align:center;">Sumber: AntaraFoto (Oky Lukmansyah)</p>
                </div>
                <div class="col-md-5" style="margin-top:20px;">
                    <h6>Mengembangkan UMKM yang bergerak di bidang perikanan dengan domisili yang lebih luas.</h6>
                    <p style="text-align:justify;">Untuk mendorong pertumbuhan UMKM perikanan, perlu dilakukan upaya-upaya strategis yang memungkinkan bisnis ini untuk beroperasi dalam skala yang lebih besar dan menjangkau pasar yang lebih luas. Salah satu langkah penting peningkatan akses terhadap teknologi. KuBertelur menawarkan fasilitas dalam teknologi yaitu dengan membuat komunitas UMKM perikanan.</p>
                </div>
            </div>
            <div class="row" style="padding:1%; display: flex; justify-content:center;">
                <div class="col-md-5 align-items-center" style="margin-top:20px;">
                    <h6>Menciptakan komunitas untuk mendapatkan wawasan lebih luas melalui forum yang telah disediakan</h6>
                    <p style="text-align:justify;">  KuBertelur menawarkan komunitas untuk UMKM perikanan. Hal ini merupakan langkah strategis untuk memaksimalkan potensi sektor perikanan. Melalui forum diskusi yang telah disediakan, para pelaku UMKM dapat saling berbagi pengetahuan, pengalaman, dan inovasi. Dengan demikian, wawasan mereka akan semakin luas, mulai dari teknik budidaya yang lebih efisien, pemasaran produk perikanan yang lebih efektif, hingga akses terhadap teknologi terbaru.</p>
                </div>
                <div class="col-md-5" style="margin-top:20px; ">
                    <img alt="Logo" class="mr-3" height="40" src="{{ asset('img/tk2.png') }}" style="width:100%; height:auto"/>
                </div>
            </div>
        </div>
        <div class="row" style="padding:2%;">
            <div class="row" style=" display: flex; justify-content:center; background-color: #000e86; color:white; padding:5%">
                <div style="display: flex; justify-content:center;"><h5>Syarat & Ketentuan</h5></div>
                <div style="display: flex; justify-content:center;"><h4 class="fw-bold">Terakhir diperbarui: 25 Oktober, 2024</h4></div>
            </div>
            <div class="row" style="padding: 3%; display: flex; justify-content:center; background-image: url({{ asset('img/bg1.png') }}); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center;">
                <img alt="Logo" class="mr-3" height="40" src="{{ asset('img/sk.png') }}" style="width:60%; height:auto"/>
            </div>
        </div>
    </div>
</div>
<footer class="footer bg-dark text-white" style="background-color: #343a40;">
    <div class="container">
        <div class="row" style="padding: 20px;">
            <div class="col-md-4 justify-content-md-center">
                <img class="img-fluid mb-3" src="{{ asset('img/logo.png') }}" alt="Company Logo" style="border-radius: 50%; border: 2px solid white; width: 40%; padding: 10px; align-content: center;">
            </div>
            <div class="col-md-8">
                <div class="row" style="display: flex; align-items: center; justify-content: center;  text-align: justify; margin-bottom:5px;">
                    <p>Mari bersama majukan pangan negeri! <br> KuBertelur market & community</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Kontak Pusat </h5>
                        <p> <i class="fa-brands fa-whatsapp"></i> +62 8888-888-888</p>
                        <p> <i class="fa-regular fa-envelope"></i> KuBertelurIdn@company.com</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Sosial Media </h5>
                        <div class="d-flex flex-column">
                            <a href="/" class="text-white mb-2"><i class="fa-brands fa-instagram"></i> Youtube : KuBertelur</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="display: flex; align-items: center; justify-content: center; height: 5vh; text-align: center;">
                <hr><p>&copy; <span id="year"></span>Copyright | KuBertelur</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>