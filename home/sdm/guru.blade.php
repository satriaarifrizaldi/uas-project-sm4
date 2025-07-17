<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Guru - SMANDUTI</title>
    <style>
        .guru-hero {
            background: linear-gradient(135deg, #83a691, #a0c0ae);
            color: rgb(0, 0, 0);
            padding: 5rem 1rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .guru-hero::before {
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
        
        .guru-hero-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .guru-hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(255,255,255,0.5);
        }
        
        .guru-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 2rem;
            font-weight: 500;
        }
        .teacher-container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .teacher-title {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }
        .teacher-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .teacher-table th, .teacher-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .teacher-table th {
            background-color: #00ff66;
            color: rgb(0, 0, 0);
            font-weight: 600;
        }
        .teacher-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .teacher-table tr:hover {
            background-color: #e6ffe6;
        }
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }
        .pagination li {
            margin: 0 5px;
        }
        .pagination a {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: #3498db;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: all 0.3s;
        }
        .pagination a.active {
            background-color: #00b34d;
            color: white;
            border: 1px solid #00b34d;
        }
        .pagination a:hover:not(.active) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    {{-- Header --}}
    @include ('home.template.header')

    {{-- Content --}}

    <section class="guru-hero">
        <div class="guru-hero-content">
            <h1>PROFIL GURU SMANDUTI</h1>
            <p>Kenali para pendidik berdedikasi yang membimbing siswa-siswi SMANDUTI menuju prestasi gemilang</p>
        </div>
    </section>

    <div class="teacher-container">
        <table class="teacher-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Mata Pelajaran</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // Data dummy guru (nanti bisa diganti dengan data dari database)
                    $dummyTeachers = [
                        ['nip' => '196512341987031001', 'nama' => 'Dr. Ahmad S.Pd, M.Pd', 'jk' => 'Laki-laki', 'mapel' => 'Matematika', 'status' => 'PNS'],
                        ['nip' => '197003121995032002', 'nama' => 'Drs. Budi Santoso', 'jk' => 'Laki-laki', 'mapel' => 'Fisika', 'status' => 'PNS'],
                        ['nip' => '197512251999032003', 'nama' => 'Dewi Kartini, S.Pd', 'jk' => 'Perempuan', 'mapel' => 'Bahasa Indonesia', 'status' => 'PNS'],
                        ['nip' => '198004081998031004', 'nama' => 'Rina Wijaya, S.Pd', 'jk' => 'Perempuan', 'mapel' => 'Bahasa Inggris', 'status' => 'Honorer'],
                        ['nip' => '198511202005032005', 'nama' => 'Eka Prasetya, S.Pd', 'jk' => 'Laki-laki', 'mapel' => 'Kimia', 'status' => 'PNS'],
                        ['nip' => '199002152010032006', 'nama' => 'Fitriani, S.Pd', 'jk' => 'Perempuan', 'mapel' => 'Biologi', 'status' => 'Honorer'],
                        ['nip' => '199108102012031007', 'nama' => 'Guntur Wibowo, S.Pd', 'jk' => 'Laki-laki', 'mapel' => 'Sejarah', 'status' => 'PNS'],
                        ['nip' => '197805151997032008', 'nama' => 'Hesti Rahayu, S.Pd', 'jk' => 'Perempuan', 'mapel' => 'Ekonomi', 'status' => 'PNS'],
                        ['nip' => '198912122009031009', 'nama' => 'Irfan Maulana, S.Pd', 'jk' => 'Laki-laki', 'mapel' => 'PJOK', 'status' => 'Honorer'],
                        ['nip' => '197311301994032010', 'nama' => 'Joko Susilo, S.Pd', 'jk' => 'Laki-laki', 'mapel' => 'Geografi', 'status' => 'PNS'],
                    ];
                    
                    // Pagination dummy (nanti bisa diganti dengan pagination Laravel)
                    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                    $perPage = 5;
                    $offset = ($currentPage - 1) * $perPage;
                    $paginatedTeachers = array_slice($dummyTeachers, $offset, $perPage);
                    $totalPages = ceil(count($dummyTeachers) / $perPage);
                @endphp
                
                @foreach ($paginatedTeachers as $index => $teacher)
                    <tr>
                        <td>{{ $index + 1 + $offset }}</td>
                        <td>{{ $teacher['nip'] }}</td>
                        <td>{{ $teacher['nama'] }}</td>
                        <td>{{ $teacher['jk'] }}</td>
                        <td>{{ $teacher['mapel'] }}</td>
                        <td>{{ $teacher['status'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        {{-- Pagination --}}
        <div class="pagination-container">
            <ul class="pagination">
                @if ($currentPage > 1)
                    <li><a href="?page={{ $currentPage - 1 }}">&laquo;</a></li>
                @endif
                
                @for ($i = 1; $i <= $totalPages; $i++)
                    <li>
                        <a href="?page={{ $i }}" @if ($i == $currentPage) class="active" @endif>{{ $i }}</a>
                    </li>
                @endfor
                
                @if ($currentPage < $totalPages)
                    <li><a href="?page={{ $currentPage + 1 }}">&raquo;</a></li>
                @endif
            </ul>
        </div>
    </div>

    {{-- Footer --}}
    @include ('home.template.footer')
    
</body>
</html>