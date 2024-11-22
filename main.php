<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="Main_Page.js"></script>
    <script src="Main2_Page.js"></script>
    <title>Navbar Modern</title>
</head>
<body>

<!-- NAvbar Utama -->
    <nav class="navbar">
        <div class="navbar-left">
            <div class="navbar-brand">PRS News</div>
        </div>
        <div class="navbar-center">
            <div class="navbar-actions">
            </div>
        </div>

        <!-- navbar profil di sini -->

        <div class="navbar-profile" onclick="toggleDropdown()">
            <img src="https://via.placeholder.com/40" alt="Profile" class="profile-image">
            <span class="profile-name">Pengguna</span>
            <i class="fas fa-chevron-down"></i> 
            <div class="profile-dropdown" id="profileDropdown">
                <div class="dropdown-header">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="dropdown-profile-image">
                    <div class="dropdown-user-info">
                        <span class="dropdown-name">Nama Pengguna</span>
                        <span class="dropdown-email">email@example.com</span>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <a href="About.html" class="dropdown-item"><i class="fas fa-info-circle"></i> About</a>
                    <a href="loginadmin.html" class="dropdown-item"><i class="fas fa-cog"></i> Admin Panel</a>
                    <div class="dropdown-divider"></div>
                    <a href="login.html" class="dropdown-item logout"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                </div>
            </div>
        </div>

    </nav>
    <br>

    <!-- HALAMAN BERITA -->
     
     <div class="news-container">
        
        
        <?php
        require 'connection.php';
        
        // Query untuk mengambil data
        $query = "SELECT * FROM tb_upload";
        $result = mysqli_query($conn, $query);
        ?>

        <?php if (mysqli_num_rows($result) > 0): ?>
            <div class="news-grid">
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <div class="news-card">
                        <img src="img/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" class="news-image">
                        <div class="news-title">
                            <?= $row['name'] ?>
                        </div>
                        <?php echo '<a href="detail.php?id=' . $row['id'] . '"> Read More</a>'; ?>
                    </div>
                    
                <?php endwhile; ?>
            </div>
        <?php else: ?>
            <div class="empty-state">
                <h3>Tidak Ada Berita Tersedia</h3>
                <p>Silakan tambahkan berita baru</p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>