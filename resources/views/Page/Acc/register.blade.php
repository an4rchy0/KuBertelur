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
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
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

<div class="center-element" style="margin:5%;">
    <div class="row justify-content-md-center">
        <div class="col-md-6" style="background-color:#4051E0; padding:8%; color:white;">
            <h3>Perkenalkan, Kami KuBertelur!</h3><br>
            <p>Website pengembang usaha untuk UMKM di bidang perikanan. Beberapa fitur yang kami tawarkan di website ini adalah: <br><br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Jual beli produk & bibit ikan &nbsp; <br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Penyedia fitur klasifikasi air &nbsp; <br>
                <i class="fa-regular fa-circle-dot fa-fw"></i>&nbsp; Membangun Komunitas di bidang Perikanan &nbsp; <br>
            </p>
        </div>
        <div class="col-md-6" style="padding:3%; color:#4051E0;">
            <div class="row justify-content-md-center">
                <h3>Halo, Selamat Datang.</h3><br><p>Masuk ke akunmu, yuk</p>
                <form action="/PrdStore" method="post" class="bg-body-tertiary rounded-3" style="padding:5%" enctype="multipart/form-data">
                    <fieldset>
                        {{csrf_field()}}
                        <div class="form-group">
                            Username     : <input type="text" class="form-control" name="username" required="required">	
                        </div>
                        <div class="form-group">
                            Password    : <input type="text" class="form-control" name="password" required="required">
                        </div>
                        <div class="form-group">
                            <a href="">Lupa Password?</a>
                        </div>
                        <div class="form-group" style="margin-top:3%;">
                            <input type="submit" value="Simpan Data" class="btn btn-primary form-control">
                        </div>
                    </fieldset>
                </form>
            </div>
            <center><hr><p>Belum Punya Akun? <a href="">Daftar</a></p></center>
        </div>
    </div>
</div>
</body>
</html>