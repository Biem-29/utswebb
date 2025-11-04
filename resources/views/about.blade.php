<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman About</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: white;
      background: url('{{ asset('images/background.jpg') }}') no-repeat center center fixed;
      background-size: cover;
      backdrop-filter: blur(3px);
    }

    main {
      padding: 40px;
      text-align: center;
    }

    h2 {
      margin-top: 30px;
      font-weight: 700;
      color: white;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.7);
    }

    .profile-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 40px;
      margin-top: 40px;
    }

    .profile-card {
      background: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(12px);
      border-radius: 20px;
      width: 320px;
      padding: 30px 20px;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
    }

    .profile-image {
      width: 140px;
      height: 140px;
      border-radius: 50%;
      overflow: hidden;
      margin: 0 auto 20px;
      border: 4px solid rgba(255, 255, 255, 0.8);
    }

    .profile-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .profile-name {
      font-size: 18px;
      font-weight: 700;
      margin-bottom: 5px;
      letter-spacing: 0.5px;
    }

    .profile-nim {
      font-size: 14px;
      color: #d1d1d1;
      margin-bottom: 15px;
    }

    .bio-box {
      background: rgba(255, 255, 255, 0.15);
      border-radius: 10px;
      padding: 15px;
      font-size: 14px;
      color: #f2f2f2;
      line-height: 1.5;
      text-align: left;
    }

    .bio-box strong {
      display: block;
      color: #ffffff;
      font-size: 13px;
      margin-bottom: 5px;
      letter-spacing: 1px;
    }
  </style>
</head>
<body>

  {{-- Header --}}
  @include('layouts.header')

  {{-- Konten utama --}}
  <main>
    <h2>Halaman ini dibuat oleh: <span style="color: #aee6ff;">2301010055 - I Gede Geraldo Punia</span></h2>

    <div class="profile-container">
      {{-- Profil 1 --}}
      <div class="profile-card">
        <div class="profile-image">
          <img src="{{ asset('images/aranta.jpg') }}" alt="L. M. Aranta Thiar Elkanta Rizky Illahi">
        </div>
        <div class="profile-name">Abiem Sejati Ananta</div>
        <div class="profile-nim">2301010020</div>
        <div class="bio-box">
          <strong>BIO</strong>
          professional back end developer and occasionally AK47 bringer
        </div>
      </div>

      {{-- Profil 2 --}}
      <div class="profile-card">
        <div class="profile-image">
          <img src="{{ asset('images/arthur.jpg') }}" alt="Arthur Emanuel Dekko">
        </div>
        <div class="profile-name">I Gede Geraldo Punia</div>
        <div class="profile-nim">2301010055</div>
        <div class="bio-box">
          <strong>BIO</strong>
          Designing front-end is my passion sir 💖
        </div>
      </div>
    </div>
  </main>

</body>
</html>
