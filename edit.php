<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Edit</title>
</head>
<body>
    <div class="card">
        
        <?php
        include 'connection.php';
        $id = $_GET['id'];
        $data = mysqli_query($conn, "select * from tb_upload where id='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
        <h1>Edit Berita</h1>
        <form action="mesinedit.php" method="post">
            <table>
                <tr>
                    <td>Edit Judul</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>"> 
                        <input type="text" name="name" value="<?php echo $d['name']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Edit Deskripsi</td>
                    <td>
                        <input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SAVE"></td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </div>
</body>
</html>