<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda - SMANDUTI</title>

    <style>
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
    </style>
</head>
<body>

    {{-- Header --}}
    <?php include 'template/footer' ?>

    {{-- Content --}}
    <section class="prestasi-hero">
        <div class="prestasi-hero-content">
            <h1>Prestasi SMANDUTI</h1>
            <p>Kami bangga dengan berbagai prestasi yang telah diraih oleh siswa-siswi SMANDUTI di berbagai bidang, baik akademik maupun non-akademik.</p>
        </div>
    </section>
    

    {{-- Footer --}}
    <?php include 'template/footer' ?>
    
</body>
</html>