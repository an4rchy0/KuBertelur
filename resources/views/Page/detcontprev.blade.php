<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <a class="nav-link" href="{{ route('ct.showII', $id) }}" style="color: #FFFFFF;">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about" style="color: #FFFFFF;">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cmt.showI', $id) }}" style="color: #FFFFFF;">Komunitas</a>
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
</body>
<div class="container">
    <div class="container-fluid">
        <div class="row" style="margin:4% 0%;">
        <?php
        if (!function_exists('generateid')) {
            function generateid() {
                $hari = date('l'); // Menggunakan 'l' untuk nama hari lengkap dalam bahasa Inggris
                $tanggal = date('d');
                $bulan = date('M');
                $blnangka = date('m');
                $tahun = date('y');
                $jam = date('h');
                $minute = date('i');
                $detik = date('s');

                $haricut = substr($hari, 0, 1);
                $bulancut = substr($bulan, 0, 1);
                $hourcut = substr($jam, 0, 1);
                $minutecut = substr($minute, 0, 1);
                $detikcut = substr($detik, 0, 1);

                $kodejoin = "CT-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}";
                return $kodejoin;
            }
        }
        ?>
            <div class="col-md-4 justify-md-center" style="padding-top:1%;padding-left:2%; background-color: #FDFCFC; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.15), 0 6px 20px 0 rgba(0, 0, 0, 0.05); border-radius:12px;">
                <h5 style="text-align: center; padding:5%;">Unggah kontenmu disini!</h5>
                <form action="/BgStore" method="post" class="bg-body-tertiary rounded-3" style="padding:5%" enctype="multipart/form-data">
                    <fieldset>
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="contid" value="<?php echo generateid(); ?>" hidden>
                        </div>
                        <div class="form-group">
                            Judul Konten            : <input type="text" class="form-control" name="conttl" required="required">    
                        </div>
                        <div class="form-group">
                            Deskripsi Singkat Konten (Preview) : <textarea class="form-control" name="pvdc" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            Isi Blog Konten Anda    : <textarea class="form-control" name="cont" required="required"></textarea><br><br><br>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="ctus" required="required" value="{{ $id }}" hidden>
                        </div>
                        <input type="submit" value="Post ke Timeline!" class="btn btn-primary form-control">
                    </fieldset>
                </form>
            </div>

            <div class="col-md-8">
                <div  style="background-color:#000e86; padding:2% 4%; color:#ffff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:12px;" class="card-header bg-primary"><h5>Timeline Konten</h5></div>
                @foreach ($contents as $ct)
                <div class="row" style="margin:3% 1%;" data-aos="fade-up" data-aos-delay="500">
                    <div style="padding-top:1%;padding-left:2%; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.15); border-radius:12px;">
                        <h4 style="padding:1% 0;">{{ $ct->title }}</h4>
                        <p><small class="text-body-secondary"><b>{{ $ct->user_name }}</b></small></p>
                        <hr><p> {{ \App\Helpers\StringHelper::limitWords($ct->content, 50) }} ...</p><hr>
                        <div class="d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400" style="padding-bottom:1%;">
                            <i class="fa-solid fa-heart" data-aos="fade-up"></i> &nbsp &nbsp &nbsp <span style="margin-right:5%;" data-purecounter-start="0" data-purecounter-duration="1" class="purecounter"></span>&nbsp
                            <i class="fa-solid fa-face-laugh" data-aos="fade-up"></i> &nbsp &nbsp &nbsp <span style="margin-right:5%;" data-purecounter-start="0"  data-purecounter-duration="1" class="purecounter"></span>&nbsp
                            <i class="fa-solid fa-arrow-trend-up" data-aos="fade-up"></i> &nbsp &nbsp &nbsp <spanstyle="margin-right:5%;" data-purecounter-start="0" data-purecounter-duration="1" class="purecounter"></span>&nbsp
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $contents->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</div>
</html>