<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik Sehat Online - Berobat Mudah dari Rumah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1e40af;
            --primary-dark: #1e3a8a;
            --secondary-color: #06b6d4;
            --accent-color: #f59e0b;
            --text-dark: #111827;
            --text-light: #6b7280;
            --bg-light: #f9fafb;
            --white: #ffffff;
            --gradient-1: linear-gradient(135deg, #1e40af 0%, #4f46e5 100%);
            --gradient-2: linear-gradient(135deg, #f472b6 0%, #fb7185 100%);
            --gradient-3: linear-gradient(135deg, #22d3ee 0%, #06b6d4 100%);
            --shadow-light: 0 4px 6px -1px rgba(0, 0, 0, 0.08);
            --shadow-medium: 0 8px 16px -2px rgba(0, 0, 0, 0.1);
            --shadow-heavy: 0 20px 40px -8px rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.05;
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .shape {
            position: absolute;
            background: var(--gradient-1);
            border-radius: 30%;
            animation: float 8s ease-in-out infinite;
            box-shadow: var(--shadow-light);
        }

        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 15%;
            left: 15%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 140px;
            height: 140px;
            top: 65%;
            right: 15%;
            animation-delay: 2.5s;
        }

        .shape:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 15%;
            left: 25%;
            animation-delay: 5s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }

        /* Navbar Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: var(--shadow-light);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.9rem;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            font-weight: 500;
            margin-left: 30px;
            color: var(--text-dark) !important;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--gradient-1);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-1px);
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-1);
            color: var(--white);
            padding: 140px 0 90px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 120" fill="white" opacity="0.08"><path d="M0,0 L1000,0 L1000,80 Q500,120 0,80 Z"/></svg>');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 25px;
            animation: fadeInUp 1s ease;
            line-height: 1.1;
        }

        .hero-section .subtitle {
            font-size: 1.3rem;
            margin-bottom: 35px;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s;
            animation-fill-mode: both;
            font-weight: 300;
        }

        .hero-buttons {
            animation: fadeInUp 1s ease 0.4s;
            animation-fill-mode: both;
        }

        .btn-hero {
            padding: 14px 38px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 30px;
            margin: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-hero-primary {
            background: var(--white);
            color: var(--primary-dark);
            border: 2px solid var(--white);
            box-shadow: var(--shadow-light);
        }

        .btn-hero-primary:hover {
            background: var(--gradient-1);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        .btn-hero-outline {
            background: transparent;
            color: var(--white);
            margin: 5px;
            border: 2px solid rgba(255, 255, 255, 0.9);
        }

        .btn-hero-outline:hover {
            background: var(--white);
            color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-light);
        }

        /* Access Cards Section */
        .access-section {
            padding: 90px 0;
            background: var(--white);
            position: relative;
        }

        .access-section::before {
            content: '';
            position: absolute;
            top: -40px;
            left: 0;
            right: 0;
            height: 80px;
            background: var(--gradient-1);
            clip-path: polygon(0 40px, 100% 0, 100% 100%, 0 100%);
        }

        .access-card {
            background: var(--white);
            border-radius: 16px;
            padding: 35px 25px;
            text-align: center;
            box-shadow: var(--shadow-light);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .access-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-1);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .access-card:hover::before {
            transform: scaleX(1);
        }

        .access-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-medium);
        }

        .access-card:nth-child(1) .card-icon {
            background: var(--gradient-1);
        }

        .access-card:nth-child(2) .card-icon {
            background: var(--gradient-2);
        }

        .access-card:nth-child(3) .card-icon {
            background: var(--gradient-3);
        }

        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 1.8rem;
            color: var(--white);
            box-shadow: var(--shadow-light);
        }

        .access-card h4 {
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 12px;
            font-size: 1.3rem;
        }

        .access-card p {
            color: var(--text-light);
            margin-bottom: 25px;
            line-height: 1.5;
            font-size: 0.95rem;
        }

        .btn-access {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 10px 28px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-access:hover {
            background: var(--gradient-1);
            color: var(--white);
            transform: translateY(-2px);
            box-shadow: var(--shadow-light);
            text-decoration: none;
        }

        /* Features Section */
        .features-section {
            padding: 90px 0;
            background: var(--bg-light);
        }

        .feature-card {
            background: var(--white);
            text-align: center;
            padding: 35px 25px;
            border-radius: 16px;
            box-shadow: var(--shadow-light);
            margin-bottom: 25px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(30, 64, 175, 0.08), transparent);
            animation: rotate 10s linear infinite;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-medium);
        }

        .feature-card i {
            color: var(--primary-dark);
            margin-bottom: 20px;
            font-size: 2.8rem;
        }

        .feature-card h4 {
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 12px;
            font-size: 1.2rem;
        }

        .feature-card p {
            color: var(--text-light);
            line-height: 1.5;
            font-size: 0.95rem;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 90px 0;
            background: var(--white);
        }

        .testimonial-card {
            background: var(--bg-light);
            padding: 25px;
            border-radius: 16px;
            box-shadow: var(--shadow-light);
            margin-bottom: 25px;
            transition: all 0.4s ease;
            position: relative;
        }

        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: -8px;
            left: 15px;
            font-size: 3.5rem;
            color: var(--primary-dark);
            opacity: 0.2;
            font-family: serif;
        }

        .testimonial-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-medium);
        }

        .testimonial-card p {
            font-style: italic;
            color: var(--text-light);
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
            font-size: 0.95rem;
        }

        .testimonial-card h5 {
            font-weight: 600;
            color: var(--primary-dark);
            font-size: 1rem;
        }

        /* Contact Section */
        .contact-section {
            padding: 90px 0;
            background: var(--bg-light);
        }

        .contact-form {
            background: var(--white);
            padding: 40px;
            border-radius: 16px;
            box-shadow: var(--shadow-medium);
        }

        .contact-section .form-control {
            margin-bottom: 20px;
            border-radius: 12px;
            padding: 12px 18px;
            border: 1px solid #d1d5db;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .contact-section .form-control:focus {
            border-color: var(--primary-dark);
            box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
        }

        .btn-submit {
            background: var(--gradient-1);
            border: none;
            padding: 12px 35px;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 30px;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-medium);
        }

        /* Footer */
        footer {
            background: linear-gradient(135deg, #111827 0%, #1f2937 100%);
            color: white;
            padding: 40px 0 20px;
            text-align: center;
            position: relative;
        }

        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.15), transparent);
        }

        /* Section Titles */
        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background: var(--gradient-1);
            border-radius: 1.5px;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.2rem;
            }
            .hero-section .subtitle {
                font-size: 1.1rem;
            }
            .section-title {
                font-size: 1.8rem;
            }
            .btn-hero {
                padding: 10px 25px;
                font-size: 0.95rem;
            }
            .access-card {
                margin-bottom: 25px;
            }
            .contact-form {
                padding: 25px;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 100px 0 70px;
            }
            .hero-section h1 {
                font-size: 1.8rem;
            }
            .access-section {
                padding: 70px 0;
            }
            .features-section {
                padding: 70px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-heartbeat me-2"></i>Poliklinik Sehat Online
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#access">Akses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Revolusi Kesehatan Digital</h1>
                <p class="subtitle">Konsultasi medis profesional dari kenyamanan rumah Anda dengan teknologi terdepan</p>
                <div class="hero-buttons">
                    <a href="#access" class="btn btn-hero btn-hero-primary">Mulai Konsultasi</a>
                    <a href="#features" class="btn btn-hero btn-hero-outline">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Access Section -->
    <section class="access-section" id="access">
        <div class="container">
            <h2 class="text-center section-title">Pilih Akses Anda</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="access-card">
                        <div class="card-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4>Daftar Sebagai Pasien</h4>
                        <p>Bergabunglah dengan ribuan pasien yang telah merasakan kemudahan konsultasi online. Daftar sekarang dan dapatkan akses ke layanan kesehatan terbaik.</p>
                        <a href="/register" class="btn-access">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="access-card">
                        <div class="card-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Login Dokter</h4>
                        <p>Portal khusus untuk tenaga medis profesional. Akses dashboard dokter untuk mengelola jadwal konsultasi dan rekam medis pasien.</p>
                        <a href="/login" class="btn-access">Login Dokter</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="access-card">
                        <div class="card-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h4>Login Administrator</h4>
                        <p>Panel kontrol sistem untuk administrator. Kelola seluruh aspek platform, monitoring, dan konfigurasi sistem poliklinik online.</p>
                        <a href="/login" class="btn-access">Login Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="text-center section-title">Mengapa Memilih Kami?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-video"></i>
                        <h4>Konsultasi HD Video</h4>
                        <p>Berkomunikasi dengan dokter melalui video call berkualitas tinggi dengan teknologi enkripsi end-to-end untuk menjamin privasi Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-clock"></i>
                        <h4>Layanan 24/7</h4>
                        <p>Akses layanan kesehatan kapan saja, di mana saja. Tim medis kami siap melayani Anda setiap hari tanpa terkecuali.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h4>E-Prescription</h4>
                        <p>Terima resep digital langsung di smartphone Anda dan dapatkan obat melalui layanan antar apotek partner kami.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Data Terenkripsi</h4>
                        <p>Keamanan data medis Anda adalah prioritas utama dengan sistem enkripsi tingkat militer dan sertifikasi ISO 27001.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-mobile-alt"></i>
                        <h4>Aplikasi Mobile</h4>
                        <p>Nikmati pengalaman yang optimal dengan aplikasi mobile yang user-friendly dan dapat diakses di semua perangkat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-heartbeat"></i>
                        <h4>Monitoring Kesehatan</h4>
                        <p>Pantau kondisi kesehatan Anda secara real-time dengan integrasi perangkat wearable dan laporan kesehatan berkala.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="text-center section-title">Testimoni Pasien</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>Platform yang luar biasa! Konsultasi dengan dr. Sarah sangat membantu dan pelayanannya sangat profesional. Saya bisa mendapatkan diagnosis tanpa harus keluar rumah.</p>
                        <h5>Ani Kurniawati, 34 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>Sebagai pekerja yang sibuk, layanan ini sangat memudahkan saya. Bisa konsultasi di sela-sela waktu istirahat dan langsung dapat resep digital. Sangat efisien!</p>
                        <h5>Budi Santoso, 40 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>Fitur monitoring kesehatan sangat membantu saya mengontrol diabetes. Dokter bisa melihat data real-time dan memberikan saran yang tepat setiap saat.</p>
                        <h5>Citra Dewi, 28 tahun</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="text-center section-title">Hubungi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form action="/submit" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <input type="tel" class="form-control" placeholder="Nomor Telepon" required>
                            <textarea class="form-control" rows="5" placeholder="Pesan atau Pertanyaan Anda..." required></textarea>
                            <div class="text-center">
                                <button type="submit" class="btn btn-submit">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-3">
                        <i class="fas fa-heartbeat me-2"></i>
                        <strong>Poliklinik Sehat Online</strong>
                    </p>
                    <p>© 2025 Poliklinik Sehat Online. Semua hak dilindungi undang-undang.</p>
                    <p class="mt-3">
                        <small>Terdaftar dan diawasi oleh Kementerian Kesehatan Republik Indonesia</small>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.feature-card, .access-card, .testimonial-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });

        // Form submission animation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const submitBtn = form.querySelector('.btn-submit');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
                submitBtn.disabled = true;
                
                // Simulate form submission
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Terkirim!';
                    submitBtn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
                    
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        submitBtn.style.background = '';
                        form.reset();
                    }, 2000);
                }, 1500);
            });
        }

        // Add particle effect on card hover
        document.querySelectorAll('.access-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.01)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Dynamic gradient background
        let gradientAngle = 0;
        setInterval(() => {
            gradientAngle += 1;
            document.querySelector('.hero-section').style.background = 
                `linear-gradient(${gradientAngle}deg, #1e40af 0%, #4f46e5 100%)`;
        }, 100);
    </script>
</body>
</html>