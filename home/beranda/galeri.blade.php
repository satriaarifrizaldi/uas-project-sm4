<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Galeri - SMANDUTI</title>
    <style>
        :root {
            --primary: #1e40af;
            --secondary: #1e3a8a;
            --accent: #3b82f6;
            --light: #f8fafc;
            --dark: #1e293b;
            --gray: #64748b;
        }
        
        .gallery-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 6rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        
        .gallery-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1484&q=80') no-repeat center center/cover;
            opacity: 0.15;
            z-index: 0;
        }
        
        .gallery-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .gallery-hero h1 {
            font-size: 3.2rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }
        
        .gallery-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            opacity: 0.9;
        }
        
        .gallery-container {
            max-width: 1400px;
            margin: 4rem auto;
            padding: 0 1rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
            position: relative;
            display: inline-block;
            padding-bottom: 1rem;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        .gallery-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
        }
        
        .filter-btn {
            padding: 0.6rem 1.8rem;
            background: white;
            color: var(--primary);
            border: 1px solid var(--primary);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background: var(--primary);
            color: white;
        }
        
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
        }
        
        .gallery-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            aspect-ratio: 4/3;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }
        
        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            padding: 1.5rem 1rem 1rem;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-caption {
            opacity: 1;
        }
        
        .gallery-caption h3 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }
        
        .gallery-caption p {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .view-more {
            text-align: center;
            margin-top: 3rem;
        }
        
        .view-more-btn {
            display: inline-block;
            padding: 0.8rem 2.5rem;
            background: var(--primary);
            color: white;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid var(--primary);
        }
        
        .view-more-btn:hover {
            background: white;
            color: var(--primary);
            transform: translateY(-3px);
        }
        
        .video-section {
            background: #f1f5f9;
            padding: 5rem 1rem;
            margin-top: 4rem;
            clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%);
        }
        
        .video-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .video-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .video-thumbnail {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: rgba(255,255,255,0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .video-card:hover .play-icon {
            opacity: 1;
        }
        
        .video-info {
            padding: 1.5rem;
        }
        
        .video-info h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .video-info p {
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .gallery-hero {
                padding: 4rem 1rem;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .gallery-hero h1 {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
            
            .video-section {
                clip-path: polygon(0 5%, 100% 0, 100% 95%, 0 100%);
                padding: 3rem 1rem;
            }
            
            .video-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Content --}}
    <section class="gallery-hero">
        <div class="gallery-hero-content">
            <h1>Galeri SMANDUTI</h1>
            <p>Kumpulan momen berharga dan dokumentasi kegiatan siswa-siswi SMANDUTI</p>
        </div>
    </section>
    
    <div class="gallery-container">
        <div class="section-title">
            <h2>Foto Kegiatan</h2>
            <p>Dokumentasi berbagai aktivitas dan acara di SMANDUTI</p>
        </div>
        
        <div class="gallery-filter">
            <button class="filter-btn active">Semua</button>
            <button class="filter-btn">Akademik</button>
            <button class="filter-btn">Olahraga</button>
            <button class="filter-btn">Seni Budaya</button>
            <button class="filter-btn">Pramuka</button>
            <button class="filter-btn">Wisuda</button>
        </div>
        
        <div class="gallery-grid">
            <!-- Item 1 -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Kegiatan Belajar" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Proses Belajar Mengajar</h3>
                    <p>Siswa sedang melakukan praktikum di laboratorium</p>
                </div>
            </div>
            
            <!-- Item 2 -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Lomba Robotik" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Lomba Robotik Nasional</h3>
                    <p>Tim robotik SMANDUTI meraih juara 1 tingkat nasional</p>
                </div>
            </div>
            
            <!-- Item 3 -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1547347298-4074fc3086f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Futsal" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Turnamen Futsal</h3>
                    <p>Tim futsal SMANDUTI di kejuaraan antarsekolah</p>
                </div>
            </div>
            
            <!-- Item 4 -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Paduan Suara" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Festival Paduan Suara</h3>
                    <p>Penampilan ekstrakurikuler paduan suara SMANDUTI</p>
                </div>
            </div>
            
            <!-- Item 5 -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1484&q=80" alt="Upacara" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Upacara Bendera</h3>
                    <p>Upacara hari Senin dengan pembina upacara kepala sekolah</p>
                </div>
            </div>
            
            <!-- Item 6 -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1567942712661-82b9b407abbf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80" alt="Teater" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Pentas Seni Teater</h3>
                    <p>Penampilan drama musikal oleh ekstrakurikuler teater</p>
                </div>
            </div>
            
            <!-- Item 7 -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Debat" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Kompetisi Debat Bahasa</h3>
                    <p>Tim debat SMANDUTI di kompetisi tingkat provinsi</p>
                </div>
            </div>
            
            <!-- Item 8 -->
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Pramuka" class="gallery-img">
                <div class="gallery-caption">
                    <h3>Kemah Pramuka</h3>
                    <p>Kegiatan tahunan perkemahan Jumat-Sabtu</p>
                </div>
            </div>
        </div>
        
        <div class="view-more">
            <a href="#" class="view-more-btn">Lihat Lebih Banyak</a>
        </div>
    </div>
    
    <section class="video-section">
        <div class="video-container">
            <div class="section-title">
                <h2>Video Dokumentasi</h2>
                <p>Rekaman kegiatan dan prestasi SMANDUTI dalam bentuk video</p>
            </div>
            
            <div class="video-grid">
                <!-- Video 1 -->
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Robotik">
                        <div class="play-icon">▶</div>
                    </div>
                    <div class="video-info">
                        <h3>Robotik SMANDUTI Juara Nasional</h3>
                        <p>Liputan tim robotik SMANDUTI yang meraih juara 1 di kompetisi nasional</p>
                    </div>
                </div>
                
                <!-- Video 2 -->
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Paduan Suara">
                        <div class="play-icon">▶</div>
                    </div>
                    <div class="video-info">
                        <h3>Penampilan Paduan Suara</h3>
                        <p>Penampilan spesial paduan suara SMANDUTI di acara kota</p>
                    </div>
                </div>
                
                <!-- Video 3 -->
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1484&q=80" alt="Wisuda">
                        <div class="play-icon">▶</div>
                    </div>
                    <div class="video-info">
                        <h3>Wisuda Angkatan 2023</h3>
                        <p>Momen penghargaan dan pelepasan siswa kelas XII</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include ('home.template.footer')
    
    <script>
        // Simple filtering functionality
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                button.classList.add('active');
                
                // Here you would typically filter the gallery items
                // For now we'll just log the category
                console.log('Filter by:', button.textContent);
            });
        });
        
        // Simple hover effect for video cards
        document.querySelectorAll('.video-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.querySelector('.play-icon').style.opacity = '1';
            });
            
            card.addEventListener('mouseleave', () => {
                card.querySelector('.play-icon').style.opacity = '0';
            });
        });
    </script>
</body>
</html>