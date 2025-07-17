<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman - SMAN 23 Batam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2e7d32;
            --secondary-color: #81c784;
            --accent-color: #388e3c;
            --light-color: #f5f5f5;
            --dark-color: #333;
            --text-color: #424242;
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
        
        /* Hero Section */
        .pengumuman-hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 5rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .pengumuman-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80') no-repeat center center/cover;
            opacity: 0.2;
            z-index: 0;
        }
        
        .pengumuman-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .pengumuman-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        .pengumuman-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }
        
        /* Main Content */
        .pengumuman-container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }
        
        .pengumuman-list {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .pengumuman-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .pengumuman-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }
        
        .pengumuman-header {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .pengumuman-date {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
        }
        
        .pengumuman-badge {
            background-color: var(--accent-color);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .pengumuman-body {
            padding: 20px;
        }
        
        .pengumuman-title {
            font-size: 1.3rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .pengumuman-desc {
            margin-bottom: 15px;
            color: #555;
        }
        
        .pengumuman-footer {
            padding: 0 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .pengumuman-author {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            color: #666;
        }
        
        .pengumuman-link {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        .pengumuman-link:hover {
            text-decoration: underline;
        }
        
        .search-filter {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .search-box {
            flex: 1;
            min-width: 250px;
            position: relative;
        }
        
        .search-box input {
            width: 100%;
            padding: 12px 15px 12px 40px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
        }
        
        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #777;
        }
        
        .filter-select {
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            background-color: white;
        }
        
        @media screen and (max-width: 768px) {
            .pengumuman-hero h1 {
                font-size: 2.2rem;
                flex-direction: column;
                gap: 10px;
            }
            
            .pengumuman-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .search-filter {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    {{-- Header --}}
    @include ('home.template.header')

    {{-- Hero Section --}}
    <section class="pengumuman-hero">
        <div class="pengumuman-hero-content">
            <h1>
                <i class="fas fa-bullhorn"></i>
                Pengumuman Terkini
            </h1>
            <p>Informasi terbaru seputar kegiatan, agenda sekolah, dan pengumuman penting SMAN 23 Batam</p>
        </div>
    </section>

    {{-- Main Content --}}
    <div class="pengumuman-container">
        <div class="search-filter">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Cari pengumuman...">
            </div>
            <select class="filter-select">
                <option value="">Semua Kategori</option>
                <option value="academic">Akademik</option>
                <option value="event">Kegiatan</option>
                <option value="important">Penting</option>
                <option value="other">Lainnya</option>
            </select>
        </div>
        
        <div class="pengumuman-list">
            <!-- Announcement 1 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        15 Juli 2023
                    </div>
                    <span class="pengumuman-badge">Penting</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Penerimaan Peserta Didik Baru Tahun Ajaran 2023/2024</h3>
                    <p class="pengumuman-desc">Pendaftaran PPDB gelombang kedua akan dibuka mulai tanggal 20-25 Juli 2023. Persyaratan dan formulir dapat diunduh di website resmi sekolah.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-tie"></i>
                        Panitia PPDB
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 2 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        10 Juli 2023
                    </div>
                    <span class="pengumuman-badge">Kegiatan</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Kegiatan Masa Pengenalan Lingkungan Sekolah (MPLS)</h3>
                    <p class="pengumuman-desc">MPLS akan dilaksanakan pada 17-19 Juli 2023. Peserta diwajibkan memakai seragam SMP dan membawa perlengkapan yang telah ditentukan.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-tie"></i>
                        OSIS SMAN 23
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 3 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        5 Juli 2023
                    </div>
                    <span class="pengumuman-badge">Akademik</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Pembagian Kelas dan Jadwal Pelajaran Semester Ganjil</h3>
                    <p class="pengumuman-desc">Daftar pembagian kelas dan jadwal pelajaran semester ganjil 2023/2024 dapat diakses melalui portal siswa mulai tanggal 12 Juli 2023.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-tie"></i>
                        Kurikulum
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 4 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        28 Juni 2023
                    </div>
                    <span class="pengumuman-badge">Lomba</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Seleksi Tim Olimpiade Matematika Tingkat Kota</h3>
                    <p class="pengumuman-desc">Pendaftaran seleksi tim olimpiade matematika dibuka hingga 5 Juli 2023. Tes seleksi akan dilaksanakan pada 8 Juli 2023 di ruang 301.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-tie"></i>
                        Pembina Olimpiade
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 5 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        20 Juni 2023
                    </div>
                    <span class="pengumuman-badge">Ekstrakurikuler</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Pembukaan Pendaftaran Ekstrakurikuler Baru</h3>
                    <p class="pengumuman-desc">Telah dibuka pendaftaran untuk ekstrakurikuler Robotik dan Karya Ilmiah Remaja. Pendaftaran dibuka hingga 30 Juni 2023.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-tie"></i>
                        Pembina Ekskul
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 6 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        15 Juni 2023
                    </div>
                    <span class="pengumuman-badge">Beasiswa</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Program Beasiswa Prestasi Tahun 2023</h3>
                    <p class="pengumuman-desc">Pendaftaran beasiswa prestasi untuk siswa berprestasi akademik/non-akademik dibuka hingga 30 Juni 2023. Syarat dan formulir di ruang BK.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-tie"></i>
                        BK SMAN 23
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 7 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        10 Juni 2023
                    </div>
                    <span class="pengumuman-badge">Perpustakaan</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Perpanjangan Jam Layanan Perpustakaan</h3>
                    <p class="pengumuman-desc">Mulai 15 Juni 2023, perpustakaan sekolah buka hingga pukul 16.00 WIB. Disediakan juga ruang baca yang lebih nyaman.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-tie"></i>
                        Pustakawan
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 8 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        5 Juni 2023
                    </div>
                    <span class="pengumuman-badge">Kesehatan</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Program Vaksinasi Rutin untuk Siswa</h3>
                    <p class="pengumuman-desc">Akan dilaksanakan vaksinasi Td dan HPV pada 12 Juni 2023 di ruang UKS. Bawa buku kesehatan dan formulir persetujuan orang tua.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-md"></i>
                        Tim UKS
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 9 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        1 Juni 2023
                    </div>
                    <span class="pengumuman-badge">Olahraga</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Turnamen Futsal Antarkelas 2023</h3>
                    <p class="pengumuman-desc">Pendaftaran tim futsal per kelas dibuka hingga 10 Juni 2023. Technical meeting akan dilaksanakan pada 12 Juni 2023 di aula sekolah.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-running"></i>
                        Pembina Olahraga
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 10 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        25 Mei 2023
                    </div>
                    <span class="pengumuman-badge">Seni</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Audisi Pentas Seni Akhir Tahun</h3>
                    <p class="pengumuman-desc">Bagi siswa yang ingin tampil di Pentas Seni Akhir Tahun, audisi akan dilaksanakan pada 5-7 Juni 2023 di ruang kesenian.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-paint-brush"></i>
                        Pembina Seni
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 11 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        20 Mei 2023
                    </div>
                    <span class="pengumuman-badge">Akademik</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Program Remedial dan Pengayaan Semester Genap</h3>
                    <p class="pengumuman-desc">Jadwal remedial dan pengayaan untuk semester genap dapat dilihat di papan pengumuman sekolah. Dimulai 25 Mei - 5 Juni 2023.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-user-tie"></i>
                        Kurikulum
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 12 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        15 Mei 2023
                    </div>
                    <span class="pengumuman-badge">Kegiatan</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Kegiatan Bakti Sosial ke Panti Asuhan</h3>
                    <p class="pengumuman-desc">OSIS akan mengadakan bakti sosial ke Panti Asuhan Kasih Bunda pada 22 Mei 2023. Bagi yang ingin menyumbang bisa menghubungi bendahara kelas.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-hands-helping"></i>
                        OSIS SMAN 23
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 13 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        10 Mei 2023
                    </div>
                    <span class="pengumuman-badge">Teknologi</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Pelatihan Penggunaan Portal Pembelajaran Baru</h3>
                    <p class="pengumuman-desc">Akan diadakan pelatihan penggunaan portal pembelajaran baru untuk siswa pada 15 Mei 2023 di lab komputer. Daftar di guru TIK masing-masing kelas.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-laptop-code"></i>
                        Tim IT Sekolah
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 14 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        5 Mei 2023
                    </div>
                    <span class="pengumuman-badge">Lingkungan</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Program Jumat Bersih dan Hijau</h3>
                    <p class="pengumuman-desc">Setiap Jumat akan diadakan kegiatan bersih-bersih dan penanaman tanaman. Siswa diharap membawa alat kebersihan dan bibit tanaman.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-leaf"></i>
                        Tim Adiwiyata
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Announcement 15 -->
            <div class="pengumuman-card">
                <div class="pengumuman-header">
                    <div class="pengumuman-date">
                        <i class="far fa-calendar-alt"></i>
                        1 Mei 2023
                    </div>
                    <span class="pengumuman-badge">Umum</span>
                </div>
                <div class="pengumuman-body">
                    <h3 class="pengumuman-title">Perubahan Jam Masuk Sekolah</h3>
                    <p class="pengumuman-desc">Mulai 8 Mei 2023, jam masuk sekolah dimajukan 15 menit menjadi pukul 07.00 WIB untuk semua kelas. Harap diperhatikan.</p>
                </div>
                <div class="pengumuman-footer">
                    <div class="pengumuman-author">
                        <i class="fas fa-clock"></i>
                        Tata Usaha
                    </div>
                    <a href="#" class="pengumuman-link">
                        Selengkapnya
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include ('home.template.footer')
</body>
</html>