<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kurikulum - SMANDUTI</title>
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
        .kurikulum-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 8rem 1rem 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
            margin-bottom: 4rem;
        }
        
        .kurikulum-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80') no-repeat center center/cover;
            opacity: 0.15;
            z-index: 0;
        }
        
        .kurikulum-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .kurikulum-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            line-height: 1.2;
        }
        
        .kurikulum-hero p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 3rem;
            opacity: 0.9;
        }
        
        .cta-button {
            display: inline-flex;
            align-items: center;
            background-color: white;
            color: var(--primary);
            padding: 0.75rem 1.75rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            background-color: var(--light);
        }
        
        .cta-button i {
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }
        
        .cta-button:hover i {
            transform: translateX(3px);
        }
        
        /* Main Content */
        .kurikulum-container {
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
        
        .section-header p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        /* Curriculum Cards */
        .kurikulum-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 5rem;
        }
        
        .kurikulum-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }
        
        .kurikulum-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary), var(--secondary));
            transition: width 0.3s ease;
        }
        
        .kurikulum-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .kurikulum-card:hover::before {
            width: 8px;
        }
        
        .kurikulum-card h3 {
            color: var(--dark);
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
        }
        
        .kurikulum-card h3 i {
            margin-right: 0.75rem;
            color: var(--primary);
            font-size: 1.75rem;
        }
        
        .kurikulum-card p {
            color: var(--gray);
            margin-bottom: 1.5rem;
            font-size: 1rem;
        }
        
        .kurikulum-card ul {
            list-style-type: none;
        }
        
        .kurikulum-card li {
            margin-bottom: 0.75rem;
            position: relative;
            padding-left: 1.75rem;
            color: var(--dark);
            font-weight: 500;
        }
        
        .kurikulum-card li::before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--success);
        }
        
        /* Features Section */
        .features-container {
            background-color: white;
            border-radius: 12px;
            padding: 3rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            margin-bottom: 5rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        
        .feature-item {
            display: flex;
            align-items: flex-start;
        }
        
        .feature-icon {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .feature-text h4 {
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .feature-text p {
            color: var(--gray);
            font-size: 0.95rem;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .kurikulum-hero h1 {
                font-size: 3rem;
            }
        }
        
        @media (max-width: 768px) {
            .kurikulum-hero {
                padding: 6rem 1rem 4rem;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .kurikulum-hero h1 {
                font-size: 2.5rem;
            }
            
            .kurikulum-hero p {
                font-size: 1.1rem;
            }
            
            .section-header h2 {
                font-size: 2rem;
            }
            
            .kurikulum-grid {
                grid-template-columns: 1fr;
            }
            
            .features-container {
                padding: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .kurikulum-hero h1 {
                font-size: 2rem;
            }
            
            .kurikulum-container {
                padding: 0 1rem;
            }
            
            .features-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Content --}}
    <section class="kurikulum-hero">
        <div class="kurikulum-hero-content">
            <h1>Kurikulum Masa Depan di SMANDUTI</h1>
            <p>Kurikulum terpadu berbasis kompetensi yang dirancang untuk membekali siswa dengan pengetahuan, keterampilan, dan karakter yang relevan dengan tantangan abad 21.</p>
            <a href="#kurikulum" class="cta-button">
                Jelajahi Kurikulum <i class="fas fa-arrow-down"></i>
            </a>
        </div>
    </section>
    
    <main class="kurikulum-container" id="kurikulum">
        <div class="section-header">
            <h2>Struktur Kurikulum</h2>
            <p>Kami menerapkan pendekatan holistik yang mengintegrasikan perkembangan akademik, karakter, dan keterampilan hidup</p>
        </div>
        
        <div class="kurikulum-grid">
            <div class="kurikulum-card">
                <h3><i class="fas fa-book-open"></i> Kurikulum Inti</h3>
                <p>Implementasi Kurikulum Merdeka dengan pengayaan materi berbasis kebutuhan siswa</p>
                <ul>
                    <li>Pembelajaran berbasis proyek (PjBL)</li>
                    <li>Penguatan profil pelajar Pancasila</li>
                    <li>Pembelajaran berdiferensiasi</li>
                    <li>Literasi dan numerasi intensif</li>
                    <li>Pendidikan karakter terintegrasi</li>
                </ul>
            </div>
            
            <div class="kurikulum-card">
                <h3><i class="fas fa-star"></i> Program Unggulan</h3>
                <p>Program khusus untuk mengembangkan bakat dan minat siswa secara mendalam</p>
                <ul>
                    <li>Kelas Sains dengan laboratorium canggih</li>
                    <li>Program bahasa asing bersertifikat</li>
                    <li>Kewirausahaan digital</li>
                    <li>Koding dan robotik</li>
                    <li>Persiapan perguruan tinggi kelas dunia</li>
                </ul>
            </div>
            
            <div class="kurikulum-card">
                <h3><i class="fas fa-running"></i> Pengembangan Diri</h3>
                <p>Program ekstrakurikuler untuk mengasah soft skills dan talenta siswa</p>
                <ul>
                    <li>15+ pilihan ekstrakurikuler</li>
                    <li>Program kepemimpinan siswa</li>
                    <li>Kompetisi nasional & internasional</li>
                    <li>Proyek sosial masyarakat</li>
                    <li>Magang industri</li>
                </ul>
            </div>
        </div>
        
        <div class="section-header">
            <h2>Keunggulan Kurikulum Kami</h2>
            <p>Poin-poin pembeda yang membuat pembelajaran di SMANDUTI lebih bermakna</p>
        </div>
        
        <div class="features-container">
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Pembelajaran Personal</h4>
                        <p>Setiap siswa mendapatkan perhatian sesuai kebutuhan belajarnya melalui pendekatan diferensiasi</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Teknologi Pendidikan</h4>
                        <p>Pemanfaatan platform digital dan tools terkini untuk meningkatkan pengalaman belajar</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Perspektif Global</h4>
                        <p>Kurikulum yang mengintegrasikan isu-isu global dan kerjasama dengan sekolah internasional</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="feature-text">
                        <h4>Kolaborasi Industri</h4>
                        <p>Kemitraan dengan perusahaan dan perguruan tinggi untuk pembelajaran kontekstual</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section-header">
            <h2>Program Pembelajaran</h2>
            <p>Berbagai pendekatan inovatif yang kami terapkan dalam proses belajar mengajar</p>
        </div>
        
        <div class="kurikulum-grid">
            <div class="kurikulum-card">
                <h3><i class="fas fa-project-diagram"></i> Project-Based Learning</h3>
                <p>Pembelajaran melalui proyek nyata yang mengintegrasikan berbagai disiplin ilmu</p>
                <ul>
                    <li>Proyek interdisipliner semesteran</li>
                    <li>Kolaborasi lintas kelas</li>
                    <li>Presentasi hasil di depan panel</li>
                    <li>Portofolio proyek digital</li>
                </ul>
            </div>
            
            <div class="kurikulum-card">
                <h3><i class="fas fa-flask"></i> STEM Education</h3>
                <p>Pendekatan terintegrasi antara Sains, Teknologi, Teknik, dan Matematika</p>
                <ul>
                    <li>Laboratorium sains mutakhir</li>
                    <li>Workshop robotik dan IoT</li>
                    <li>Kompetisi STEM tahunan</li>
                    <li>Kerjasama dengan STEM Center</li>
                </ul>
            </div>
            
            <div class="kurikulum-card">
                <h3><i class="fas fa-heart"></i> Pendidikan Karakter</h3>
                <p>Pengembangan nilai-nilai positif melalui program terstruktur</p>
                <ul>
                    <li>Refleksi mingguan</li>
                    <li>Program mentoring</li>
                    <li>Layanan masyarakat</li>
                    <li>Pengembangan kecerdasan emosi</li>
                </ul>
            </div>
        </div>
    </main>

    {{-- Footer --}}
    @include ('home.template.footer')
    
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.kurikulum-card');
            
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