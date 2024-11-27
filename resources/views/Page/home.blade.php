<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>KuBertelur</title>
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
        ul.pagination {
            font-size: 0.8rem; /* Ukuran font yang lebih kecil */
            padding: 0;       /* Menghilangkan padding default */
        }
        ul.pagination li {
            display: inline-block;
            margin: 0 3px;    /* Mengurangi jarak antar item */
        }
        ul.pagination li a,
        ul.pagination li span {
            padding: 5px 10px; /* Mengatur padding link dan span */
            border-radius: 4px;
            text-decoration: none;
            color: #007bff;    /* Warna link */
        }
        ul.pagination li.active span {
            background-color: #007bff;
            color: #fff;
        }
        .custom-button { border-radius: 12px; background-color: white; color: gray; border: 1px solid gray; padding: ; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; cursor: pointer; border-radius: 5px; } 
        .custom-button:hover { background-color: #f2f2f2; }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="font-roboto bg-gray-100">
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
                <a href="/develop"><button class="btn" style="background-color:#deb900; border-radius:12px; margin-right:10px;">Developer</button></a>
                <div class="d-flex align-items-center space-x-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                    <span style="color:white; margin-right:20px;"> <span style="margin-right:10px;">IDN | </span> 
                    <button type="button" class="btn btn-primary position-relative">
                        <a href="/profile"><i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i></a></span>
                        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
                            <span class="visually-hidden">New alerts</span>
                        </span>
                    </button>
                    
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="p-0 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-10" style="background-image: url({{ asset('img/ban1-4.png') }}); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center; padding:5% 20%; color:white"> <!-- 688px; width:1107px -->
        <h1 class="display-5 fw-bold" style="">Selamat Datang Di Website<span style="color: #ffcc00"> KuBertelur </span></h1>
        <p class="col-md-12 fs-4">Merupakan sistem pengembangan usaha Mikro kecil dan Menengah yang bergerak dibidang perikanan. <br> Visi kami menciptakan unit komunitas & penjualan yang terintegrasi dari berbagai daerah.</p>
        <button class="btn" style="background-color:#deb900; border-radius:15px; padding-right:60px; padding-left:60px; margin-right:10px; margin-top:10px;">Jelajahi</button>
    </div>
</div>
<div class="container">  
<div class="container-fluid" style="margin-top:70px;">
        <div class="row" style="margin-top:60px">
            <div class="col-md-6 tlri justify-content-md-start">
                <h6>Apa yang baru</h6>
                <h5>Ayo lihat apa saja yang baru datang!</h5>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end align-items-center" style="height: 100%;">
                <i class="fa-solid fa-solid fa-face-grin-hearts fa-beat" style="font-size: 1.5em;"></i>
            </div>
        </div>
        <!-- --> <hr>
        <div class="row d-flex justify-content-center" style="margin-top:50px; margin-bottom: 40px;">
                @foreach($pdc as $p)
                <div class="col-md-4 d-flex justify-content-center" style="margin-bottom:10px;">
                    <div class="card" style="width : 257px;">
                        <img src="{{asset('storage/photo/'.$p->prdpht)}}" class="card-img-top" alt="Product">
                        <div class="card-body">
                            <h5 class="card-title" style="padding:2% 0;"><a style="text-decoration: none; color:inherit;" href="{{ route('pd.show', $p->idproduct) }}">{{$p->prdname}}</a></h5>
                            <p class="card-text" style="margin-top:10px;"><b>Rp{{$p->prdprice}}</b> <br> </p>
                            <div class="content-justify-center" style="display: flex; justify-content: center;"><a href="{{ route('pd.show', $p->idproduct) }}" class="btn btn-primary">Lihat lebih lanjut</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        <div class="row" style="background-color:#050C9C; border-radius:15px; padding:20px; ">
            <div class="col-md-3 tlri justify-content-md-start" style="color:white; padding: 1%;">
                Daftarkan diri anda segera, agar <br> tidak ketinggalan program kami!
            </div>
            <div class="col-md-7 tlri justify-content-md-start" style="padding:1%;">
                <a href="{{ route('loginPage') }}" style="border-radius:12px;" class="custom-button form-control">Masuk</a>
            </div>
            <div class="col-md-2 tlri justify-content-md-start" style="padding:1%;">
                <a href="/regis" style="background-color:#deb900; border-radius:12px; color:black;" class="custom-button form-control">Daftar</a>
            </div>
        </div>
        <!-- -->
        <div class="row" style="margin-top:60px;">
            <div class="col-md-6 tlri justify-content-md-start">
                <h6>Sulit untuk menemukan produk yang tepat untuk ternak anda??</h6>
                <h5>Ayo lihat produk yang bagus untukmu!</h5>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end align-items-center" style="height: 100%;">
                <i class="fa-solid fa-cart-shopping fa-beat" style="font-size: 1.5em;"></i>
            </div>
        </div>
        <div class="row d-flex justify-content-center" style="margin-top:50px; margin-bottom: 40px;">
            @foreach($pdcB as $pB)
            <div class="col-md-4 d-flex justify-content-center" style="margin-bottom:10px;">
                <div class="card" style="width : 257px;">
                    <img src="{{asset('storage/photo/'.$pB->prdpht)}}" class="card-img-top" alt="Product">
                    <div class="card-body">
                        <h5 class="card-title" style="padding:2% 0;"><a style="text-decoration: none; color:inherit;" href="{{ route('pd.show', $pB->idproduct) }}">{{$pB->prdname}}</a></h5>
                        <p class="card-text" style="margin-top:10px;"><b>Rp{{$pB->prdprice}}</b></p>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $pdcB->links('pagination::bootstrap-4') }}
            </div>
        </div>
        <div class="row" style="margin-top:60px">
            <div class="col-md-6 tlri justify-content-md-start">
                <h6>Apakah kamu tahu??</h6>
                <h5>Fakta dan info apa saja yang kamu ketahui tentang ikan?</h5>
            </div>
            <div class="col-md-6 d-flex justify-content-md-end align-items-center" style="height: 100%;">
                <i class="fa-solid fa-face-grin-wide fa-bounce" style="font-size: 2em;"></i>
            </div>
        </div>
        <div class="row" style="margin-top:25px; margin-bottom:45px;">
            @foreach ($content as $ct)
            <div class="row" style="margin-bottom:10px;">
                <div style="padding:2%; background-color:#ececec; border-radius:12px;">
                @if($us == 'false')
                    <h4 style="padding:1% 0;">{{ $ct->title }}</h4>
                @else
                    <div style="padding:2%; background-color:#ececec; border-radius:12px;">
                        <a style="text-decoration: none; color:inherit;" href="{{ route('ct.showII', $us) }}">
                            <h4 style="padding:1% 0;">{{ $ct->title }}</h4>
                        </a>
                    </div>
                @endif
                        <p><b>{{ $ct->user_name }}</b></p>
                    <hr><p>{{ $ct->prevdesc }}</p>
                </div>
            </div>
            @endforeach
            <div class="d-flex justify-content-center">
                {{ $content->links('pagination::bootstrap-4') }}
            </div>
        </div>
</div>
</div>

<footer class="footer bg-dark text-white" style="margin-top :20px; background-color: #343a40;">
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
