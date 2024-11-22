<?php
include 'connection.php';
if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 
    $sql = "SELECT * FROM tb_upload WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Berita tidak ditemukan.";
        exit;
    }
} else {
    echo "ID berita tidak diberikan.";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
    <title><?php echo htmlspecialchars($row['name']); ?></title>
</head>
<body>
    <header>
    </header>
    <div class="area">
        <div class="content-berita">
            <img src="img/<?= $row['image'] ?>" alt="<?= $row['name'] ?>" class="news-image">
            <h1><?php echo htmlspecialchars($row['name']); ?></h1>
            <p><?php echo (htmlspecialchars($row['deskripsi'])); ?></p>
            <a class="back-link" href="main.php">Kembali ke Berita</a>
        </div>
    </div>
</body>

</html>