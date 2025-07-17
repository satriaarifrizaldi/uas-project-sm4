<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fasilitas - SMANDUTI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 8rem 1rem 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }
        
        .hero-section p {
            font-size: 1.3rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }
        
        .hero-bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
            z-index: 0;
        }
        
        .facilities-container {
            max-width: 1200px;
            margin: -4rem auto 5rem;
            padding: 0 1rem;
            position: relative;
            z-index: 2;
        }
        
        .facilities-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            padding: 3rem;
            margin-bottom: 3rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            position: relative;
            display: inline-block;
            padding-bottom: 1rem;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--secondary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        
        .facility-categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .category-btn {
            padding: 0.5rem 1.5rem;
            background: white;
            border: 1px solid var(--secondary);
            color: var(--secondary);
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }
        
        .category-btn:hover, .category-btn.active {
            background: var(--secondary);
            color: white;
        }
        
        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .facility-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .facility-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .facility-img {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .facility-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .facility-card:hover .facility-img img {
            transform: scale(1.1);
        }
        
        .facility-content {
            padding: 1.5rem;
        }
        
        .facility-category {
            display: inline-block;
            background: var(--light);
            color: var(--secondary);
            padding: 0.3rem 0.8rem;
            border-radius: 30px;
            font-size: 0.8rem;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }
        
        .facility-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .facility-desc {
            color: #555;
            margin-bottom: 1rem;
        }
        
        .facility-stats {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #eee;
            padding-top: 1rem;
            margin-top: 1rem;
        }
        
        .stat {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            color: #7f8c8d;
            font-size: 0.9rem;
        }
        
        .stat i {
            color: var(--accent);
        }
        
        .highlight-section {
            background: var(--light);
            padding: 4rem 1rem;
            margin: 3rem 0;
            clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%);
        }
        
        .highlight-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .highlight-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .highlight-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .highlight-card:hover {
            transform: translateY(-10px);
        }
        
        .highlight-icon {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 1rem;
        }
        
        .highlight-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }
        
        .highlight-text {
            color: #555;
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 6rem 1rem 4rem;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section p {
                font-size: 1.1rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .facilities-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="hero-bg-pattern"></div>
        <div class="hero-content">
            <h1>Fasilitas SMANDUTI</h1>
            <p>Mendukung proses pembelajaran dengan sarana dan prasarana modern yang lengkap dan berkualitas tinggi</p>
        </div>
    </section>

    {{-- Main Facilities Section --}}
    <section class="facilities-container">
        <div class="facilities-card">
            <div class="section-title">
                <h2>Fasilitas Unggulan Kami</h2>
            </div>
            
            <div class="facility-categories">
                <button class="category-btn active" data-category="all">Semua</button>
                <button class="category-btn" data-category="academic">Akademik</button>
                <button class="category-btn" data-category="sports">Olahraga</button>
                <button class="category-btn" data-category="arts">Seni & Budaya</button>
                <button class="category-btn" data-category="support">Pendukung</button>
            </div>
            
            <div class="facilities-grid">
                <!-- Facility 1 -->
                <div class="facility-card" data-category="academic">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="Laboratorium Komputer">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Akademik</span>
                        <h3 class="facility-title">Laboratorium Komputer</h3>
                        <p class="facility-desc">4 ruang lab komputer dengan 120 unit PC terkini, jaringan internet cepat, dan software lengkap untuk pembelajaran TI dan multimedia.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-desktop"></i> 120 PC
                            </div>
                            <div class="stat">
                                <i class="fas fa-wifi"></i> WiFi 1Gbps
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 2 -->
                <div class="facility-card" data-category="academic">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Laboratorium Sains">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Akademik</span>
                        <h3 class="facility-title">Laboratorium Sains Terpadu</h3>
                        <p class="facility-desc">Fasilitas lengkap untuk praktikum fisika, kimia, dan biologi dengan alat-alat modern dan bahan praktikum yang memadai.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-flask"></i> 3 Lab
                            </div>
                            <div class="stat">
                                <i class="fas fa-user-graduate"></i> Kapasitas 40
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 3 -->
                <div class="facility-card" data-category="sports">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1547347298-4074fc3086f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Lapangan Basket">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Olahraga</span>
                        <h3 class="facility-title">Lapangan Basket Standar FIBA</h3>
                        <p class="facility-desc">2 lapangan basket indoor dengan permukaan vinyl berkualitas tinggi dan sistem pencahayaan profesional.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-basketball-ball"></i> 2 Lapangan
                            </div>
                            <div class="stat">
                                <i class="fas fa-ruler-combined"></i> FIBA Standard
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 4 -->
                <div class="facility-card" data-category="arts">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1571772996211-2f02c9727629?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Teater Sekolah">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Seni & Budaya</span>
                        <h3 class="facility-title">Teater Sekolah</h3>
                        <p class="facility-desc">Auditorium berkapasitas 300 orang dengan sistem akustik dan pencahayaan profesional untuk pertunjukan seni.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-theater-masks"></i> 300 Kursi
                            </div>
                            <div class="stat">
                                <i class="fas fa-volume-up"></i> Akustik Premium
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 5 -->
                <div class="facility-card" data-category="academic">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1588072432906-62bc38308136?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Perpustakaan Digital">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Akademik</span>
                        <h3 class="facility-title">Perpustakaan Digital</h3>
                        <p class="facility-desc">Koleksi 15.000+ buku fisik dan 30.000+ e-book dengan ruang baca yang nyaman dan area diskusi kelompok.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-book"></i> 15K+ Buku
                            </div>
                            <div class="stat">
                                <i class="fas fa-tablet-alt"></i> E-Library
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 6 -->
                <div class="facility-card" data-category="sports">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Lapangan Futsal">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Olahraga</span>
                        <h3 class="facility-title">Lapangan Futsal</h3>
                        <p class="facility-desc">Lapangan futsal indoor dengan rumput sintetis berkualitas tinggi dan sistem drainase yang baik.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-futbol"></i> Ukuran Standar
                            </div>
                            <div class="stat">
                                <i class="fas fa-tshirt"></i> Ruang Ganti
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 7 -->
                <div class="facility-card" data-category="arts">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Studio Musik">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Seni & Budaya</span>
                        <h3 class="facility-title">Studio Musik</h3>
                        <p class="facility-desc">Ruang latihan musik dengan peralatan lengkap termasuk piano, drum set, dan alat musik tradisional.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-music"></i> 5 Ruang
                            </div>
                            <div class="stat">
                                <i class="fas fa-headphones"></i> Soundproof
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 8 -->
                <div class="facility-card" data-category="support">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1568702846914-96b305d2aaeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Kantin Sehat">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Pendukung</span>
                        <h3 class="facility-title">Kantin Sehat</h3>
                        <p class="facility-desc">Area makan dengan berbagai pilihan makanan sehat dan bergizi yang terjangkau bagi siswa.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-utensils"></i> 20 Kios
                            </div>
                            <div class="stat">
                                <i class="fas fa-heart"></i> Menu Sehat
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 9 -->
                <div class="facility-card" data-category="academic">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1591123120675-6f7f1aae0e5b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80" alt="Ruang Kelas">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Akademik</span>
                        <h3 class="facility-title">Ruang Kelas Modern</h3>
                        <p class="facility-desc">40 ruang kelas ber-AC dengan smart TV, sound system, dan furniture ergonomis untuk kenyamanan belajar.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-chalkboard"></i> 40 Ruang
                            </div>
                            <div class="stat">
                                <i class="fas fa-snowflake"></i> Ber-AC
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 10 -->
                <div class="facility-card" data-category="sports">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Lapangan Olahraga">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Olahraga</span>
                        <h3 class="facility-title">Lapangan Olahraga Multifungsi</h3>
                        <p class="facility-desc">Lapangan serbaguna untuk voli, badminton, dan tenis dengan permukaan karet berkualitas tinggi.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-volleyball-ball"></i> Multifungsi
                            </div>
                            <div class="stat">
                                <i class="fas fa-expand"></i> 2.000m²
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 11 -->
                <div class="facility-card" data-category="support">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Klinik Sekolah">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Pendukung</span>
                        <h3 class="facility-title">Klinik Kesehatan Sekolah</h3>
                        <p class="facility-desc">Fasilitas kesehatan lengkap dengan dokter dan perawat jaga untuk penanganan darurat dan konsultasi kesehatan.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-user-md"></i> Dokter Jaga
                            </div>
                            <div class="stat">
                                <i class="fas fa-procedures"></i> 2 Tempat Tidur
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 12 -->
                <div class="facility-card" data-category="academic">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Lab Robotika">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Akademik</span>
                        <h3 class="facility-title">Laboratorium Robotika</h3>
                        <p class="facility-desc">Ruang khusus untuk pengembangan robotika dan IoT dengan peralatan terkini dan ruang prototyping.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-robot"></i> 3D Printer
                            </div>
                            <div class="stat">
                                <i class="fas fa-microchip"></i> Arduino/Raspberry
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 13 -->
                <div class="facility-card" data-category="arts">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Galeri Seni">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Seni & Budaya</span>
                        <h3 class="facility-title">Galeri Seni Siswa</h3>
                        <p class="facility-desc">Ruang pamer karya seni siswa dengan sistem pencahayaan khusus dan area workshop seni.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-palette"></i> 200m²
                            </div>
                            <div class="stat">
                                <i class="fas fa-paint-brush"></i> Workshop Area
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 14 -->
                <div class="facility-card" data-category="support">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1566669437687-7040a6926753?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Masjid Sekolah">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Pendukung</span>
                        <h3 class="facility-title">Masjid Sekolah</h3>
                        <p class="facility-desc">Tempat ibadah yang nyaman dengan kapasitas 500 jamaah dan fasilitas wudhu yang memadai.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-mosque"></i> 500 Jamaah
                            </div>
                            <div class="stat">
                                <i class="fas fa-water"></i> Ruang Wudhu
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 15 -->
                <div class="facility-card" data-category="academic">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Lab Bahasa">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Akademik</span>
                        <h3 class="facility-title">Laboratorium Bahasa</h3>
                        <p class="facility-desc">Fasilitas pembelajaran bahasa asing dengan sistem audio digital dan perangkat multimedia interaktif.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-language"></i> 4 Bahasa
                            </div>
                            <div class="stat">
                                <i class="fas fa-headset"></i> Audio Digital
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 16 -->
                <div class="facility-card" data-category="sports">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Kolam Renang">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Olahraga</span>
                        <h3 class="facility-title">Kolam Renang Semi-Olimpiade</h3>
                        <p class="facility-desc">Kolam renang 25 meter dengan 6 lintasan dan sistem filtrasi air modern untuk latihan renang kompetitif.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-swimmer"></i> 25m
                            </div>
                            <div class="stat">
                                <i class="fas fa-lane"></i> 6 Lintasan
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 17 -->
                <div class="facility-card" data-category="support">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="Ruang Guru">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Pendukung</span>
                        <h3 class="facility-title">Ruang Guru Modern</h3>
                        <p class="facility-desc">Ruang kerja guru yang nyaman dengan fasilitas lengkap untuk persiapan mengajar dan konsultasi dengan siswa.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-chalkboard-teacher"></i> 50 Workstation
                            </div>
                            <div class="stat">
                                <i class="fas fa-print"></i> Fasilitas Cetak
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 18 -->
                <div class="facility-card" data-category="arts">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Studio Tari">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Seni & Budaya</span>
                        <h3 class="facility-title">Studio Tari & Drama</h3>
                        <p class="facility-desc">Ruang latihan dengan lantai kayu khusus, cermin besar, dan sistem audio untuk latihan tari dan drama.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-shoe-prints"></i> Lantai Kayu
                            </div>
                            <div class="stat">
                                <i class="fas fa-mirror"></i> Cermin Besar
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 19 -->
                <div class="facility-card" data-category="academic">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1581093057305-3ecb60a1ad8a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Green House">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Akademik</span>
                        <h3 class="facility-title">Green House Pendidikan</h3>
                        <p class="facility-desc">Fasilitas penelitian tanaman dengan sistem hidroponik dan area budidaya untuk pembelajaran biologi.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-leaf"></i> Hidroponik
                            </div>
                            <div class="stat">
                                <i class="fas fa-seedling"></i> 50+ Spesies
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 20 -->
                <div class="facility-card" data-category="support">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="Parkir Sekolah">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Pendukung</span>
                        <h3 class="facility-title">Area Parkir Luas</h3>
                        <p class="facility-desc">Lahan parkir yang luas dan aman untuk kendaraan guru, staff, dan siswa dengan sistem pengawasan CCTV.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-parking"></i> 200 Mobil
                            </div>
                            <div class="stat">
                                <i class="fas fa-motorcycle"></i> 500 Motor
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 21 -->
                <div class="facility-card" data-category="sports">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1540497077202-7c8a3999166f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Gym Sekolah">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Olahraga</span>
                        <h3 class="facility-title">Fitness Center</h3>
                        <p class="facility-desc">Gym sekolah dengan peralatan kebugaran modern dan pelatih bersertifikat untuk program kebugaran siswa.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-dumbbell"></i> 20 Alat
                            </div>
                            <div class="stat">
                                <i class="fas fa-user-tie"></i> Pelatih
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 22 -->
                <div class="facility-card" data-category="academic">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Ruang Multimedia">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Akademik</span>
                        <h3 class="facility-title">Ruang Produksi Multimedia</h3>
                        <p class="facility-desc">Studio produksi video dan audio dengan peralatan profesional untuk pembelajaran produksi konten kreatif.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-video"></i> Kamera Pro
                            </div>
                            <div class="stat">
                                <i class="fas fa-microphone"></i> Studio Rekaman
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 23 -->
                <div class="facility-card" data-category="support">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="Taman Belajar">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Pendukung</span>
                        <h3 class="facility-title">Taman Belajar Outdoor</h3>
                        <p class="facility-desc">Area belajar di luar ruangan dengan gazebo dan wifi untuk diskusi kelompok dan belajar santai.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-tree"></i> 5 Gazebo
                            </div>
                            <div class="stat">
                                <i class="fas fa-wifi"></i> Hotspot
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 24 -->
                <div class="facility-card" data-category="arts">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1547036967-23d11aacaee0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Studio Fotografi">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Seni & Budaya</span>
                        <h3 class="facility-title">Studio Fotografi</h3>
                        <p class="facility-desc">Ruang studio dengan backdrop, lighting profesional, dan peralatan editing untuk pembelajaran fotografi.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-camera"></i> DSLR
                            </div>
                            <div class="stat">
                                <i class="fas fa-lightbulb"></i> Lighting Pro
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Facility 25 -->
                <div class="facility-card" data-category="support">
                    <div class="facility-img">
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="Ruang BK">
                    </div>
                    <div class="facility-content">
                        <span class="facility-category">Pendukung</span>
                        <h3 class="facility-title">Ruang Bimbingan Konseling</h3>
                        <p class="facility-desc">Ruang konseling privat yang nyaman untuk konsultasi akademik dan pengembangan pribadi siswa.</p>
                        <div class="facility-stats">
                            <div class="stat">
                                <i class="fas fa-hands-helping"></i> 3 Konselor
                            </div>
                            <div class="stat">
                                <i class="fas fa-couch"></i> Ruang Privat
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Highlight Section --}}
    <section class="highlight-section">
        <div class="highlight-container">
            <div class="section-title">
                <h2 style="color: var(--primary);">Fasilitas Kami dalam Angka</h2>
            </div>
            
            <div class="highlight-cards">
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="highlight-number">40+</div>
                    <div class="highlight-text">Ruang Kelas Modern</div>
                </div>
                
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <div class="highlight-number">8</div>
                    <div class="highlight-text">Laboratorium Khusus</div>
                </div>
                
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-running"></i>
                    </div>
                    <div class="highlight-number">12</div>
                    <div class="highlight-text">Fasilitas Olahraga</div>
                </div>
                
                <div class="highlight-card">
                    <div class="highlight-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <div class="highlight-number">6</div>
                    <div class="highlight-text">Studio Seni & Budaya</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include ('home.template.footer')

    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.category-btn');
            const facilityCards = document.querySelectorAll('.facility-card');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-category');
                    
                    facilityCards.forEach(card => {
                        if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>