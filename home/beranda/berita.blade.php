<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita - SMANDUTI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #3b82f6;
            --secondary: #7c3aed;
            --secondary-light: #8b5cf6;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #94a3b8;
            --success: #10b981;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        body {
            background-color: #f8fafc;
            color: var(--dark);
            line-height: 1.6;
        }
        
        /* Hero Section */
        .berita-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 8rem 1rem 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            margin-bottom: 4rem;
        }
        
        .berita-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            opacity: 0.15;
            z-index: 0;
        }
        
        .berita-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .berita-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            line-height: 1.2;
        }
        
        .berita-hero p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 3rem;
            opacity: 0.9;
        }
        
        /* News Container */
        .berita-container {
            max-width: 1200px;
            margin: 0 auto 6rem;
            padding: 0 2rem;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 4rem;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            color: var(--dark);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }
        
        .section-header h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border-radius: 2px;
        }
        
        /* News Grid */
        .berita-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2.5rem;
        }
        
        .berita-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }
        
        .berita-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .berita-image {
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .berita-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .berita-card:hover .berita-image img {
            transform: scale(1.05);
        }
        
        .berita-category {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--primary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .berita-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        
        .berita-date {
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }
        
        .berita-date i {
            margin-right: 0.5rem;
        }
        
        .berita-title {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: var(--dark);
            font-weight: 700;
            line-height: 1.3;
        }
        
        .berita-excerpt {
            color: var(--gray);
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        
        .berita-link {
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .berita-link:hover {
            color: var(--secondary);
        }
        
        .berita-link i {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }
        
        .berita-link:hover i {
            transform: translateX(3px);
        }
        
        /* News Categories */
        .categories-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 3rem;
        }
        
        .category-button {
            background: white;
            border: 1px solid var(--gray);
            color: var(--dark);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .category-button:hover, .category-button.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 4rem;
            gap: 0.5rem;
        }
        
        .page-item {
            list-style: none;
        }
        
        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: white;
            color: var(--dark);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }
        
        .page-link:hover, .page-link.active {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .berita-hero h1 {
                font-size: 3rem;
            }
        }
        
        @media (max-width: 768px) {
            .berita-hero {
                padding: 6rem 1rem 4rem;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .berita-hero h1 {
                font-size: 2.5rem;
            }
            
            .berita-hero p {
                font-size: 1.1rem;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
            
            .berita-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .berita-hero h1 {
                font-size: 2rem;
            }
            
            .berita-container {
                padding: 0 1rem;
            }
            
            .berita-title {
                font-size: 1.25rem;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Content --}}
    <section class="berita-hero">
        <div class="berita-hero-content">
            <h1>Berita Terkini SMANDUTI</h1>
            <p>Ikuti perkembangan terbaru seputar kegiatan, prestasi, dan informasi penting dari SMAN 1 Dumai Timur</p>
        </div>
    </section>
    
    <main class="berita-container">
        <div class="section-header">
            <h2>Berita Terbaru</h2>
        </div>
        
        <div class="categories-container">
            <button class="category-button active">Semua</button>
            <button class="category-button">Prestasi</button>
            <button class="category-button">Kegiatan</button>
            <button class="category-button">Pengumuman</button>
            <button class="category-button">Acara</button>
            <button class="category-button">Edukasi</button>
        </div>
        
        <div class="berita-grid">
            <!-- News Item 1 -->
            <article class="berita-card">
                <div class="berita-image">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80" alt="Siswa Berprestasi">
                    <span class="berita-category">Prestasi</span>
                </div>
                <div class="berita-content">
                    <div class="berita-date">
                        <i class="far fa-calendar-alt"></i> 15 Juni 2023
                    </div>
                    <h3 class="berita-title">Tim Olimpiade Matematika SMANDUTI Raih Medali Emas Tingkat Nasional</h3>
                    <p class="berita-excerpt">Tim olimpiade matematika SMAN 1 Dumai Timur berhasil meraih 2 medali emas dan 1 perak dalam kompetisi OSN 2023 yang diselenggarakan di Jakarta.</p>
                    <a href="#" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Item 2 -->
            <article class="berita-card">
                <div class="berita-image">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Kegiatan Sekolah">
                    <span class="berita-category">Kegiatan</span>
                </div>
                <div class="berita-content">
                    <div class="berita-date">
                        <i class="far fa-calendar-alt"></i> 10 Juni 2023
                    </div>
                    <h3 class="berita-title">Peringatan Hari Lingkungan Hidup dengan Penanaman 1000 Pohon</h3>
                    <p class="berita-excerpt">Siswa-siswi SMANDUTI mengadakan aksi penanaman pohon di sekitar lingkungan sekolah dalam rangka memperingati Hari Lingkungan Hidup Sedunia.</p>
                    <a href="#" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Item 3 -->
            <article class="berita-card">
                <div class="berita-image">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Workshop">
                    <span class="berita-category">Edukasi</span>
                </div>
                <div class="berita-content">
                    <div class="berita-date">
                        <i class="far fa-calendar-alt"></i> 5 Juni 2023
                    </div>
                    <h3 class="berita-title">Workshop Coding untuk Siswa SMANDUTI oleh Google Developer</h3>
                    <p class="berita-excerpt">Google Developer Group menyelenggarakan workshop coding dasar selama 2 hari untuk siswa SMANDUTI yang tertarik di bidang teknologi informasi.</p>
                    <a href="#" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Item 4 -->
            <article class="berita-card">
                <div class="berita-image">
                    <img src="https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Pengumuman">
                    <span class="berita-category">Pengumuman</span>
                </div>
                <div class="berita-content">
                    <div class="berita-date">
                        <i class="far fa-calendar-alt"></i> 1 Juni 2023
                    </div>
                    <h3 class="berita-title">Jadwal Ujian Semester Genap Tahun Ajaran 2022/2023</h3>
                    <p class="berita-excerpt">Berikut adalah jadwal lengkap ujian semester genap untuk semua kelas yang akan dilaksanakan mulai tanggal 12-20 Juni 2023.</p>
                    <a href="#" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Item 5 -->
            <article class="berita-card">
                <div class="berita-image">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Acara">
                    <span class="berita-category">Acara</span>
                </div>
                <div class="berita-content">
                    <div class="berita-date">
                        <i class="far fa-calendar-alt"></i> 28 Mei 2023
                    </div>
                    <h3 class="berita-title">Pentas Seni Tahunan SMANDUTI "Creativity in Diversity"</h3>
                    <p class="berita-excerpt">Pentas seni tahunan SMANDUTI akan menampilkan berbagai pertunjukan dari siswa mulai dari tari tradisional hingga band modern.</p>
                    <a href="#" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
            
            <!-- News Item 6 -->
            <article class="berita-card">
                <div class="berita-image">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Prestasi">
                    <span class="berita-category">Prestasi</span>
                </div>
                <div class="berita-content">
                    <div class="berita-date">
                        <i class="far fa-calendar-alt"></i> 20 Mei 2023
                    </div>
                    <h3 class="berita-title">Debat Bahasa Inggris SMANDUTI Juara 1 Tingkat Provinsi</h3>
                    <p class="berita-excerpt">Tim debat bahasa Inggris SMANDUTI berhasil menjadi juara 1 dalam kompetisi debat antar SMA se-provinsi yang diadakan di Pekanbaru.</p>
                    <a href="#" class="berita-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
        </div>
        
        <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a></li>
            <li class="page-item"><a href="#" class="page-link active">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a></li>
        </ul>
    </main>

    {{-- Footer --}}
    @include ('home.template.footer')
    
    <script>
        // Category filter functionality
        document.querySelectorAll('.category-button').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelector('.category-button.active').classList.remove('active');
                this.classList.add('active');
                
                // Here you would typically filter the news items
                // This is just a placeholder for the functionality
                console.log('Filter by:', this.textContent);
            });
        });
        
        // Simple animation on scroll
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.berita-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            cards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>