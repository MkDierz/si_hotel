<?php
include 'include/config.php';
$data = read('tbl_kamar');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="<?= $config['assets'] ?>css/custom.css" rel="stylesheet">
</head>

<body>
    <div>
        <a href="<?=$config['base_url'].'add_guest'?>">Tambah Tamu</a>
    </div>
    <div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kamar</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($result = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['kamar_nama'] ?></td>
                        <td><?php if ($result['kamar_status'] == 1) {
                                echo "Kosong";
                            } else {
                                echo "Penuh";
                            } ?></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>