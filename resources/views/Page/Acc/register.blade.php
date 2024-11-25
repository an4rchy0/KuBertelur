<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KuBertelur | Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Font Awesome Kit -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="font-roboto bg-gray-100">
<div class="center-element" style="margin:5%;">
    <div class="row justify-content-md-center">
        <div class="col-md-6" style="padding:3%; color:#4051E0;">
            <div class="row justify-content-md-center">
                <?php 
                    if (!function_exists('genid')) { 
                        function genid() { 
                            $hari = date('l'); 
                            $tanggal = date('d'); 
                            $bulan = date('M'); 
                            $blnangka = date('m'); 
                            $tahun = date('y'); 
                            $jam = date('H'); 
                            $minute = date('i'); 
                            $detik = date('s'); 
                            $haricut = substr($hari, 0, 1); 
                            $bulancut = substr($bulan, 0, 1); 
                            $hourcut = substr($jam, 0, 1); 
                            $minutecut = substr($minute, 0, 1); 
                            $detikcut = substr($detik, 0, 1); 
                            $kodejoin = "USPT-{$haricut}{$bulancut}{$hourcut}{$minutecut}{$detikcut}"; 
                            return $kodejoin;
                        }
                    }
                ?>
                <h3 style="text-align:center; padding:15px;">Buat Akun</h3>
                <form action="/UsReg" method="post" class="bg-body-tertiary rounded-3" style="padding:3%" enctype="multipart/form-data">
                    <fieldset>
                        {{csrf_field()}}
                        <div class="form-input mb-3">
                            <input type="text" class="form-control" name="usid" value="<?php echo genid(); ?>" hidden>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" required="required">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="usname" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required="required">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="usemail" placeholder="Email" aria-label="Recipient's username" aria-describedby="basic-addon2" required="required">
                            <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                        <div class="form-input mb-3">
                            <input type="text" class="form-control" name="tlp" placeholder="Nomor Telpon (+62..)" aria-label="Recipient's username" aria-describedby="basic-addon2" required="required">
                        </div>
                        <div class="form-input mb-3">
                            <input type="password" class="form-control" name="uspass" placeholder="Password" aria-label="Recipient's username" aria-describedby="basic-addon2" required="required">
                        </div>
                        <div class="form-input mb-3" style="margin-top:3%;">
                            <input type="submit" value="Daftar" class="btn btn-primary form-control">
                        </div>
                    </fieldset>
                </form>
                <center><hr>Sudah Memiliki Akun? <a href="/login">Login</a></center>
            </div>
        </div>
        <div class="col-md-6" style="background-color:#4051E0; padding:5%; color:white;">
            <h3>Perkenalkan, Kami KuBertelur!</h3><br>
            <p>Website pengembang usaha untuk UMKM di bidang perikanan. Beberapa fitur yang kami tawarkan di website ini adalah: <br><br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Jual beli produk & bibit ikan &nbsp; <br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Penyedia fitur klasifikasi air &nbsp; <br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Membangun Komunitas di bidang Perikanan &nbsp; <br>
            </p>
        </div>
    </div>
</div>
</body>
</html>