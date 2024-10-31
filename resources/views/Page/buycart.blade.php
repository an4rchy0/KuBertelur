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
                        <a class="nav-link" href="/about" style="color: #FFFFFF;">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center space-x-4">
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

    <div class="container">  
        <div class="container-fluid">
            <div class="row" style="margin-top: 5%">
                <div class="col-md-6">
                    <img src="{{asset('storage/photo/'.$content->prdpht)}}" class="card-img-top" alt="Product">
                    <div class="row"><p>{{$content->prddescript}}</p></div>
                </div>
                <div class="col-md-6">
                    <span style="align-text:center;" class="d-flex">
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                        <i class="fa-solid fa-star fa-bounce" style="color: #dbb014;"></i>
                    </span>
                    <p>Recommended (KuBertelur) <br> 
                    <h1>{{$content->prdname}}</h1> <br> 
                    Avaibility : {{ $content->prdqty > 0 ? 'Available' : 'Not Available' }}<br> 
                    Stok : {{$content->prdqty}}<br> 
                    Harga : {{$content->prdprice}} <span style="padding:5px 2%; background-color: #e6c347; border-radius:12px; margin-left:2%;">20% Off</span><br>
                    <div class="row" style="">
                        <form action="{{ route('pslogin') }}" method="post" class="bg-body-tertiary rounded-3" style="padding:2%" enctype="multipart/form-data">
                            <fieldset>
                                {{csrf_field()}}
                                <div class="form-group form-inline">
                                    Kuantitas : 
                                    <input type="password" class="form-control" name="password" required="required" style="margin-right: 10px;">
                                    <input type="button" class="form-control" name="button">
                                </div>
                                <div class="form-group" style="margin-top:3%;">
                                    <input type="submit" value="Simpan Data" class="btn btn-primary form-control">
                                </div>
                            </fieldset>
                        </form>
                    </div>
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
