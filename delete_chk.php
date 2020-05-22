<?php
include "base.php";
$id = $_GET['id'];
$row = find('file_info', $id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <table>
    <tr>
      <th colspan="7"><span>確定要刪除此筆貓咪嗎</span></th>
    </tr>
    <tr>
      <td> <img src="<?= $row['path'] ?>" alt="" style="width:100px"></td>
      <td><?= $row['filename'] ?></td>
      <td><?= $row['path'] ?></td>
      <td><?= $row['type'] ?></td>
      <td><?= $row['note'] ?></td>
      <td><?= $row['upload_time'] ?></td>
      <td>
        <a href="delete_file.php?id=<?= $row['id'] ?>"><button class="btn">確定刪除</button></a>
        <a href="manage.php"><button class="btn">返回前頁</button></a>
      </td>
    </tr>
  </table>
</body>

</html>