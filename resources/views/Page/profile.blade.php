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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs@1.5.0/dist/purecounter_vanilla.min.js"></script>
    <!-- Font Awesome Kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
<body class="font-roboto bg-gray-100">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #000e86;">
    <div class="container">
        <div class="d-flex align-items-center"data-aos="fade-up" data-aos-delay="100">
            <img alt="Logo" class="mr-3" height="40" src="{{ asset('img/logo.png') }}" width="40" style="margin-right:10px" data-aos="fade-up" data-aos-delay="200"/>
            <a class="navbar-brand" href="/" style="font-weight: bold; color: #FFFFFF;" data-aos="fade-up" data-aos-delay="300">KuBertelur</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item" data-aos="fade-up" data-aos-delay="100">
                    <a class="nav-link" href="/" style="color: #FFFFFF;">Home</a>
                </li>
                <li class="nav-item" data-aos="fade-up" data-aos-delay="200">
                    <a class="nav-link" href="{{ route('ct.showII', $userString) }}" style="color: #FFFFFF;">Blog</a>
                </li>
                <li class="nav-item" data-aos="fade-up" data-aos-delay="300">
                    <a class="nav-link" href="/about" style="color: #FFFFFF;">Tentang Kami</a>
                </li>
                <li class="nav-item" data-aos="fade-up" data-aos-delay="400">
                    <a class="nav-link" href="{{ route('cmt.showI', $userString) }}" style="color: #FFFFFF;">Komunitas</a>
                </li>
            </ul>
            <div class="d-flex align-items-center space-x-4">
                <!--<input class="form-control rounded-full text-black" placeholder="Apa yang kamu cari?" type="text" style="margin-right:10px;"/>-->
                <a data-aos="fade-up" data-aos-delay="500" href="/develop"><button class="btn" style="background-color:#deb900; border-radius:12px; margin-right:10px;">Developer</button></a>
                <div class="d-flex align-items-center space-x-2">
                    <img data-aos="fade-up" data-aos-delay="600" src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="Flag of Indonesia" height="20" width="20" style="margin-right:10px;"/>
                    <span data-aos="fade-up" data-aos-delay="700" style="color:white; margin-right:20px;"> <span style="margin-right:10px;">IDN | </span> 
                    <!-- Tautan Logout -->
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration:none; color:inherit;">
                        <i class="fa-solid fa-user" style="color:#ffff; height:20px; width:20px;"></i> Logout
                    </a>
                    <!-- Form Logout Tersembunyi -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="p-0 mb-1 bg-body-tertiary rounded-3">
    <div class="container-fluid py-10" data-aos="fade-up" data-aos-delay="100" style="background-image: url({{ asset('img/ban1-5.png') }}); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center; padding:5% 20%; color:white"> <!-- 688px; width:1107px -->
        <div class="row" style="display-5">
            <div class="col-md-6 justify-content-md-start">
                <h4 data-aos="fade-up" data-aos-delay="200">Hello</h4>
                <h1 data-aos="fade-up" data-aos-delay="2000">{{ $user->name }}</h1>
                <h3 data-aos="fade-up" data-aos-delay="2100">{{ $user->email}}</h3>
            </div>
            <div class="col-md-6 justify-content-md-start">
                <p style="font-size:18px; margin-top:20px;">
                    <a data-aos="fade-up" data-aos-delay="2500" href="#trans" style="text-decoration: none; color: inherit;">
                        <span style="margin-right:5px; background-color:#172bd2; padding:10px 20px; border-radius:25px;">Transaksi</span>
                    </a>
                    <a data-aos="fade-up" data-aos-delay="2600" href="#cmt" style="text-decoration: none; color: inherit;">
                        <span style="margin-right:15px; background-color:#172bd2; padding:10px 20px; border-radius:18px;">Komunitas</span>
                    </a>
                    <br><br>
                    <a data-aos="fade-up" data-aos-delay="2700" href="#ct" style="text-decoration: none; color: inherit;">
                        <span style="margin-right:5px; background-color:#172bd2; padding:10px 20px; border-radius:18px;">Post</span>
                    </a>
                    <a data-aos="fade-up" data-aos-delay="2800" href="#pdc" style="text-decoration: none; color: inherit;">
                        <span style="margin-right:15px; background-color:#172bd2; padding:10px 20px; border-radius:18px;">Produkku</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row" style="margin-top:6%;" data-aos="fade-up" data-aos-delay="100" id=trans>
            <h4>Transaksi Pembelian</h4><hr>
            @if ($transactions->isEmpty())
                <div class="row">
                    <div class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
                        Uppss.. Belum ada produk yang ditambahkan 
                    </div>
                </div>
            @else
                @foreach ($transactions as $transaction)
                <div class="card mb-3" style="max-width: 540px; margin-right: 20px;" data-aos="fade-up" data-aos-delay="300">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/photo/' . $transaction->prdpht) }}" class="img-fluid rounded-start w-100 h-100" style="object-fit: cover;" alt="Product Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $transaction->prdname }}</h5>
                                <p class="card-text">
                                    Jumlah: {{ $transaction->qty }}<br>
                                    Total Harga: Rp {{ number_format($transaction->total, 2, ',', '.') }}<br>
                                    Alamat: {{ $transaction->alamat }}
                                </p>
                                <p class="card-text"><small class="text-body-secondary">Pembeli: {{ $transaction->nama_user }}</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                <div class="d-flex justify-content-center" style="margin-top:2%;">
                    {{ $transactions->links('pagination::bootstrap-4') }}
                </div>
            @endif
        </div>
        <div class="row d-flex" style="margin-top:25px; background-color:#F8FFFD; padding:2%;" data-aos="fade-up" data-aos-delay="100" id=cmt>
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-start" data-aos="fade-up" data-aos-delay="200"><h5>Forum Diskusi dan Komunitas</h5></div><hr>
            </div>
            <div class="row">
                @foreach ($cmt as $c)
                <div class="col-md-4 mb-3" style="margin-right:0%;">
                    <div class="card">
                        <div class="card-body">
                            <a style="text-decoration: none; color:inherit;" href="{{ route('cmt.showII', [$userString, $c->idcmt]) }}"><h5 class="card-title">{{$c->name}}</h5></a><hr>
                            <p class="card-text">{{ \App\Helpers\StringHelper::limitWords($c->descript, 15) }} ...</p>
                            <p class="card-text"><small>{{$c->title}}</small></p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-center" style="margin-top:2%;">
                    {{ $cmt->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center" data-aos="fade-up" data-aos-delay="200" style="margin-top:50px; background-image: url({{ asset('img/ban1-5.png') }}); background-size: 100% 100%; background-repeat: no-repeat; background-position: center center; padding:5% 20%; color:white;">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <h4 data-aos="fade-up" data-aos-delay="400">Kelola akunmu yuk!</h4>
                </div>
            </div>
        </div>
        <div class="row d-flex" style="margin-top:25px;"  id=ct>
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-start" data-aos="fade-up" data-aos-delay="200"><h5>Postingan Pribadi</h5></div>
                <div class="col-md-6 d-flex justify-content-md-end" data-aos="fade-up" data-aos-delay="300"><div class="alert alert-success" role="alert"><a href="{{ route('ct.showII', $user->idusr_kbt) }}" style="text-decoration:none; color:inherit;"><i class="fa-solid fa-timeline" style="margin-right:5px;"></i>Lihat Timeline</a></div></div><hr>
            </div>
            @if ($contents->isEmpty())
                <div class="row" data-aos="fade-up" data-aos-delay="400">
                    <div class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
                        Upss.. kamu belum posting atau upload Post nih 
                    </div>
                </div>
            @else
                @foreach ($contents as $content)
                <div class="row" style="margin-bottom:2%;">
                    <div style="padding:2%; background-color:#F8FFFD; border-radius:12px;">
                        <div class="row" data-aos="fade-up" data-aos-delay="400">
                            <div class="col-md-10 d-flex align-items-center justify-content-md-start"><h4><a href="{{ route('ct.showII', $user->idusr_kbt) }}" style="text-decoration:none; color:inherit;">{{ $content->title }}</a></h4><hr></div>
                            <div class="col-md-2 d-flex justify-content-md-end">
                                <div class="alert alert-secondary" role="alert">
                                    <!--<a href="{{ route('ct.up', ['id' => $content->idpct]) }}" style="color:#a3a3a3"><i class="fa fa-edit" style="font-size: 15px; margin-right: 5px;"></i></a>-->
                                    <a href="#" data-toggle="modal" data-target="#prevMNModal{{$content->idpct}}" style="text-decoration:none; color:#a3a3a3;"><i class="fa-solid fa-gear"></i></a>
                                </div>
                            </div><hr>
                        </div>
                        <p data-aos="fade-up" data-aos-delay="500">{{ \App\Helpers\StringHelper::limitWords($content->content, 50) }} ...</p>
                        <div class="modal fade" id="prevMNModal{{$content->idpct}}" tabindex="-1" role="dialog" aria-labelledby="prevMNModalLabel{{$content->idpct}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%;">
                                <div class="modal-content">
                                    <div class="modal-header"><h5 class="modal-title" id="prevMNModalLabel{{$content->idpct}}">Manage Kontenmu</h5></div>
                                    <div class="modal-body">
                                        <div class="row" style="padding:0% 3%;">
                                            <div class="modal-body">
                                                <div class="row" style="padding:0% 3%;">
                                                    <form action="{{ url('/upCT', $content->idpct)}}" method="post" class="bg-body-tertiary rounded-3" style="padding:5%" enctype="multipart/form-data">
                                                        <fieldset>
                                                            {{csrf_field()}}
                                                            <div class="form-group">
                                                                Judul Konten            : <input type="text" class="form-control" value="{{$content->title}}" name="conttl" required="required">	
                                                            </div>
                                                            <div class="form-group">
                                                                <textarea class="form-control" name="pvdc" required="required" hidden>{{ $content->prevdesc }}</textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                Isi Konten Anda : <textarea class="form-control" name="cont" required="required" style="height: 200px;">{{$content->content}}</textarea><br>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="contid" value="{{$content->idpct}}" disabled hidden>
                                                            </div>
                                                            <input type="submit" value="Simpan Kontenku!" class="btn btn-primary form-control">
                                                        </fieldset>
                                                    </form>
                                                    <a href="#" data-toggle="modal" data-target="#deleteModal{{$content->idpct}}" style="padding:1%; margin: 2% 0; border:1px solid; text-decoration:none; width:100%; text-align:center; color: red;"><i class="fa fa-trash" style="font-size: 20px;"></i>&nbsp Delete</a>
                                                    <div class="modal fade" id="deleteModal{{$content->idpct}}" tabindex="-1" role="dialog" aria-labelledby="deleteModal{{$content->idpct}}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteModal{{$content->idpct}}">Konfirmasi Hapus</h5>
                                                                </div>
                                                                <div class="modal-body">Apakah Anda yakin ingin menghapus Post ini?</div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                    <a href="{{ route('ct.del', ['id' => $content->idpct]) }}" class="btn btn-danger">Hapus</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                @endforeach
                <div data-aos="fade-up" data-aos-delay="100" class="d-flex justify-content-center" style="margin-top:2%;">
                    {{ $contents->links('pagination::bootstrap-4') }}
                </div>
            @endif
        </div>
        <div class="row d-flex" style="margin-top:25px; margin-bottom:50px;" id=pdc>
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-md-start" data-aos="fade-up" data-aos-delay="200"><h5>Kelola Produk</h5></div>
                <div class="col-md-6 d-flex justify-content-md-end" data-aos="fade-up" data-aos-delay="300"><div class="alert alert-success" role="alert"><a href="#" data-toggle="modal" data-target="#addModal{{$user->idusr_kbt}}" style="text-decoration:none; color:inherit;"><i class="fa-solid fa-plus" style="margin-right:5px;"></i> Tambah produk</a></div></div><hr>
                <div class="modal fade" id="addModal{{$user->idusr_kbt}}" tabindex="-1" role="dialog" aria-labelledby="addModalLabel{{$user->idusr_kbt}}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addModalLabel{{$user->idusr_kbt}}">Add Product</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row" style="padding:0% 3%;">
                                    <?php 
                                        if (!function_exists('generateidPC')) {
                                        function generateidPC(){
                                            $hari = date('l');
                                            $tanggal = date('d');
                                            $bulan = date('M');
                                            $blnangka = date('m');
                                            $tahun = date('y');
                                            $jam = date('h');
                                            $minute = date('i');
                                            $detik = date('s');
                                            $haricut = substr($hari,0,1);
                                            $bulancut = substr($bulan,0,1);
                                            $hourcut = substr($jam,0,1);
                                            $minutecut = substr($minute,0,1);
                                            $detikcut = substr($detik,0,1);
                                            $kodejoin = "PC-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}";
                                            return $kodejoin;
                                        }
                                        }
                                    ?>
                                    <form action="/PrdStore" method="post" class="bg-body-tertiary rounded-3" style="padding:2%" enctype="multipart/form-data">
                                        <fieldset>
                                            {{csrf_field()}}
                                            <div class="row" style="margin-top: 5%;">
                                                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="padding:1%;">
                                                    <img src="{{ asset('img/imgexm.png') }}" alt="Product" width="300px" height="300px">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="prdid" value="<?php echo generateidPC(); ?>" hidden>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Tambahkan Produk Anda Disini!<br>
                                                    <div class="form-group">
                                                        Nama Produk: <input type="text" class="form-control" name="prdname" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        Harga Produk: <input type="number" class="form-control" name="prdprice" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        Stok: <input type="number" class="form-control" name="prdqty" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        Upload Foto Produkmu! <input type="file" class="form-control" name="prdpht" id="photo" required="required">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="prdus" required="required" value="{{ $user->idusr_kbt }}" hidden>
                                                    </div>
                                                </div>
                                                <div class="form-group w-100"> 
                                                    Deskripsi: <textarea class="form-control w-100" name="prddescript" required="required" style="height: 300px;"></textarea><br> 
                                                </div>
                                                <input type="submit" value="Simpan Data" class="btn btn-primary form-control">
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($pdc->isEmpty())
                <div class="row">
                    <div data-aos="fade-up" data-aos-delay="400" class="alert alert-info d-flex justify-content-center align-items-center" role="alert">
                        Uppss.. Belum ada produk yang ditambahkan 
                    </div>
                </div>
            @else
                <div class="row d-flex justify-content-center align-items-center">
                @foreach ($pdc as $pd)
                    <div class="col-md-4 d-flex justify-content-center align-items-center" style="margin-top:25px;">
                        <div class="card" style="width: 300px;">
                            <img data-aos="fade-up" data-aos-delay="400" src="{{asset('storage/photo/'.$pd->prdpht)}}" class="card-img-top img-responsive margin" alt="Product" style="width : 300px; height: 223px;">
                            <div data-aos="fade-up" data-aos-delay="500" class="card-body">
                                <!--<h5 class="card-title" style="padding-top:2% 0;"><a style="text-decoration: none; color:inherit;" href="{{ route('pd.show', [$pd->idproduct, $user->idusr_kbt]) }}">{{$pd->prdname}}</a></h5>-->
                                <h5 class="card-title" style="padding-top:2% 0;"><a href="#" data-toggle="modal" data-target="#prevModal{{$pd->idproduct}}" style="text-decoration:none; color:inherit;">{{$pd->prdname}}</a></h5>
                                <p class="card-text" style="text-align: justify;">Harga: Rp{{ number_format($pd->prdprice, 2, ',', '.') }} <br><div style="margin-top:1px;">{{ \App\Helpers\StringHelper::limitWords($pd->prddescript, 15) }} ...</div> </p>
                                <p class="card-text"><small class="text-body-secondary">Stok : {{ $pd->prdqty }}</small></p>
                            </div>
                            <div class="card-footer">
                                <!--<a href="{{ route('pd.up', ['id' => $pd->idproduct]) }}"><i class="fa fa-edit" style="font-size: 20px; margin-right: 10px;"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="prevModal{{$pd->idproduct}}" tabindex="-1" role="dialog" aria-labelledby="prevModalLabel{{$pd->idproduct}}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 80%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="prevModalLabel{{$pd->idproduct}}">Preview Produk</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row" style="padding:0% 3%;">
                                        <div class="modal-body">
                                            <div class="row" style="padding:0% 3%;">
                                                <form action="{{ url('/upPD', $pd->idproduct)}}" method="post" class="bg-body-tertiary rounded-3" style="padding:5%" enctype="multipart/form-data">
                                                    <fieldset>
                                                        {{csrf_field()}}
                                                        <div class="row" style="margin-top: 5%;">
                                                            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="padding:1%;">
                                                                <img src="{{ asset('storage/photo/'.$pd->prdpht) }}" alt="Product" width="300px" height="300px">
                                                                <div class="form-group w-100">
                                                                    <input type="text" class="form-control" name="contid" value="{{$pd->idproduct}}" hidden>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p>Tambahkan Produk Anda Disini!<br>
                                                                <div class="form-group">
                                                                    Nama Produk     : <input type="text" value="{{$pd->prdname}}" class="form-control" name="prdname" required="required">	
                                                                </div>
                                                                <div class="form-group">
                                                                    Harga Produk    : <input type="number" value="{{$pd->prdprice}}" class="form-control" name="prdprice" required="required">
                                                                </div>
                                                                <div class="form-group">
                                                                    Stok            : <input type="number" value="{{$pd->prdqty}}" class="form-control" name="prdqty" required="required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group w-100"> 
                                                            Deskripsi: <textarea class="form-control w-100" name="prddescript" required="required" style="height: 100px;">{{ $pd->prddescript }}</textarea><br> 
                                                        </div>
                                                        <input type="submit" value="Simpan Data" class="btn btn-primary form-control" style="margin-top:2%;">
                                                    </fieldset>
                                                </form>
                                                <a href="#" data-toggle="modal" data-target="#deleteModal{{$pd->idproduct}}" style="padding:1%; margin: 2% 0; border:1px solid; text-decoration:none; width:100%; text-align:center; color: red;"><i class="fa fa-trash" style="font-size: 20px;"></i>&nbsp Delete</a>
                                                <div class="modal fade" id="deleteModal{{$pd->idproduct}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$pd->idproduct}}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel{{$pd->idproduct}}">Konfirmasi untuk menghapus</h5>
                                                            </div>
                                                            <div class="modal-body">Apa kamu yakin menghapus produk ini?</div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <a href="{{ route('pd.del', ['id' => $pd->idproduct]) }}" class="btn btn-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>
                                </div>
                                <div class="modal-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div data-aos="fade-up" data-aos-delay="100" class="d-flex justify-content-center" style="margin-top:2%;">
                        {{ $pdc->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

<footer class="footer bg-dark text-white" style="margin-top :20px; background-color: #343a40;">
    <div class="container">
        <div class="row" style="padding: 20px;" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-4 justify-content-md-center" data-aos="fade-up" data-aos-delay="200">
                <img class="img-fluid mb-3" src="{{ asset('img/logo.png') }}" alt="Company Logo" style="border-radius: 50%; border: 2px solid white; width: 40%; padding: 10px; align-content: center;">
            </div>
            <div class="col-md-8" data-aos="fade-up" data-aos-delay="300">
                <div class="row" data-aos="fade-up" data-aos-delay="100" style="display: flex; align-items: center; justify-content: center;  text-align: justify; margin-bottom:5px;">
                    <p>Mari bersama majukan pangan negeri! <br> KuBertelur market & community</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <h5>Kontak Pusat </h5>
                        <p> <i class="fa-brands fa-whatsapp"></i> +62 8888-888-888</p>
                        <p> <i class="fa-regular fa-envelope"></i> KuBertelurIdn@company.com</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <h5>Sosial Media </h5>
                        <div class="d-flex flex-column">
                            <a href="/" class="text-white mb-2"><i class="fa-brands fa-instagram"></i> Youtube : KuBertelur</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"  style="display: flex; align-items: center; justify-content: center; height: 5vh; text-align: center;">
                <hr><p>&copy; <span id="year"></span>Copyright | KuBertelur</p>
            </div>
        </div>
    </div>
</footer>

<script>
    AOS.init();
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min; 
    } 
    document.addEventListener('DOMContentLoaded', function() {
        var counters = document.querySelectorAll('.purecounter');
        counters.forEach(function(counter) {
            var randomEndValue = getRandomInt(0, 100);
            counter.setAttribute('data-purecounter-end', randomEndValue); 
        });
        new PureCounter(); 
    });
</script>
</body>
</html>
