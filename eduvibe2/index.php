
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HTML - EduVibe Belajar HTML Seru</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #06132a;
      --accent: #00c3ff;
      --text: #f5fbff;
      --card: rgba(255, 255, 255, 0.08);
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: "Inter", sans-serif;
      background: radial-gradient(circle at top, #0b3c67 0%, #06132a 100%);
      color: var(--text);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      scroll-behavior: smooth;
    }

    /* Navigasi */
    header {
      padding: 20px 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .brand { font-size: 1.5rem; font-weight: 700; color: var(--accent); }

    nav a {
      color: var(--text);
      text-decoration: none;
      margin-left: 25px;
      font-weight: 500;
      transition: 0.3s;
    }
    nav a:hover { color: var(--accent); }

    /* Hero Section */
    .hero {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 40px 20px;
    }

    .dolphin-icon {
      font-size: 80px;
      margin-bottom: 20px;
      animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-15px); }
    }

    .hero h1 { font-size: clamp(2rem, 5vw, 3rem); margin-bottom: 10px; }
    .hero p { max-width: 600px; font-size: 1.1rem; color: rgba(255,255,255,0.8); margin-bottom: 30px; }

    /* Box Daftar Langsung */
    .start-box {
      background: var(--card);
      padding: 30px;
      border-radius: 30px;
      border: 1px solid rgba(255,255,255,0.1);
      box-shadow: 0 20px 40px rgba(0,0,0,0.3);
      max-width: 400px;
      width: 100%;
    }

    .start-box h3 { margin-bottom: 20px; color: var(--accent); }

    /* Style Form Sederhana */
    .btn-main {
      background: var(--accent);
      color: #06132a;
      padding: 15px;
      border-radius: 15px;
      text-decoration: none;
      font-weight: 700;
      display: inline-block;
      width: 100%;
      transition: 0.3s;
      border: none;
      cursor: pointer;
      font-size: 1rem;
    }

    .btn-main:hover { transform: scale(1.03); background: #00e5ff; }

    .login-link {
      display: block;
      margin-top: 15px;
      font-size: 0.85rem;
      color: rgba(255,255,255,0.6);
      text-decoration: none;
    }
    .login-link b { color: var(--accent); }

    /* About Section */
    .about { padding: 80px 5%; background: rgba(0,0,0,0.2); text-align: center; }

    footer { padding: 20px; text-align: center; font-size: 0.8rem; opacity: 0.5; }
  </style>
</head>
<body>

  <header>
    <div class="brand">EduVibe</div>
    <nav>
      <a href="#about">Tentang Kami</a>
      <a href="materi232.php">Materi</a>
    </nav>
  </header>

  <main class="hero">
    <div class="dolphin-icon">🐬</div>
    
    <h1>Halo, Sahabat Edu!</h1>
    <p>Belajar buat website jadi lebih santai, seru, dan interaktif bareng Duvi.</p>

    <div class="start-box">
      <h3>Siap Menyelam?</h3>
      <p style="font-size: 0.9rem; margin-bottom: 20px; opacity: 0.8;">Daftar akun gratis untuk akses materi lengkap.</p>
      
      <a href="register.php" class="btn-main">Daftar Sekarang</a>
      
      <a href="login.php" class="login-link">Sudah punya akun? <b>Masuk di sini</b></a>
    </div>
  </main>

  <section id="about" class="about">
    <h2>Tentang Kami</h2>
    <p style="max-width: 800px; margin: 20px auto; line-height: 1.6; opacity: 0.8;">
      EduVibe hadir untuk mematahkan anggapan kalau coding itu susah. Kami menemani perjalananmu dari nol sampai mahir membuat struktur web sendiri dengan visual yang memanjakan mata, mari kita mulai disini di EduVibe HTML
    </p>
  </section>

  <footer>
    &copy; 2026 EduVibe HTML - Menyelam dalam Kreativitas.
  </footer>

</body>
</html>