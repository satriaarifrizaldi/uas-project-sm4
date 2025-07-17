<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Include database connection
require_once 'config/database.php';

// Get user data
try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
    $stmt->bindParam(':id', $_SESSION['user_id']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if (!$user) {
        // User not found in database, destroy session
        session_destroy();
        header("Location: login.php");
        exit;
    }
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Your existing head content -->
    <title>Dashboard - SMA Negeri 23 Batam</title>
</head>
<body class="tech-pattern">
    <!-- Your existing header/navigation -->
    
    <main class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Selamat datang, <?php echo htmlspecialchars($user['name']); ?></h1>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Dashboard cards -->
                <div class="bg-green-50 rounded-lg p-6 border border-green-100">
                    <h3 class="text-lg font-medium text-green-800 mb-2">Profil Anda</h3>
                    <p class="text-gray-600 mb-4">Email: <?php echo htmlspecialchars($user['email']); ?></p>
                    <p class="text-gray-600 mb-4">Role: <?php echo htmlspecialchars($user['role']); ?></p>
                    <a href="profile.php" class="text-green-600 hover:text-green-800 font-medium">Edit Profil</a>
                </div>
                
                <div class="bg-blue-50 rounded-lg p-6 border border-blue-100">
                    <h3 class="text-lg font-medium text-blue-800 mb-2">Menu Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="academic.php" class="text-blue-600 hover:text-blue-800">Akademik</a></li>
                        <li><a href="grades.php" class="text-blue-600 hover:text-blue-800">Nilai</a></li>
                        <li><a href="schedule.php" class="text-blue-600 hover:text-blue-800">Jadwal</a></li>
                    </ul>
                </div>
                
                <div class="bg-yellow-50 rounded-lg p-6 border border-yellow-100">
                    <h3 class="text-lg font-medium text-yellow-800 mb-2">Pengumuman</h3>
                    <p class="text-gray-600">Tidak ada pengumuman terbaru.</p>
                </div>
            </div>
            
            <div class="mt-8">
                <a href="logout.php" class="inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </div>
        </div>
    </main>
    
    <!-- Your existing footer -->
</body>
</html>