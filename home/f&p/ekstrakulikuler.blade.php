<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ekstrakulikuler - SMANDUTI</title>
    <style>
        :root {
            --primary: #1e40af;
            --secondary: #1e3a8a;
            --accent: #3b82f6;
            --light: #f8fafc;
            --dark: #1e293b;
        }
        
        .ekskul-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 5rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .ekskul-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1541178735493-479c1a27ed24?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        
        .ekskul-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .ekskul-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .ekskul-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }
        
        .ekskul-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1rem;
        }
        
        .ekskul-section-title {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .ekskul-section-title h2 {
            font-size: 2rem;
            color: var(--primary);
            position: relative;
            display: inline-block;
            padding-bottom: 0.5rem;
        }
        
        .ekskul-section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--accent);
        }
        
        .ekskul-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .ekskul-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .ekskul-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
        
        .ekskul-card-img {
            height: 200px;
            overflow: hidden;
        }
        
        .ekskul-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .ekskul-card:hover .ekskul-card-img img {
            transform: scale(1.05);
        }
        
        .ekskul-card-content {
            padding: 1.5rem;
        }
        
        .ekskul-card-content h3 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .ekskul-card-content p {
            color: #64748b;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }
        
        .ekskul-card-content .jadwal {
            display: flex;
            align-items: center;
            color: var(--primary);
            font-size: 0.85rem;
            margin-bottom: 0.5rem;
        }
        
        .ekskul-card-content .pembina {
            display: flex;
            align-items: center;
            color: var(--dark);
            font-size: 0.85rem;
        }
        
        .icon {
            margin-right: 0.5rem;
        }
        
        .ekskul-categories {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .category-btn {
            padding: 0.5rem 1.5rem;
            background: white;
            color: var(--primary);
            border: 1px solid var(--primary);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .category-btn:hover, .category-btn.active {
            background: var(--primary);
            color: white;
        }
        
        @media (max-width: 768px) {
            .ekskul-hero h1 {
                font-size: 2rem;
            }
            
            .ekskul-hero p {
                font-size: 1rem;
            }
            
            .ekskul-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Content --}}
    <section class="ekskul-hero">
        <div class="ekskul-hero-content">
            <h1>Ekstrakulikuler SMANDUTI</h1>
            <p>Kembangkan bakat dan minatmu melalui berbagai kegiatan ekstrakulikuler yang kami sediakan. Temukan passionmu dan raih prestasi!</p>
        </div>
    </section>
    
    <div class="ekskul-container">
        <div class="ekskul-section-title">
            <h2>Pilihan Ekstrakulikuler</h2>
            <p>Berbagai kegiatan ekstrakulikuler untuk pengembangan diri siswa</p>
        </div>
        
        <div class="ekskul-categories">
            <button class="category-btn active">Semua</button>
            <button class="category-btn">Olahraga</button>
            <button class="category-btn">Seni</button>
            <button class="category-btn">Sains</button>
            <button class="category-btn">Bahasa</button>
        </div>
        
        <div class="ekskul-grid">
            <!-- Ekskul 1 -->
            <div class="ekskul-card">
                <div class="ekskul-card-img">
                    <img src="https://images.unsplash.com/photo-1547347298-4074fc3086f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Futsal">
                </div>
                <div class="ekskul-card-content">
                    <h3>Futsal</h3>
                    <p>Mengembangkan keterampilan bermain futsal dan kerja sama tim melalui latihan rutin dan kompetisi.</p>
                    <div class="jadwal">
                        <span class="icon">📅</span>
                        <span>Senin & Kamis, 15.00 - 17.00</span>
                    </div>
                    <div class="pembina">
                        <span class="icon">👤</span>
                        <span>Bpk. Ahmad Supriyadi</span>
                    </div>
                </div>
            </div>
            
            <!-- Ekskul 2 -->
            <div class="ekskul-card">
                <div class="ekskul-card-img">
                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Paduan Suara">
                </div>
                <div class="ekskul-card-content">
                    <h3>Paduan Suara</h3>
                    <p>Mengasah kemampuan vokal dan harmonisasi dalam bernyanyi secara kelompok dengan berbagai genre musik.</p>
                    <div class="jadwal">
                        <span class="icon">📅</span>
                        <span>Selasa & Jumat, 14.00 - 16.00</span>
                    </div>
                    <div class="pembina">
                        <span class="icon">👤</span>
                        <span>Ibu. Dian Permatasari</span>
                    </div>
                </div>
            </div>
            
            <!-- Ekskul 3 -->
            <div class="ekskul-card">
                <div class="ekskul-card-img">
                    <img src="https://images.unsplash.com/photo-1551033406-611cf9a28f67?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Robotik">
                </div>
                <div class="ekskul-card-content">
                    <h3>Robotik</h3>
                    <p>Belajar merancang, membangun, dan memprogram robot untuk berbagai keperluan dan kompetisi.</p>
                    <div class="jadwal">
                        <span class="icon">📅</span>
                        <span>Rabu & Sabtu, 13.00 - 15.00</span>
                    </div>
                    <div class="pembina">
                        <span class="icon">👤</span>
                        <span>Bpk. Rizky Aditya</span>
                    </div>
                </div>
            </div>
            
            <!-- Ekskul 4 -->
            <div class="ekskul-card">
                <div class="ekskul-card-img">
                    <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Debat Bahasa Inggris">
                </div>
                <div class="ekskul-card-content">
                    <h3>Debat Bahasa Inggris</h3>
                    <p>Meningkatkan kemampuan berbahasa Inggris dan teknik debat untuk kompetisi tingkat regional dan nasional.</p>
                    <div class="jadwal">
                        <span class="icon">📅</span>
                        <span>Senin & Kamis, 14.00 - 16.00</span>
                    </div>
                    <div class="pembina">
                        <span class="icon">👤</span>
                        <span>Ibu. Sarah Johnson</span>
                    </div>
                </div>
            </div>
            
            <!-- Ekskul 5 -->
            <div class="ekskul-card">
                <div class="ekskul-card-img">
                    <img src="https://images.unsplash.com/photo-1567942712661-82b9b407abbf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80" alt="Teater">
                </div>
                <div class="ekskul-card-content">
                    <h3>Teater</h3>
                    <p>Menyalurkan kreativitas melalui seni peran, produksi panggung, dan pertunjukan drama.</p>
                    <div class="jadwal">
                        <span class="icon">📅</span>
                        <span>Rabu & Sabtu, 15.00 - 17.00</span>
                    </div>
                    <div class="pembina">
                        <span class="icon">👤</span>
                        <span>Bpk. Budi Santoso</span>
                    </div>
                </div>
            </div>
            
            <!-- Ekskul 6 -->
            <div class="ekskul-card">
                <div class="ekskul-card-img">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Pramuka">
                </div>
                <div class="ekskul-card-content">
                    <h3>Pramuka</h3>
                    <p>Membangun karakter, kepemimpinan, dan keterampilan hidup melalui kegiatan kepramukaan.</p>
                    <div class="jadwal">
                        <span class="icon">📅</span>
                        <span>Sabtu, 07.00 - 12.00</span>
                    </div>
                    <div class="pembina">
                        <span class="icon">👤</span>
                        <span>Bpk. Agus Setiawan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include ('home.template.footer')
    
    <script>
        // Simple filtering functionality
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                document.querySelectorAll('.category-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Add active class to clicked button
                button.classList.add('active');
                
                // Here you would typically filter the ekskul cards
                // For now we'll just log the category
                console.log('Filter by:', button.textContent);
            });
        });
    </script>
</body>
</html>