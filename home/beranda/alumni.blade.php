<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumni - SMANDUTI</title>
    <style>
        :root {
            --primary: #1e40af;
            --secondary: #1e3a8a;
            --accent: #3b82f6;
            --light: #f8fafc;
            --dark: #1e293b;
            --gray: #64748b;
            --light-gray: #e2e8f0;
        }
        
        .alumni-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 8rem 1rem 6rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            clip-path: polygon(0 0, 100% 0, 100% 90%, 0 100%);
        }
        
        .alumni-hero::before {
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
        
        .alumni-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .alumni-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            line-height: 1.2;
        }
        
        .alumni-hero p {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto 3rem;
            opacity: 0.9;
        }
        
        .alumni-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 1rem;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 4rem;
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
        
        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 1rem auto 0;
            font-size: 1.1rem;
        }
        
        .alumni-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }
        
        .stat-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 0.5rem;
            line-height: 1;
        }
        
        .stat-label {
            color: var(--gray);
            font-size: 1.1rem;
        }
        
        .alumni-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .alumni-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .alumni-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .alumni-img {
            height: 280px;
            overflow: hidden;
            position: relative;
        }
        
        .alumni-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .alumni-card:hover .alumni-img img {
            transform: scale(1.05);
        }
        
        .alumni-year {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--primary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
        }
        
        .alumni-content {
            padding: 1.5rem;
        }
        
        .alumni-content h3 {
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .alumni-content .alumni-position {
            color: var(--accent);
            font-weight: 600;
            margin-bottom: 0.75rem;
            display: block;
        }
        
        .alumni-content p {
            color: var(--gray);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .alumni-social {
            display: flex;
            gap: 0.75rem;
        }
        
        .social-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark);
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--accent);
            color: white;
            transform: translateY(-2px);
        }
        
        .testimonial-section {
            background: linear-gradient(135deg, #f8fafc, #e2e8f0);
            padding: 6rem 1rem;
            margin-top: 4rem;
            clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%);
        }
        
        .testimonial-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .testimonial-card::before {
            content: '"';
            position: absolute;
            top: 1rem;
            left: 1.5rem;
            font-size: 5rem;
            color: var(--light-gray);
            font-family: serif;
            line-height: 1;
            z-index: 0;
        }
        
        .testimonial-content {
            position: relative;
            z-index: 1;
        }
        
        .testimonial-text {
            font-size: 1.1rem;
            color: var(--dark);
            line-height: 1.7;
            margin-bottom: 1.5rem;
            font-style: italic;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }
        
        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            color: var(--dark);
            margin-bottom: 0.25rem;
        }
        
        .author-info p {
            color: var(--gray);
            font-size: 0.9rem;
        }
        
        .cta-section {
            background: var(--primary);
            color: white;
            padding: 5rem 1rem;
            text-align: center;
        }
        
        .cta-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }
        
        .cta-section p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        .cta-button {
            display: inline-block;
            background: white;
            color: var(--primary);
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid white;
        }
        
        .cta-button:hover {
            background: transparent;
            color: white;
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .alumni-hero {
                padding: 6rem 1rem 4rem;
                clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
            }
            
            .alumni-hero h1 {
                font-size: 2.5rem;
            }
            
            .alumni-hero p {
                font-size: 1.1rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .testimonial-section {
                clip-path: polygon(0 5%, 100% 0, 100% 95%, 0 100%);
                padding: 4rem 1rem;
            }
            
            .cta-section h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Content --}}
    <section class="alumni-hero">
        <div class="alumni-hero-content">
            <h1>Jejaring Alumni SMANDUTI</h1>
            <p>Menjalin silaturahmi dan membangun jaringan dengan alumni SMANDUTI yang telah sukses di berbagai bidang</p>
        </div>
    </section>
    
    <div class="alumni-container">
        <div class="section-title">
            <h2>Alumni Berprestasi</h2>
            <p>Berikut beberapa alumni SMANDUTI yang telah mencapai kesuksesan di berbagai bidang profesional</p>
        </div>
        
        <div class="alumni-stats">
            <div class="stat-card">
                <div class="stat-number">5.000+</div>
                <div class="stat-label">Total Alumni</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">120+</div>
                <div class="stat-label">Perusahaan Mitra</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">30+</div>
                <div class="stat-label">Negara Tujuan</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">150+</div>
                <div class="stat-label">Alumni Berprestasi</div>
            </div>
        </div>
        
        <div class="alumni-grid">
            <!-- Alumni 1 -->
            <div class="alumni-card">
                <div class="alumni-img">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Budi Santoso">
                    <div class="alumni-year">Angkatan 2010</div>
                </div>
                <div class="alumni-content">
                    <h3>Budi Santoso</h3>
                    <span class="alumni-position">Founder & CEO TechVision</span>
                    <p>Lulusan SMANDUTI yang mendirikan perusahaan teknologi dengan valuasi $50 juta dan mempekerjakan 200+ karyawan.</p>
                    <div class="alumni-social">
                        <a href="#" class="social-icon">in</a>
                        <a href="#" class="social-icon">tw</a>
                        <a href="#" class="social-icon">ig</a>
                    </div>
                </div>
            </div>
            
            <!-- Alumni 2 -->
            <div class="alumni-card">
                <div class="alumni-img">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=688&q=80" alt="Dewi Lestari">
                    <div class="alumni-year">Angkatan 2012</div>
                </div>
                <div class="alumni-content">
                    <h3>Dewi Lestari</h3>
                    <span class="alumni-position">Dokter Spesialis Jantung</span>
                    <p>Alumni berprestasi yang kini menjadi dokter spesialis jantung di RS Harapan Kita dan peneliti di bidang kardiologi.</p>
                    <div class="alumni-social">
                        <a href="#" class="social-icon">in</a>
                        <a href="#" class="social-icon">fb</a>
                    </div>
                </div>
            </div>
            
            <!-- Alumni 3 -->
            <div class="alumni-card">
                <div class="alumni-img">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Rizky Pratama">
                    <div class="alumni-year">Angkatan 2015</div>
                </div>
                <div class="alumni-content">
                    <h3>Rizky Pratama</h3>
                    <span class="alumni-position">Atlet Nasional Bulutangkis</span>
                    <p>Peraih medali emas SEA Games dan peringkat 20 dunia di cabang bulutangkis tunggal putra.</p>
                    <div class="alumni-social">
                        <a href="#" class="social-icon">in</a>
                        <a href="#" class="social-icon">ig</a>
                        <a href="#" class="social-icon">yt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="testimonial-section">
        <div class="testimonial-container">
            <div class="section-title">
                <h2>Kata Mereka</h2>
                <p>Testimoni alumni tentang pengalaman mereka di SMANDUTI</p>
            </div>
            
            <div class="testimonial-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text">SMANDUTI memberikan fondasi yang kuat untuk karir saya. Guru-guru yang inspiratif dan lingkungan belajar yang mendukung membantu saya meraih mimpi kuliah di luar negeri.</p>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Anita Rahayu">
                            </div>
                            <div class="author-info">
                                <h4>Anita Rahayu</h4>
                                <p>Angkatan 2008, Data Scientist di Google</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text">Ekstrakurikuler robotik di SMANDUTI membuka jalan bagi saya untuk berkecimpung di dunia teknologi. Kini saya memimpin tim engineering di startup unicorn.</p>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Fajar Wijaya">
                            </div>
                            <div class="author-info">
                                <h4>Fajar Wijaya</h4>
                                <p>Angkatan 2011, CTO GoTech</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p class="testimonial-text">Nilai-nilai disiplin dan kerja keras yang diajarkan di SMANDUTI sangat membantu saya dalam berkarir di militer. Sekarang saya menjadi perwira TNI Angkatan Darat.</p>
                        <div class="testimonial-author">
                            <div class="author-img">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Andika Kurniawan">
                            </div>
                            <div class="author-info">
                                <h4>Andika Kurniawan</h4>
                                <p>Angkatan 2009, Letkol TNI AD</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cta-section">
        <div class="cta-container">
            <h2>Bergabung dengan Jejaring Alumni</h2>
            <p>Daftarkan diri Anda untuk terhubung dengan ribuan alumni SMANDUTI lainnya dan dapatkan berbagai manfaat eksklusif</p>
            <a href="#" class="cta-button">Daftar Sekarang</a>
        </div>
    </section>

    {{-- Footer --}}
    @include ('home.template.footer')
    
    <script>
        // Simple animation for stat cards
        document.querySelectorAll('.stat-card').forEach((card, index) => {
            card.style.transitionDelay = `${index * 0.1}s`;
        });
    </script>
</body>
</html>