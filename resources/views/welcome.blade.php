<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik Sehat Online - Kesehatan Praktis dari Rumah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to bottom, #f7f9fc, #dfe7f1);
            scroll-behavior: smooth;
            color: #2d3748;
        }
        /* Navbar Styling */
        .navbar {
            background: #ffffff;
            padding: 15px 0;
            border-bottom: 3px solid #6b7280;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 2.2rem;
            color: #d53f8c !important; /* Pink */
            text-transform: lowercase;
            letter-spacing: -1px;
        }
        .nav-link {
            color: #4a5568 !important;
            font-weight: 600;
            margin-left: 15px;
            padding: 8px 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .nav-link:hover {
            background-color: #fed7e2;
            color: #d53f8c !important;
        }
        .btn-login {
            background-color: #d53f8c;
            color: #fff;
            border-radius: 10px;
            padding: 8px 20px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }
        .btn-login:hover {
            background-color: #b83280;
        }
        /* Hero Section */
        .hero-section {
            background: linear-gradient(to right, rgba(213, 63, 140, 0.8), rgba(113, 128, 150, 0.8)), url('https://media.istockphoto.com/id/1225898954/vector/medical-clinic-building-simple-flat-illustration.jpg?s=612x612&w=0&k=20&c=JklgLCtm5NpwE5i6yN0JTIqp7vPlA7YB3RPYNIUHXlQ=');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            padding: 160px 0;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            text-transform: capitalize;
            animation: fadeIn 1.2s ease;
        }
        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 40px;
            max-width: 650px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
            animation: fadeIn 1.2s ease 0.4s;
            animation-fill-mode: both;
        }
        .btn-primary {
            background-color: #38b2ac; /* Teal */
            border: none;
            padding: 12px 50px;
            font-size: 1.3rem;
            font-weight: 600;
            border-radius: 10px;
            text-transform: uppercase;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #319795;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: #ffffff;
        }
        .feature-card {
            padding: 35px;
            border-radius: 15px;
            background: #edf2f7;
            margin-bottom: 30px;
            text-align: left;
            border: 1px solid #e2e8f0;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }
        .feature-card:hover {
            transform: scale(1.02);
            border-color: #d53f8c;
        }
        .feature-card i {
            color: #38b2ac;
            margin-bottom: 15px;
            font-size: 2.5rem;
        }
        .feature-card h4 {
            font-weight: 600;
            color: #2d3748;
            font-size: 1.5rem;
        }
        .feature-card p {
            color: #718096;
            font-size: 1rem;
        }
        /* Testimonials Section */
        .testimonials-section {
            padding: 100px 0;
            background: #f7fafc;
        }
        .testimonial-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            margin-bottom: 30px;
            border-left: 5px solid #d53f8c;
            transition: transform 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateX(10px);
        }
        .testimonial-card p {
            color: #4a5568;
            font-size: 1.1rem;
            font-weight: 400;
        }
        .testimonial-card h5 {
            font-weight: 600;
            color: #38b2ac;
            font-size: 1.2rem;
        }
        /* Contact Section */
        .contact-section {
            padding: 100px 0;
            background: #ffffff;
        }
        .contact-section .form-control {
            margin-bottom: 25px;
            border-radius: 10px;
            padding: 15px;
            border: 1px solid #cbd5e0;
            background: #f7f9fc;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }
        .contact-section .form-control:focus {
            border-color: #38b2ac;
            box-shadow: none;
        }
        /* Footer */
        footer {
            background: #2d3748;
            color: #e2e8f0;
            padding: 40px 0;
            text-align: center;
        }
        footer p {
            margin: 0;
            font-size: 1rem;
            font-weight: 300;
            letter-spacing: 0.5px;
        }
        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.8rem;
            }
            .hero-section p {
                font-size: 1.2rem;
            }
            .navbar-brand {
                font-size: 1.8rem;
            }
            .nav-link {
                margin-left: 0;
                margin-top: 10px;
            }
            .features-section, .testimonials-section, .contact-section {
                padding: 60px 0;
            }
            .feature-card, .testimonial-card {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">poliklinik sehat online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Ulasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="btn btn-login">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <h1>Kesehatan Praktis di Tangan Anda - Poliklinik</h1>
            <p>Konsultasi dokter secara online, kapan saja, dari kenyamanan rumah Anda.</p>
            <a href="#contact" class="btn btn-primary">Jadwalkan Konsultasi</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="text-center mb-5">Keunggulan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-video fa-3x mb-3"></i>
                        <h4>Konsultasi Virtual</h4>
                        <p>Berbual dengan dokter berpengalaman melalui panggilan video dari rumah.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-calendar-check fa-3x mb-3"></i>
                        <h4>Jadwal Sesuai Keinginan</h4>
                        <p>Atur waktu konsultasi yang cocok dengan rutinitas Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-prescription fa-3x mb-3"></i>
                        <h4>Resep Elektronik</h4>
                        <p>Terima resep obat digital langsung di ponsel Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="text-center mb-5">Pendapat Pengguna Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Layanan konsultasi online ini sangat memudahkan dan efisien, Dokter sangat ramah dan prosesnya cepat."</p>
                        <h5>- Tuti, 39 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Sangat praktis, saya bisa menjadwalkan konsultasi kapan saja, cocok untuk bapak sibuk seperti saya."</p>
                        <h5>- Boni, 42 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Diberikan resep dalam bentuk digital, sangat efisien dan hemat waktu!"</p>
                        <h5>- Laras, 23 tahun</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="text-center mb-5">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="/submit" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Alamat Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="4" placeholder="Pesan atau Pertanyaan Anda" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© 2025 Poliklinik Sehat Online. Hak cipta dilindungi.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>