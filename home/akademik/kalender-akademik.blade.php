<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalender Akademik - SMANDUTI</title>
    <!-- Hero Icons -->
    <link href="https://cdn.jsdelivr.net/npm/heroicons@1.0.6/dist/css/heroicons.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #3b82f6;
            --secondary: #1d4ed8;
        }
        
        .kalender-hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 5rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .kalender-hero::before {
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
        
        .kalender-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .kalender-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }
        
        .kalender-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
        }

        /* Calendar Section Styles */
        .calendar-section {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 0 1rem;
        }

        .calendar-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .calendar-header {
            background-color: #f8fafc;
            padding: 1.5rem;
            border-bottom: 1px solid #e2e8f0;
        }

        .calendar-header h2 {
            font-size: 1.5rem;
            color: #1e293b;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .calendar-table {
            width: 100%;
            border-collapse: collapse;
        }

        .calendar-table th {
            background-color: #f1f5f9;
            padding: 1rem;
            text-align: left;
            color: #64748b;
            font-weight: 600;
        }

        .calendar-table td {
            padding: 1rem;
            border-bottom: 1px solid #e2e8f0;
            vertical-align: top;
        }

        .event-date {
            font-weight: 600;
            color: #1e293b;
        }

        .event-title {
            font-weight: 600;
            color: #3b82f6;
            margin-bottom: 0.25rem;
        }

        .event-desc {
            color: #64748b;
            font-size: 0.875rem;
        }

        .important-event {
            background-color: #eff6ff;
            border-left: 4px solid #3b82f6;
        }

        @media (max-width: 768px) {
            .kalender-hero h1 {
                font-size: 2rem;
                flex-direction: column;
                gap: 0.5rem;
            }
            
            .calendar-table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Content --}}
    <section class="kalender-hero">
        <div class="kalender-hero-content">
            <h1>
                <i class="hi hi-calendar" style="font-size: 1em;"></i>
                Kalender Akademik SMANDUTI
            </h1>
            <p>Jadwal kegiatan akademik dan penting selama tahun ajaran berlangsung. Pantau terus untuk informasi terbaru.</p>
        </div>
    </section>

    <section class="calendar-section">
        <div class="calendar-container">
            <div class="calendar-header">
                <h2>
                    <i class="hi hi-calendar" style="font-size: 1em;"></i>
                    Tahun Akademik 2023/2024 - Semester Ganjil
                </h2>
            </div>
            
            <table class="calendar-table">
                <thead>
                    <tr>
                        <th width="20%">Tanggal</th>
                        <th width="30%">Kegiatan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="important-event">
                        <td class="event-date">1 Agustus 2023</td>
                        <td>
                            <div class="event-title">Pendaftaran Mahasiswa Baru</div>
                            <div class="event-desc">Gelombang 1</div>
                        </td>
                        <td class="event-desc">Pendaftaran online dan offline dibuka melalui website resmi sekolah</td>
                    </tr>
                    <tr>
                        <td class="event-date">14-18 Agustus 2023</td>
                        <td>
                            <div class="event-title">Masa Orientasi Siswa Baru</div>
                            <div class="event-desc">MOSB</div>
                        </td>
                        <td class="event-desc">Kegiatan pengenalan lingkungan sekolah untuk siswa baru</td>
                    </tr>
                    <tr class="important-event">
                        <td class="event-date">21 Agustus 2023</td>
                        <td>
                            <div class="event-title">Awal Semester Ganjil</div>
                            <div class="event-desc">Hari pertama masuk</div>
                        </td>
                        <td class="event-desc">Perkuliahan semester ganjil dimulai untuk semua kelas</td>
                    </tr>
                    <tr>
                        <td class="event-date">28 Agustus 2023</td>
                        <td>
                            <div class="event-title">Batas Akhir Add/Drop</div>
                        </td>
                        <td class="event-desc">Batas akhir penambahan/pengurangan mata pelajaran pilihan</td>
                    </tr>
                    <tr class="important-event">
                        <td class="event-date">17-23 September 2023</td>
                        <td>
                            <div class="event-title">Ujian Tengah Semester</div>
                            <div class="event-desc">UTS Ganjil</div>
                        </td>
                        <td class="event-desc">Minggu ujian tengah semester untuk semua mata pelajaran</td>
                    </tr>
                    <tr>
                        <td class="event-date">1 Oktober 2023</td>
                        <td>
                            <div class="event-title">Hari Kesaktian Pancasila</div>
                        </td>
                        <td class="event-desc">Libur nasional - tidak ada kegiatan belajar mengajar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    {{-- Footer --}}
    @include ('home.template.footer')
    
</body>
</html>