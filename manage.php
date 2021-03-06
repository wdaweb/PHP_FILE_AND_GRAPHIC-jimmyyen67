<?php

/**
 * 1.建立資料庫及資料表來儲存檔案資訊
 * 2.建立上傳表單頁面
 * 3.取得檔案資訊並寫入資料表
 * 4.製作檔案管理功能頁面
 */
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>檔案管理功能</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="header">檔案管理練習</h1>
    <!----建立上傳檔案表單及相關的檔案資訊存入資料表機制----->
    <div class="center mb-3">
        <form action="save_file.php" method="post" enctype="multipart/form-data">
            <input type="file" name="img"><br>
            <input type="text" name="note">
            <input type="submit" value="上傳">
        </form>
    </div>

    <!----透過資料表來顯示檔案的資訊，並可對檔案執行更新或刪除的工作----->
    <table>
        <tr></tr>
        <th>預覽</th>
        <th>檔名</th>
        <th>路徑</th>
        <th>類別</th>
        <th>說明</th>
        <th>上傳時間</th>
        <th>操作</th>
        </tr>
        <?php
        $all = all('file_info');
        foreach ($all as $row) {
        ?>
            <tr>
                <td> <img src="<?= $row['path'] ?>" alt="" style="width:100px"></td>
                <td><?= $row['filename'] ?></td>
                <td><?= $row['path'] ?></td>
                <td><?= $row['type'] ?></td>
                <td><?= $row['note'] ?></td>
                <td><?= $row['upload_time'] ?></td>
                <td>
                    <a href="update_file.php?id=<?= $row['id'] ?>"><button class="btn">更新</button></a>
                    <a href="delete_chk.php?id=<?= $row['id'] ?>"><button class="btn">刪除</button></a>
                </td>
            </tr>
        <?php
        } ?>
    </table>



</body>

</html>