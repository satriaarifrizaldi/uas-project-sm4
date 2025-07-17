<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah SMAN 23 Batam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2e7d32;
            --secondary-color: #81c784;
            --accent-color: #388e3c;
            --light-color: #f5f5f5;
            --dark-color: #333;
            --text-color: #424242;
            --primary: #2e7d32;
            --secondary: #81c784;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Hero Section */
        .history-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 5rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .history-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1588072432836-e10032774350?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        
        .history-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .history-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        .history-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }
        
        /* Timeline Section */
        .history-timeline {
            padding: 60px 0;
        }
        
        .timeline-container {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .timeline-container::before {
            content: '';
            position: absolute;
            width: 6px;
            background-color: var(--secondary-color);
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
            border-radius: 10px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            margin-bottom: 30px;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-content {
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.05);
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .timeline-content::before {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            top: 30px;
            background-color: white;
            transform: rotate(45deg);
            box-shadow: 5px -5px 25px rgba(0,0,0,0.05);
        }
        
        .timeline-item:nth-child(even) .timeline-content::before {
            left: -10px;
            right: auto;
            box-shadow: -5px 5px 25px rgba(0,0,0,0.05);
        }
        
        .timeline-date {
            color: var(--primary-color);
            font-weight: bold;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .timeline-date i {
            margin-right: 10px;
            font-size: 1.2rem;
        }
        
        .timeline-content h3 {
            margin-bottom: 15px;
            color: var(--primary-color);
        }
        
        .timeline-content ul {
            padding-left: 20px;
        }
        
        .timeline-content li {
            margin-bottom: 8px;
        }
        
        .timeline-item .circle {
            position: absolute;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background-color: var(--accent-color);
            border: 5px solid var(--secondary-color);
            top: 20px;
            right: -12px;
            z-index: 1;
        }
        
        .timeline-item:nth-child(even) .circle {
            left: -12px;
            right: auto;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
            color: var(--primary-color);
        }
        
        .section-title h2 {
            font-size: 2rem;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            width: 670px;
            height: 3px;
            background-color: var(--accent-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        @media screen and (max-width: 768px) {
            .timeline-container::before {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
            
            .timeline-content::before {
                left: -10px;
                right: auto;
            }
            
            .timeline-item .circle {
                left: 18px;
                right: auto;
            }
            
            .timeline-item:nth-child(even) .circle {
                left: 18px;
            }
            
            .section-title h2::after {
                width: 80%;
            }
            
            .history-hero h1 {
                font-size: 2.2rem;
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- {{-- Header --}} -->
    <?php include 'template/header.html' ?>

    {{-- Hero Section --}}
    <section class="history-hero">
        <div class="history-hero-content">
            <h1>
                <i class="fas fa-landmark"></i>
                Sejarah SMAN 23 Batam
            </h1>
            <p>Perjalanan panjang membangun pendidikan berkualitas di Kota Batam sejak 2018 hingga sekarang</p>
        </div>
    </section>
    
    {{-- Timeline Section --}}
    <section class="history-timeline">
        <div class="container">
            <div class="section-title">
                <h2>Sejarah Perkembangan SMA Negeri 23 Batam</h2>
            </div>
            
            <div class="timeline-container">
                <!-- Item 1 -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-calendar-alt"></i> Juni-Juli 2018
                        </div>
                        <h3>Awal Berdiri</h3>
                        <ul>
                            <li>SK pendirian dan izin operasional diterbitkan tanggal 21 Juni 2018 oleh Kemendikbud RI</li>
                            <li>Fase awal (Juli 2018) menumpang di gedung SMAN 5 Sagulung</li>
                            <li>Menampung sekitar 180 siswa (66 IPA & 114 IPS) dengan sistem shift</li>
                        </ul>
                    </div>
                    <div class="circle"></div>
                </div>
                
                <!-- Item 2 -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-building"></i> 2018-2019
                        </div>
                        <h3>Masa Transisi & Pembangunan</h3>
                        <ul>
                            <li>Hanya 5 ruang kelas untuk ±480 siswa</li>
                            <li>Kondisi listrik dan air masih menumpang dari warga</li>
                            <li>Guru honorer mendominasi tenaga pengajar</li>
                        </ul>
                    </div>
                    <div class="circle"></div>
                </div>
                
                <!-- Item 3 -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-school"></i> 2019
                        </div>
                        <h3>Peresmian Gedung Mandiri</h3>
                        <ul>
                            <li>Resmi pindah ke gedung baru di Taman Lestari, Kelurahan Kibing</li>
                            <li>Sekolah berdiri di atas lahan seluas ±10.000 m²</li>
                            <li>Dilengkapi sistem listrik PLN dan koneksi internet</li>
                        </ul>
                    </div>
                    <div class="circle"></div>
                </div>
                
                <!-- Item 4 -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-award"></i> November 2019
                        </div>
                        <h3>Akreditasi & Penguatan Program</h3>
                        <ul>
                            <li>Meraih akreditasi "B" berdasarkan SK BAN-S/M No. 1339</li>
                            <li>Dikenal sebagai sekolah "Bestari" - membangun generasi beriman, cerdas, terampil, mandiri</li>
                            <li>Program unggulan: Tafsi'ul Qur'an & Hafalan Juz (target 1-6 juz)</li>
                        </ul>
                    </div>
                    <div class="circle"></div>
                </div>
                
                <!-- Item 5 -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-users"></i> 2018-2019
                        </div>
                        <h3>Dinamika & Komunitas Awal</h3>
                        <ul>
                            <li>PPDB 2018: lebih dari 200 calon siswa daftar dalam 4 hari</li>
                            <li>Hanya mampu menampung 108 siswa menunjukkan antusiasme tinggi</li>
                            <li>Strategis melayani kebutuhan pendidikan di kawasan Batuaji</li>
                        </ul>
                    </div>
                    <div class="circle"></div>
                </div>
                
                <!-- Item 6 -->
                <div class="timeline-item">
                    <div class="timeline-content">
                        <div class="timeline-date">
                            <i class="fas fa-trophy"></i> 2021-2025
                        </div>
                        <h3>Capaian & Transformasi Terkini</h3>
                        <ul>
                            <li>Pembangunan 3 lantai + 8 RKB (IPA, UKS, laboratorium)</li>
                            <li>Program Qur'ani & Bahasa Arab berhasil di OBA nasional</li>
                            <li>Infrastruktur lengkap dengan berbagai fasilitas pendukung</li>
                        </ul>
                    </div>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Footer --}}
    @include ('home.template.footer')
</body>
</html>