<!-- resources/views/layouts/header.blade.php -->

<header class="main-header">
  <nav class="navbar">
    <div class="nav-left">
      <a href="('/')">Home</a>
      <a href="('/about')">About</a>
    </div>

    <div class="nav-center">
      2301010020 - Abiem Sejati Ananta (GENAP)
    </div>

    <div class="nav-right">
      2301010055 - I Gede Geraldo Punia (GANJIL)
    </div>
  </nav>
</header>

<style>
  body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    background: url('{{ asset('images/background.jpg') }}') no-repeat center center fixed;
    background-size: cover;
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 10px 40px;
  }

  .navbar a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    font-weight: 500;
  }

  .navbar a:hover {
    text-decoration: underline;
  }

  .nav-center, .nav-right {
    font-size: 14px;
    font-weight: 500;
  }
</style>
