<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Berita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: white;
            background-color:#4d4d4d;
            border: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .button:active {
            background-color: #4d4d4d;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #4d4d4d;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <a href="admin_panel.php" class="button">Upload</a>
    <a href="main.php" class="button">Logout</a>
    
    <br><br>
    
    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'connection.php';
        $no = 1;
        $data = mysqli_query($conn, "select * from tb_upload");
        while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['name']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $d['id']; ?>" class="button update">Update</a>
                <a href="delete.php?id=<?php echo $d['id']; ?>" class="button delete">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>