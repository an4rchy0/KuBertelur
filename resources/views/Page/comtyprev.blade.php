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
    <style>
        .hidden { display: none; }
    </style>
</head>

<body>
  <div class="container mt-4" style="margin-bottom:3%;">
    <!-- Header -->
    <div data-aos="fade-up" data-aos-delay="100" class="d-flex justify-content-between align-items-center p-3 text-white rounded" style="background-color:#000e86; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="d-flex align-items-center">
            <a href="/"><img data-aos="fade-up" data-aos-delay="200" src="{{ asset('img/logo1.png') }}" height="40" class="rounded-circle me-2" alt="Logo"></a>
            <h4 data-aos="fade-up" data-aos-delay="300" class="m-0" style="color:#FFFFFF;">Selamat Datang di Komunitas!</h4>
        </div>
        <div class="d-flex">
            <a data-aos="fade-up" data-aos-delay="400" href="{{ route('cmt.showI', $myid) }}" class="btn me-2" style="background-color:#FFD43B;">
                <i class="fa-solid fa-house" style="color:#000e86;"></i>
            </a>
            <a data-aos="fade-up" data-aos-delay="500" href="/profile" class="btn" style="background-color:#FFD43B;">
                <i class="fa-solid fa-bell" style="color:#000e86; height:20px; width:20px;"></i>
            </a>
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
            <p data-aos="fade-up" data-aos-delay="100"><strong>{{ $c->title }}</strong></p>
            <p data-aos="fade-up" data-aos-delay="100">{{ $c->descript }}</p>
            <p data-aos="fade-up" data-aos-delay="100"><strong>Tagar Tren: </strong>{{ $c->hastag }}</p>
          </div>
        </div>
        @endforeach

        <!-- Post Section -->
        <div class="card mb-4">
          <div class="card-body">
            <ul class="nav nav-tabs mb-3" id="postTabs" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="posts-tab" data-bs-toggle="tab" data-bs-target="#posts"
                  type="button" role="tab" aria-controls="posts" aria-selected="true">
                  <i class="bi bi-file-earmark-text"></i> Postingan
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="discussion-tab" data-bs-toggle="tab" data-bs-target="#discussion"
                  type="button" role="tab" aria-controls="discussion" aria-selected="false">
                  <i class="bi bi-chat-dots"></i> Diskusi
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="announcement-tab" data-bs-toggle="tab" data-bs-target="#announcement"
                  type="button" role="tab" aria-controls="announcement" aria-selected="false">
                  <i class="bi bi-megaphone"></i> Pengumuman Komunitas
                </button>
              </li>
            </ul>
            <div class="tab-content" id="postTabsContent">
              <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                <div class="card mb-4">
                    <div class="card-body" id="1">
                        <div class="d-flex">
                            <img id="randomImg" src="{{asset('img/P1.png')}}" class="rounded-circle me-3" alt="User">
                            <div>
                                <h6 id="randomName">Nopal <small class="text-muted">• <span id="randomHour">2</span> jam yang lalu</small></h6>
                                <p>Kemarin sempet main di daerah kawasan Jakarta Utara buat research beberapa jenis lobster yang ada disana. surprisingly saya ketemu banyak sekali jenis-jenis lobster yang punya harga mahal. Saya sempat nyobain juga resto yang ada di Lobster Fam Jakut, meskipun agak pricey karna jenis lobsternya Lobster Mutiara, tapi menurut saya dengan harga segitu bener-bener worth every penny! Take a seat buat ikut cobain juga ya kalau sempat main kesana!</p>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-primary">❤️ &nbsp <span style="" data-purecounter-start="0" data-purecounter-duration="1" class="purecounter"></span>&nbsp</span></button>
                                    <button id="commentBtn1" class="btn btn-sm btn-outline-secondary">💬 &nbsp Komentar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Afk-->
                    <div class="card-body hidden" style="background-color:#F9F9F9;" id="2">
                        <div class="d-flex">
                            <img id="randomImg2" src="{{asset('img/P1.png')}}" class="rounded-circle me-3" alt="User">
                            <div>
                                <h6 id="us">Pengguna Baru<small class="text-muted">• <span id="usII">Baru</span> saja</small></h6>
                                <p id="userComment">text</p>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-primary">❤️ 0</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 hidden" style="padding:2%;" id="formp1">
                        <h6>Tinggalkan Tanggapan:</h6>
                        <form id="form1">
                            <div class="mb-3">
                                <textarea id="comment1" class="form-control" rows="3" placeholder="Tulis tanggapan Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                        </form>
                    </div>
                    <div class="mt-3" style="padding:2%;" id="formp2">
                        <h6>Berikan post anda:</h6>
                        <form id="form2">
                            <div class="mb-3">
                                <textarea id="comment2" class="form-control" rows="3" placeholder="Tulis tanggapan Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                        </form>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="discussion" role="tabpanel" aria-labelledby="discussion-tab">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="d-flex" id="1b">
                      <img id="randomImgII" src="{{asset('img/P1.png')}}" class="rounded-circle me-3" alt="User">
                      <div>
                        <h6 id="randomNameII">Nopal <small class="text-muted">• <span id="randomHourII">2</span> jam yang lalu</small></h6>
                        <p>Bro, jadi bulan ini saya boncos banget buat urusin lobster saya. Kira-kira biar nggak tekor, ada tips nggak sih buat ngatur biaya budidaya lobster biar tetap efisien? Sebelumnya makasih ya bro, thank you udah jawab.</p>
                        <div class="mt-2">
                          <button class="btn btn-sm btn-outline-primary">❤️ <span data-purecounter-start="0" data-purecounter-duration="1" class="purecounter"></span></button>
                          <button id="commentBtn1B" class="btn btn-sm btn-outline-secondary">💬 &nbsp Komentar</button>
                        </div>
                      </div>
                    </div>
                    <!--Afk-->
                    <div class="card-body hidden" style="background-color:#F9F9F9;" id="2b">
                        <div class="d-flex">
                            <img id="randomImg2" src="{{asset('img/P1.png')}}" class="rounded-circle me-3" alt="User">
                            <div>
                                <h6 id="us">Pengguna Baru<small class="text-muted">• <span id="usII">Baru</span> saja</small></h6>
                                <p id="userCommentb">text</p>
                                <div class="mt-2">
                                    <button class="btn btn-sm btn-outline-primary">❤️ 0</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 hidden" style="padding:2%;" id="formp1b">
                        <h6>Tinggalkan Tanggapan:</h6>
                        <form id="form1b">
                            <div class="mb-3">
                                <textarea id="comment1b" class="form-control" rows="3" placeholder="Tulis tanggapan Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                        </form>
                    </div>
                    <div class="mt-3" style="padding:2%;" id="formp2b">
                        <h6>Berikan post anda:</h6>
                        <form id="form2">
                            <div class="mb-3">
                                <textarea id="comment2b" class="form-control" rows="3" placeholder="Tulis tanggapan Anda di sini..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                        </form>
                    </div>
                  </div>
                </div>                
              </div>      
              <div class="tab-pane fade" id="announcement" role="tabpanel" aria-labelledby="announcement-tab">
                <div class="container mt-4">
                  <div class="card">
                    <div class="card-header bg-primary text-white">
                      <h5 class="m-0">Peraturan Komunitas Lobster Gang</h5>
                    </div>
                    <div class="card-body">
                      <p><strong>Halo, Lobster Lovers! 🦞</strong></p>
                      <p>
                        Untuk menjaga komunitas kita tetap aman, nyaman, dan menyenangkan bagi semua anggota, kami ingin mengingatkan beberapa peraturan komunitas yang harus kita ikuti bersama. Mohon perhatikan hal-hal berikut ini:
                      </p>
                      <ol>
                        <li>
                          <strong>Saling Menghormati:</strong> Jangan ada ujaran kebencian, diskriminasi, atau komentar yang menyinggung anggota lain. Hormati pendapat dan pengalaman setiap orang.
                        </li>
                        <li>
                          <strong>Konten Positif dan Informasi Bermanfaat:</strong> Usahakan untuk membagikan informasi yang relevan dan berguna bagi para pecinta lobster, baik itu tentang perawatan, resep, hingga tips membeli lobster yang berkualitas.
                        </li>
                        <li>
                          <strong>Tidak Menjual Produk:</strong> Dilarang melakukan jual-beli produk tanpa izin dari admin. Jika ingin menjual produk terkait lobster, silakan hubungi admin terlebih dahulu untuk mendapatkan izin.
                        </li>
                        <li>
                          <strong>Foto dan Video yang Sesuai:</strong> Bagikan foto dan video yang berkaitan dengan lobster. Pastikan kontennya ramah untuk semua anggota.
                        </li>
                        <li>
                          <strong>Larangan Spam:</strong> Dilarang mengirimkan spam, link tidak relevan, atau promosi pribadi. Mari kita jaga feed komunitas ini tetap bermanfaat dan positif.
                        </li>
                        <li>
                          <strong>Bertanggung Jawab:</strong> Setiap anggota bertanggung jawab atas konten yang dibagikan. Jika ada yang melanggar aturan, admin berhak menghapus konten dan memberikan teguran.
                        </li>
                      </ol>
                      <p>
                        Jika ada pertanyaan atau saran untuk komunitas, jangan ragu untuk menghubungi admin atau moderator. Terima kasih sudah menjadi bagian dari komunitas ini dan mari kita jaga atmosfer positifnya!
                      </p>
                      <p><strong>Salam hangat,</strong><br>Moderator</p>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
          </div>
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
    // Array of image URLs
    const images = [
            "{{ asset('img/P1.png') }}",
            "{{ asset('img/P2.png') }}",
            "{{ asset('img/P4.png') }}"
        ];
        const names = ['Didi', 'Genta', 'Nofal'];
        const randomImage = images[Math.floor(Math.random() * images.length)];
        const randomName = names[Math.floor(Math.random() * names.length)];
        const randomHour = Math.floor(Math.random() * 3) + 1;
        const randomImageII = images[Math.floor(Math.random() * images.length)];
        const randomNameII = names[Math.floor(Math.random() * names.length)];
        const randomHourII = Math.floor(Math.random() * 3) + 1;
        document.getElementById('randomImg').src = randomImage;
        document.getElementById('randomName').innerHTML = `${randomName} <small class="text-muted">• ${randomHour} jam yang lalu</small>`;
        document.getElementById('randomImgII').src = randomImageII;
        document.getElementById('randomNameII').innerHTML = `${randomNameII} <small class="text-muted">• ${randomHourII} jam yang lalu</small>`;
        //comment
        document.addEventListener('DOMContentLoaded', (event) => {
            document.getElementById('formp1').classList.add('hidden');
            document.getElementById('formp1b').classList.add('hidden');

            document.getElementById('commentBtn1').addEventListener('click', () => {
                document.getElementById('formp1').classList.remove('hidden');
                document.getElementById('formp2').classList.add('hidden');
            });
            document.getElementById('commentBtn1B').addEventListener('click', () => {
                document.getElementById('formp1b').classList.remove('hidden');
                document.getElementById('formp2b').classList.add('hidden');
            });
            
            function getRandomNumber() { 
              const numbers = [1, 2, 4]; 
              const randomIndex = Math.floor(Math.random() * numbers.length); 
              return numbers[randomIndex]; 
            }
            const randomImageNumber = getRandomNumber();
            const imageUrl = `{{ asset('img/P') }}${randomImageNumber}.png`;

            document.getElementById('form1').addEventListener('submit', (e) => {
                e.preventDefault();
                const comment = document.getElementById('comment1').value;
                document.getElementById('userComment').innerText = comment;
                const newComment = document.createElement('div');
                newComment.classList.add('card-body', 'mb-4');
                newComment.innerHTML = `
                    <div class="d-flex" style="background-color:#F7F7F7; padding:2%;">
                        <div> <img src="${imageUrl}" class="rounded-circle me-3" alt="User"> </div>
                        <div>
                            <h6>Pengguna Baru <small class="text-muted">• Baru saja</small></h6>
                            <p>${comment}</p>
                            <div class="mt-2">
                                <button class="btn btn-sm btn-outline-primary">❤️ 0</button>
                            </div>
                        </div>
                    </div>
                `;
                document.getElementById('1').insertAdjacentElement('afterend', newComment);
                document.getElementById('formp1').classList.add('hidden');
                document.getElementById('comment1').value = '';
                document.getElementById('formp2').classList.remove('hidden');
                //document.getElementById('formp1').classList.add('hidden');
            });
            document.getElementById('form1b').addEventListener('submit', (e) => {
                e.preventDefault();
                const comment = document.getElementById('comment1b').value;
                document.getElementById('comment1b').innerText = comment;
                const newComment = document.createElement('div');
                newComment.classList.add('card-body', 'mb-4');
                newComment.innerHTML = `
                    <div class="d-flex" style="background-color:#F7F7F7; padding:2%;">
                        <div> <img src="${imageUrl}" class="rounded-circle me-3" alt="User"> </div>
                        <div>
                            <h6>Pengguna Baru <small class="text-muted">• Baru saja</small></h6>
                            <p>${comment}</p>
                            <div class="mt-2">
                                <button class="btn btn-sm btn-outline-primary">❤️ 0</button>
                            </div>
                        </div>
                    </div>
                `;
                document.getElementById('1b').insertAdjacentElement('afterend', newComment);
                document.getElementById('formp1b').classList.add('hidden');
                document.getElementById('comment1b').value = '';
                document.getElementById('formp2b').classList.remove('hidden');
                //document.getElementById('formp1').classList.add('hidden');
            });
            document.getElementById('form2').addEventListener('submit', (e) => {
                e.preventDefault();
                const comment = document.getElementById('comment2').value;
                const newComment = document.createElement('div');
                newComment.classList.add('card-body', 'mb-4');
                newComment.innerHTML = `
                    <div class="d-flex">
                        <div> <img src="${imageUrl}" class="rounded-circle me-3" alt="User"> </div>
                        <div>
                            <h6>Pengguna Baru <small class="text-muted">• Baru saja</small></h6>
                            <p>${comment}</p>
                            <div class="mt-2">
                                <button class="btn btn-sm btn-outline-primary">❤️ 0</button>
                                <button id="commentBtn1" class="btn btn-sm btn-outline-secondary">💬 &nbsp Komentar</button>
                            </div>
                        </div>
                    </div>
                `;
                document.getElementById('2').insertAdjacentElement('afterend', newComment);
                document.getElementById('formp2').classList.remove('hidden');
                document.getElementById('comment2').value = '';
            });
            document.getElementById('formp2b').addEventListener('submit', (e) => {
                e.preventDefault();
                const comment = document.getElementById('comment2b').value;
                const newComment = document.createElement('div');
                newComment.classList.add('card-body', 'mb-4');
                newComment.innerHTML = `
                    <div class="d-flex">
                        <div> <img src="${imageUrl}" class="rounded-circle me-3" alt="User"> </div>
                        <div>
                            <h6>Pengguna Baru <small class="text-muted">• Baru saja</small></h6>
                            <p>${comment}</p>
                            <div class="mt-2">
                                <button class="btn btn-sm btn-outline-primary">❤️ 0</button>
                                <button id="commentBtn1b" class="btn btn-sm btn-outline-secondary">💬 &nbsp Komentar</button>
                            </div>
                        </div>
                    </div>
                `;
                document.getElementById('2b').insertAdjacentElement('afterend', newComment);
                document.getElementById('formp2b').classList.remove('hidden');
                document.getElementById('comment2b').value = '';
            });
        });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>