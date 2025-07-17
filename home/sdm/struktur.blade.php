<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struktur Organisasi - SMAN 23 Batam</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2c3e50;
            --secondary: #3498db;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
            --gold: #f1c40f;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--dark);
            background-color: #f9f9f9;
            line-height: 1.6;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 4rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .hero-icon {
            width: 120px;
            height: 120px;
            margin: 0 auto 1.5rem;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
        }
        
        .hero-icon svg {
            width: 60px;
            height: 60px;
        }
        
        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 1.5rem;
            opacity: 0.9;
        }
        
        .structure-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 20px;
        }
        
        .page-title {
            text-align: center;
            color: var(--primary);
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .page-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--secondary);
        }
        
        .org-chart {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .tier {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            width: 100%;
            margin-bottom: 40px;
        }
        
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            padding: 20px;
            margin: 0 15px 30px;
            width: 220px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            z-index: 1;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        
        .tier-1 .card {
            background: var(--primary);
            color: white;
        }
        
        .tier-2 .card {
            background: var(--secondary);
            color: white;
        }
        
        .tier-3 .card {
            background: var(--light);
            border-top: 4px solid var(--secondary);
        }
        
        .tier-4 .card {
            background: white;
            border-top: 4px solid #95a5a6;
        }
        
        .card h3 {
            margin-top: 0;
            font-size: 1.1rem;
        }
        
        .card p {
            margin-bottom: 0;
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .connector {
            position: relative;
            height: 40px;
            width: 2px;
            background: #bdc3c7;
            margin: 0 auto;
        }
        
        .connector:before, .connector:after {
            content: '';
            position: absolute;
            width: 20px;
            height: 2px;
            background: #bdc3c7;
            top: 0;
        }
        
        .connector:before {
            left: -20px;
        }
        
        .connector:after {
            right: -20px;
        }
        
        .department-container {
            margin-top: 50px;
        }
        
        .department-title {
            color: var(--primary);
            border-left: 4px solid var(--accent);
            padding-left: 15px;
            margin: 30px 0 20px;
        }
        
        .department-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .department-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            padding: 25px;
            transition: all 0.3s;
            border-top: 3px solid var(--secondary);
        }
        
        .department-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.12);
        }
        
        .department-card h4 {
            color: var(--primary);
            margin-top: 0;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            font-size: 1.2rem;
        }
        
        .department-card ul {
            padding-left: 20px;
            margin-bottom: 0;
        }
        
        .department-card li {
            margin-bottom: 8px;
        }
        
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }
        
        .shape {
            position: absolute;
            opacity: 0.1;
            border-radius: 50%;
        }
        
        .shape-1 {
            width: 200px;
            height: 200px;
            background: var(--gold);
            top: -50px;
            left: -50px;
        }
        
        .shape-2 {
            width: 300px;
            height: 300px;
            background: var(--accent);
            bottom: -100px;
            right: -100px;
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .tier {
                flex-direction: column;
                align-items: center;
            }
            
            .card {
                margin-bottom: 20px;
            }
            
            .connector {
                display: none;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
        </div>
        <div class="hero-content">
            <div class="hero-icon">
                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 21H5C4.44772 21 4 20.5523 4 20V11L12 5L20 11V20C20 20.5523 19.5523 21 19 21Z" stroke="white" stroke-width="1.5"/>
                    <path d="M12 7V12" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                    <circle cx="12" cy="14" r="1.5" fill="white"/>
                    <path d="M8 14V17" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M16 14V17" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                    <circle cx="8" cy="19" r="1" fill="white"/>
                    <circle cx="12" cy="19" r="1" fill="white"/>
                    <circle cx="16" cy="19" r="1" fill="white"/>
                </svg>
            </div>
            <h1 class="hero-title">Struktural SMA Negeri 23 Batam</h1>
            <p class="hero-subtitle">Hierarki dan departemen SMAN 23 Batam untuk tahun ajaran 2025/2026</p>
        </div>
    </section>

    <div class="structure-container">
        <h2 class="page-title">Struktur Kepemimpinan</h2>
        
        <div class="org-chart">
            <!-- Tier 1: Kepala Sekolah -->
            <div class="tier tier-1">
                <div class="card">
                    <h3>Dr. H. Ahmad Fauzi, M.Pd</h3>
                    <p>Kepala Sekolah</p>
                </div>
            </div>
            
            <div class="connector"></div>
            
            <!-- Tier 2: Wakil Kepala Sekolah -->
            <div class="tier tier-2">
                <div class="card">
                    <h3>Drs. Bambang Sutrisno</h3>
                    <p>Wakasek Kurikulum</p>
                </div>
                <div class="card">
                    <h3>Dra. Siti Aminah</h3>
                    <p>Wakasek Kesiswaan</p>
                </div>
                <div class="card">
                    <h3>Drs. Hendra Gunawan</h3>
                    <p>Wakasek Sarana Prasarana</p>
                </div>
                <div class="card">
                    <h3>Dra. Rina Marlina</h3>
                    <p>Wakasek Humas</p>
                </div>
            </div>
            
            <div class="connector"></div>
            
            <!-- Tier 3: Koordinator -->
            <div class="tier tier-3">
                <div class="card">
                    <h3>Dian Pertiwi, S.Pd</h3>
                    <p>Koordinator Kurikulum</p>
                </div>
                <div class="card">
                    <h3>Rudi Hermawan, S.Pd</h3>
                    <p>Koordinator Kesiswaan</p>
                </div>
                <div class="card">
                    <h3>Agus Salim, S.T</h3>
                    <p>Koordinator Sarpras</p>
                </div>
                <div class="card">
                    <h3>Fitriani, S.Pd</h3>
                    <p>Koordinator Humas</p>
                </div>
                <div class="card">
                    <h3>Nurul Hidayati, S.Pd</h3>
                    <p>Koordinator BK</p>
                </div>
            </div>
            
            <div class="connector"></div>
            
            <!-- Tier 4: Staff -->
            <div class="tier tier-4">
                <div class="card">
                    <h3>Tim Pengembang Kurikulum</h3>
                    <p>5 Staff</p>
                </div>
                <div class="card">
                    <h3>Tim Pembina Kesiswaan</h3>
                    <p>7 Staff</p>
                </div>
                <div class="card">
                    <h3>Tim Sarana Prasarana</h3>
                    <p>4 Staff</p>
                </div>
                <div class="card">
                    <h3>Tim Humas</h3>
                    <p>3 Staff</p>
                </div>
                <div class="card">
                    <h3>Tim BK</h3>
                    <p>4 Konselor</p>
                </div>
            </div>
        </div>
        
        <div class="department-container">
            <h2 class="department-title">Struktur Departemen</h2>
            
            <div class="department-grid">
                <div class="department-card">
                    <h4>Departemen Kurikulum</h4>
                    <ul>
                        <li>Koordinator: Dian Pertiwi, S.Pd</li>
                        <li>Staff Kurikulum (5 orang)</li>
                        <li>Koordinator Mata Pelajaran (12 orang)</li>
                        <li>Guru Mata Pelajaran (45 orang)</li>
                    </ul>
                </div>
                
                <div class="department-card">
                    <h4>Departemen Kesiswaan</h4>
                    <ul>
                        <li>Koordinator: Rudi Hermawan, S.Pd</li>
                        <li>Pembina OSIS</li>
                        <li>Pembina Ekstrakurikuler (8 bidang)</li>
                        <li>Tim Disiplin Siswa</li>
                    </ul>
                </div>
                
                <div class="department-card">
                    <h4>Bimbingan Konseling</h4>
                    <ul>
                        <li>Koordinator: Nurul Hidayati, S.Pd</li>
                        <li>Konselor Kelas X (2 orang)</li>
                        <li>Konselor Kelas XI (2 orang)</li>
                        <li>Konselor Kelas XII (2 orang)</li>
                    </ul>
                </div>
                
                <div class="department-card">
                    <h4>Departemen Sarana Prasarana</h4>
                    <ul>
                        <li>Koordinator: Agus Salim, S.T</li>
                        <li>Tim Laboratorium</li>
                        <li>Tim Perpustakaan</li>
                        <li>Tim Teknologi Informasi</li>
                        <li>Tim Kebersihan dan Keamanan</li>
                    </ul>
                </div>
                
                <div class="department-card">
                    <h4>Departemen Hubungan Masyarakat</h4>
                    <ul>
                        <li>Koordinator: Fitriani, S.Pd</li>
                        <li>Tim Publikasi</li>
                        <li>Tim Komunikasi Orang Tua</li>
                        <li>Tim Kerjasama dengan Instansi</li>
                    </ul>
                </div>
                
                <div class="department-card">
                    <h4>Guru Mata Pelajaran</h4>
                    <ul>
                        <li>Kelompok Bahasa (8 guru)</li>
                        <li>Kelompok Matematika (6 guru)</li>
                        <li>Kelompok IPA (7 guru)</li>
                        <li>Kelompok IPS (7 guru)</li>
                        <li>Kelompok Agama (3 guru)</li>
                        <li>Kelompok PJOK (4 guru)</li>
                        <li>Kelompok Seni Budaya (3 guru)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include ('home.template.footer')
    
</body>
</html>