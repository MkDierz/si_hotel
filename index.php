<?php
include 'include/config.php';
$data = read($conn);
$user_data = mysqli_fetch_array($data);
echo "data";
print_r($data);
echo "userdata";
print_r($user_data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Nama Kamar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>January</td>
                <td>$100</td>
            </tr>
        </tbody>
    </table>
</body>

</html>