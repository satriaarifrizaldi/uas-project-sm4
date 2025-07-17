<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visi & Misi - SMAN 23 Batam</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2e7d32;
            --secondary-color: #81c784;
            --accent-color: #3498db;
            --light-color: #f5f5f5;
            --dark-color: #333;
            --text-color: #424242;
        }
        
        /* Hero Section */
        .visi-hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 5rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .visi-hero::before {
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
        
        .visi-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .visi-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }
        
        .visi-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }
        
        /* Main Content */
        .visi-misi-container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .section-title {
            color: var(--accent-color);
            border-bottom: 2px solid var(--accent-color);
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 22px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .section-title i {
            font-size: 1.5rem;
        }
        
        .visi-section, .misi-section, .tujuan-section {
            background-color: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .tujuan-section {
            background-color: #e8f4fc;
        }
        
        .visi-content {
            font-size: 18px;
            line-height: 1.6;
            text-align: center;
            font-weight: 500;
            color: #2c3e50;
        }
        
        .misi-list, .tujuan-list {
            padding-left: 20px;
        }
        
        .misi-list li, .tujuan-list li {
            margin-bottom: 15px;
            line-height: 1.5;
            color: #34495e;
        }
        
        @media screen and (max-width: 768px) {
            .visi-hero h1 {
                font-size: 2.2rem;
                flex-direction: column;
                gap: 10px;
            }
            
            .section-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }
        }
    </style>
</head>
<body>

    <!-- {{-- Header --}} -->
    <?php include './template/header.php' ?>


    {{-- Hero Section --}}
    <section class="visi-hero">
        <div class="visi-hero-content">
            <h1>
                <i class="fas fa-bullseye"></i>
                Visi & Misi SMAN 23 Batam
            </h1>
            <p>Pedoman dan arah pendidikan kami dalam membentuk generasi unggul dan berkarakter</p>
        </div>
    </section>

    {{-- Main Content --}}
    <div class="visi-misi-container">
        <div class="visi-section">
            <h2 class="section-title">
                <i class="fas fa-eye"></i>
                Visi
            </h2>
            <p class="visi-content">
                "Menjadi Sekolah Menengah Atas Unggulan yang Berkarakter, Berprestasi, dan Berwawasan Lingkungan 
                Berlandaskan Iman dan Taqwa pada Tahun 2025"
            </p>
        </div>
        
        <div class="misi-section">
            <h2 class="section-title">
                <i class="fas fa-list-check"></i>
                Misi
            </h2>
            <ol class="misi-list">
                <li>Menyelenggarakan pendidikan yang berkualitas untuk mengembangkan potensi akademik dan non-akademik peserta didik secara optimal.</li>
                <li>Menanamkan nilai-nilai karakter bangsa, disiplin, dan akhlak mulia berdasarkan iman dan taqwa.</li>
                <li>Mengembangkan budaya literasi dan keterampilan abad 21 (critical thinking, creativity, collaboration, communication) dalam pembelajaran.</li>
                <li>Mendorong peserta didik untuk berprestasi di bidang akademik, olahraga, seni, dan kompetisi lainnya.</li>
                <li>Menumbuhkan kesadaran warga sekolah akan pentingnya pelestarian lingkungan hidup.</li>
                <li>Membangun kerjasama yang harmonis antara sekolah, orang tua, dan masyarakat untuk mendukung keberhasilan pendidikan.</li>
                <li>Mengembangkan sarana prasarana pendidikan yang memadai dan berwawasan lingkungan.</li>
            </ol>
        </div>
        
        <div class="tujuan-section">
            <h2 class="section-title">
                <i class="fas fa-bullseye"></i>
                Tujuan
            </h2>
            <ol class="tujuan-list">
                <li>Mencapai rata-rata SNBP/SNBT di atas standar nasional.</li>
                <li>Menghasilkan lulusan yang berkarakter kuat dan berakhlak mulia.</li>
                <li>Memiliki minimal 5 program unggulan di bidang akademik dan non-akademik.</li>
                <li>Mencapai tingkat kepuasan warga sekolah dan masyarakat di atas 90%.</li>
                <li>Menjadi sekolah Adiwiyata tingkat nasional.</li>
                <li>Memiliki jaringan kerjasama dengan minimal 10 instansi/lembaga terkait.</li>
            </ol>
        </div>
    </div>

    {{-- Footer --}}
    @include ('home.template.footer')
    
</body>
</html>