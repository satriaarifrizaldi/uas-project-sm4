<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestasi - SMANDUTI</title>
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        
        .prestasi-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 5rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .prestasi-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        
        .prestasi-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .prestasi-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .prestasi-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }
        
        .achievement-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        
        .section-title h2 {
            font-size: 2.2rem;
            color: var(--primary);
            display: inline-block;
            padding-bottom: 0.5rem;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 3px;
            background: var(--secondary);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .achievement-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .filter-btn {
            padding: 0.5rem 1.5rem;
            background: white;
            border: 1px solid var(--secondary);
            color: var(--secondary);
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background: var(--secondary);
            color: white;
        }
        
        .achievement-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .achievement-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .achievement-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .achievement-img {
            height: 200px;
            overflow: hidden;
        }
        
        .achievement-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .achievement-card:hover .achievement-img img {
            transform: scale(1.1);
        }
        
        .achievement-content {
            padding: 1.5rem;
        }
        
        .achievement-category {
            display: inline-block;
            background: var(--light);
            color: var(--secondary);
            padding: 0.3rem 0.8rem;
            border-radius: 30px;
            font-size: 0.8rem;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }
        
        .achievement-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .achievement-date {
            color: #7f8c8d;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .achievement-date i {
            color: var(--accent);
        }
        
        .achievement-desc {
            color: #555;
            margin-bottom: 1.5rem;
        }
        
        .achievement-stats {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #eee;
            padding-top: 1rem;
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
        }
        
        .highlight-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .highlight-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .highlight-icon {
            width: 80px;
            height: 80px;
            background: var(--secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        
        .highlight-icon i {
            color: white;
            font-size: 2rem;
        }
        
        .highlight-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
            line-height: 1;
        }
        
        .highlight-text {
            color: #555;
            max-width: 600px;
            margin: 0 auto;
        }
        
        @media (max-width: 768px) {
            .prestasi-hero h1 {
                font-size: 2.2rem;
            }
            
            .achievement-grid {
                grid-template-columns: 1fr;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Hero Section --}}
    <section class="prestasi-hero">
        <div class="prestasi-hero-content">
            <h1>Prestasi SMANDUTI</h1>
            <p>Kami bangga dengan berbagai prestasi yang telah diraih oleh siswa-siswi SMANDUTI di berbagai bidang, baik akademik maupun non-akademik.</p>
        </div>
    </section>

    {{-- Achievement Section --}}
    <section class="achievement-container">
        <div class="section-title">
            <h2>Prestasi Terbaru</h2>
        </div>
        
        <div class="achievement-filter">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="academic">Akademik</button>
            <button class="filter-btn" data-filter="sports">Olahraga</button>
            <button class="filter-btn" data-filter="arts">Seni</button>
            <button class="filter-btn" data-filter="science">Sains</button>
        </div>
        
        <div class="achievement-grid">
            <!-- Achievement 1 -->
            <div class="achievement-card" data-category="academic">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Olimpiade Matematika">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Akademik</span>
                    <h3 class="achievement-title">Juara 1 Olimpiade Matematika Tingkat Provinsi</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 15 Oktober 2023
                    </div>
                    <p class="achievement-desc">Tim matematika SMANDUTI berhasil meraih juara 1 dalam Olimpiade Matematika Tingkat Provinsi yang diikuti oleh 50 sekolah se-provinsi.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-user"></i> Ananda Putri
                        </div>
                        <div class="stat">
                            <i class="fas fa-trophy"></i> Juara 1
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Achievement 2 -->
            <div class="achievement-card" data-category="sports">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1547347298-4074fc3086f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Basketball Championship">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Olahraga</span>
                    <h3 class="achievement-title">Juara 2 Kejuaraan Basket Pelajar Nasional</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 5 November 2023
                    </div>
                    <p class="achievement-desc">Tim basket putra SMANDUTI menunjukkan performa gemilang dan meraih posisi runner-up dalam kejuaraan nasional.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i> Tim Basket
                        </div>
                        <div class="stat">
                            <i class="fas fa-trophy"></i> Juara 2
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Achievement 3 -->
            <div class="achievement-card" data-category="arts">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Festival Seni">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Seni</span>
                    <h3 class="achievement-title">Penghargaan Khusus Festival Seni Pelajar</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 22 September 2023
                    </div>
                    <p class="achievement-desc">Kelompok teater SMANDUTI menerima penghargaan khusus untuk penampilan terinovatif dalam Festival Seni Pelajar Regional.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i> Teater Kreatif
                        </div>
                        <div class="stat">
                            <i class="fas fa-award"></i> Penghargaan Khusus
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Achievement 4 -->
            <div class="achievement-card" data-category="science">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Science Fair">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Sains</span>
                    <h3 class="achievement-title">Inovasi Terbaik Science Fair Nasional</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 10 Agustus 2023
                    </div>
                    <p class="achievement-desc">Tim riset SMANDUTI meraih penghargaan inovasi terbaik untuk alat pendeteksi dini kebocoran gas berbasis IoT.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-user-friends"></i> Tim Riset GasDetect
                        </div>
                        <div class="stat">
                            <i class="fas fa-medal"></i> Inovasi Terbaik
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Achievement 5 -->
            <div class="achievement-card" data-category="academic">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Debate Competition">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Akademik</span>
                    <h3 class="achievement-title">Best Speaker Debat Bahasa Inggris Nasional</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 3 Juli 2023
                    </div>
                    <p class="achievement-desc">Muhammad Rizal terpilih sebagai best speaker dalam kompetisi debat bahasa Inggris tingkat nasional yang diikuti 120 peserta.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-user"></i> Muhammad Rizal
                        </div>
                        <div class="stat">
                            <i class="fas fa-star"></i> Best Speaker
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Achievement 6 -->
            <div class="achievement-card" data-category="sports">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Badminton Tournament">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Olahraga</span>
                    <h3 class="achievement-title">Juara 3 Turnamen Bulutangkis Pelajar</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 18 Juni 2023
                    </div>
                    <p class="achievement-desc">Dian Sastro berhasil meraih peringkat ketiga dalam turnamen bulutangkis pelajar se-kota setelah pertandingan sengit.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-user"></i> Dian Sastro
                        </div>
                        <div class="stat">
                            <i class="fas fa-trophy"></i> Juara 3
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Highlight Section --}}
    <section class="highlight-section">
        <div class="highlight-container">
            <div class="highlight-card">
                <div class="highlight-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3 class="highlight-number">127+</h3>
                <p class="highlight-text">Prestasi yang telah diraih oleh siswa-siswi SMANDUTI dalam 5 tahun terakhir di berbagai bidang dan kompetisi.</p>
            </div>
        </div>
    </section>
    
    {{-- More Achievement Section --}}
    <section class="achievement-container">
        <div class="section-title">
            <h2>Prestasi Membanggakan Lainnya</h2>
        </div>
        
        <div class="achievement-grid">
            <!-- Achievement 7 -->
            <div class="achievement-card" data-category="science">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Robotic Competition">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Sains</span>
                    <h3 class="achievement-title">Finalis Kompetisi Robotik Internasional</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 12 Mei 2023
                    </div>
                    <p class="achievement-desc">Tim robotik SMANDUTI berhasil menjadi finalis dalam kompetisi robotik internasional di Singapura.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i> Tim Robotik
                        </div>
                        <div class="stat">
                            <i class="fas fa-flag"></i> Finalis
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Achievement 8 -->
            <div class="achievement-card" data-category="arts">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Music Festival">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Seni</span>
                    <h3 class="achievement-title">Juara 1 Festival Band Pelajar</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 28 April 2023
                    </div>
                    <p class="achievement-desc">Band sekolah "The Melodians" meraih juara 1 dalam festival band pelajar se-provinsi.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-users"></i> The Melodians
                        </div>
                        <div class="stat">
                            <i class="fas fa-trophy"></i> Juara 1
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Achievement 9 -->
            <div class="achievement-card" data-category="academic">
                <div class="achievement-img">
                    <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Writing Competition">
                </div>
                <div class="achievement-content">
                    <span class="achievement-category">Akademik</span>
                    <h3 class="achievement-title">Penulis Muda Terbaik 2023</h3>
                    <div class="achievement-date">
                        <i class="fas fa-calendar-alt"></i> 15 Maret 2023
                    </div>
                    <p class="achievement-desc">Siti Nurhaliza meraih penghargaan penulis muda terbaik untuk cerpen bertema lingkungan.</p>
                    <div class="achievement-stats">
                        <div class="stat">
                            <i class="fas fa-user"></i> Siti Nurhaliza
                        </div>
                        <div class="stat">
                            <i class="fas fa-award"></i> Penghargaan Khusus
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include ('home.template.footer')

    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterBtns = document.querySelectorAll('.filter-btn');
            const achievementCards = document.querySelectorAll('.achievement-card');
            
            filterBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    achievementCards.forEach(card => {
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