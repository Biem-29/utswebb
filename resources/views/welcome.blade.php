<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Home</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: white;
      background: url('{{ asset('images/background.jpg') }}') no-repeat center center fixed;
      background-size: cover;
    }

    main {
      padding: 40px;
      text-align: center;
    }

    h2 {
      margin-top: 30px;
      font-weight: 600;
      color: white;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.8);
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
      margin-top: 30px;
      justify-items: center;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
      width: 100%;
      max-width: 350px;
    }

    .gallery-item img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.05);
    }

    .caption {
      position: absolute;
      bottom: 0;
      width: 100%;
      background: rgba(0, 0, 0, 0.6);
      color: white;
      padding: 10px;
      font-weight: 500;
      font-size: 15px;
      text-align: left;
    }
  </style>
</head>
<body>

  {{-- Header --}}
  @include('layouts.header')

  {{-- Konten utama --}}
  <main>
    <h2>Halaman ini dibuat oleh 2301010020 - Abiem Sejati Ananta</h2>

    <div class="gallery">
      <div class="gallery-item">
        <img src="{{ asset('images/acropolis.jpg') }}" alt="Acropolis, Yunani">
        <div class="caption">Acropolis, Yunani</div>
      </div>

      <div class="gallery-item">
        <img src="{{ asset('images/shibuya.jpg') }}" alt="Shibuya, Jepang">
        <div class="caption">Shibuya, Jepang</div>
      </div>

      <div class="gallery-item">
        <img src="{{ asset('images/cappadocia.jpg') }}" alt="Cappadocia, Turki">
        <div class="caption">Cappadocia, Mudi Bale</div>
      </div>

      <div class="gallery-item">
        <img src="{{ asset('images/giza.jpg') }}" alt="Giza, Mesir">
        <div class="caption">Giza, Lotim</div>
      </div>

      <div class="gallery-item">
        <img src="{{ asset('images/garuda.jpg') }}" alt="Garuda Wisnu Kencana">
        <div class="caption">Garuda Wisnu Kencana, Bali</div>
      </div>

      <div class="gallery-item">
        <img src="{{ asset('images/huayana.jpg') }}" alt="Huayana, Peru">
        <div class="caption">Huayana, Peru</div>
      </div>

      <div class="gallery-item">
        <img src="{{ asset('images/jumeirah.jpg') }}" alt="Jumeirah, Abu Dhabi">
        <div class="caption">Jumeirah, Abu Dhabi</div>
      </div>

      <div class="gallery-item">
        <img src="{{ asset('images/newyork.jpg') }}" alt="New York, US">
        <div class="caption">New York, US</div>
      </div>

      <div class="gallery-item">
        <img src="{{ asset('images/niagara.jpg') }}" alt="Niagara, Kanada">
        <div class="caption">Niagara, Kanada (karangan anak narmada)</div>
      </div>
    </div>
  </main>

</body>
</html>
