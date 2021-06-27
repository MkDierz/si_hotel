<?php
include 'include/config.php';
$data = read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>

<body>
    <table  style="border: 1px solid #999;padding: 0.5rem;">
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
                        echo "Aviable";
                    }else {
                        echo "taken";
                    } ?></td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>