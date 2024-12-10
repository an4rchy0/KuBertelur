<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Community</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('komunitas.css') }}">
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
</head>

<body>
  <div class="container mt-4" style="margin-bottom:3%;">
    <!-- Header -->
    <div data-aos="fade-up" data-aos-delay="100" class="d-flex justify-content-between align-items-center p-3 text-white rounded" style="background-color:#000e86; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <div class="d-flex align-items-center">
        <img data-aos="fade-up" data-aos-delay="200" src="{{ asset('img/logo1.png') }}" height="40" style="background-color:#;" class="rounded-circle me-2" alt="Logo">
        <h4  data-aos="fade-up" data-aos-delay="300" class="m-0" style="color:#FFFFF;">Selamat Datang di Komunitas!</h4>
      </div>
      <div class="d-flex">
        <button data-aos="fade-up" data-aos-delay="400" class="btn me-2" style="background-color:#FFD43B;"><i class="fa-solid fa-house" style="color:#000e86;"></i></button>
        <button data-aos="fade-up" data-aos-delay="500" class="btn" style="background-color:#FFD43B;"><i class="fa-solid fa-bell" style="color:#000e86;"></i></button>
      </div>
    </div>

    <!-- Main Content -->
    <div data-aos="fade-up" data-aos-delay="1000" class="row mt-4" style="padding:2%; background-color: #f8f9fa; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
      <!-- Left Column -->
      <div class="col-lg-8">
        @foreach ($cmt as $c)
        <div class="card mb-4" data-aos="fade-up" data-aos-delay="100">
          <div data-aos="fade-up" data-aos-delay="100" class="card-header bg-primary text-white" style="padding:2%;">{{ $c->name }}</div>
          <div class="card-body" data-aos="fade-up" data-aos-delay="100">
            <p data-aos="fade-up" data-aos-delay="100"><a style="text-decoration: none; color:inherit;" href="{{ route('cmt.showII', [$userString, $c->idcmt]) }}"><strong>{{ $c->title }}</strong></a></p>
            <p data-aos="fade-up" data-aos-delay="100">{{ $c->descript }}</p>
            <p data-aos="fade-up" data-aos-delay="100"><strong>Tagar Tren: </strong>{{ $c->hastag }}</p>
          </div>
        </div>
        @endforeach
        <div class="d-flex justify-content-center"> 
          {{ $cmt->links('pagination::bootstrap-4') }}
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-4">
        <div class="card mb-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card-header bg-light" data-aos="fade-up" data-aos-delay="100">Diskusi Terkait</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" data-aos="fade-up" data-aos-delay="100">Tips Membesarkan Lobster</li>
            <li class="list-group-item" data-aos="fade-up" data-aos-delay="100">Resep Lobster Favorit</li>
            <li class="list-group-item"  data-aos="fade-up" data-aos-delay="100">Jenis Lobster Langka</li>
          </ul>
        </div>
        <div class="card mb-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card-header bg-light" data-aos="fade-up" data-aos-delay="100">Tag yang Sedang Tren</div>
          <div class="card-body">
            <span class="badge bg-primary" data-aos="fade-up" data-aos-delay="100">#lobster</span>
            <span class="badge bg-primary" data-aos="fade-up" data-aos-delay="100">#seafood</span>
          </div>
        </div>
        <div class="card mb-4" data-aos="fade-up" data-aos-delay="600">
          <div class="card-header bg-light" data-aos="fade-up" data-aos-delay="100">Komunitas yang Diikuti</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" data-aos="fade-up" data-aos-delay="100">Komunitas Pecinta Laut</li>
            <li class="list-group-item" data-aos="fade-up" data-aos-delay="100">Komunitas Resep Laut</li>
            <li class="list-group-item" data-aos="fade-up" data-aos-delay="100">Komunitas Lobster Lovers</li>
          </ul>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="600">
          <div class="card-header bg-light" data-aos="fade-up" data-aos-delay="100">Komunitas Populer</div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item" data-aos="fade-up" data-aos-delay="100">Komunitas Jual Beli Ikan Chana</li>
            <li class="list-group-item" data-aos="fade-up" data-aos-delay="100">Budidaya Lobster</li>
            <li class="list-group-item" data-aos="fade-up" data-aos-delay="100">UMKM Pasar Setiabudi</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>