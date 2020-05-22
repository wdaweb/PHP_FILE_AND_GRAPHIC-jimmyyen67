<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo $_FILES['img']['name'];

// 判斷檔案是否上傳成功
// if(!empty($_FILES['img']['tmp_name']))
if ($_FILES['img']['error'] == 0) {
  switch ($_FILES['img']['type']) {
    case "image/jpeg";
      $sub = '.jpg';
      break;
    case "image/png";
      $sub = '.png';
      break;
    case "image/gif";
      $sub = '.gif';
  }

  $name = date('Ymdhis') . $sub;

  move_uploaded_file($_FILES['img']['tmp_name'],"img/".$name); 

  header("location:upload.php?filename=$name");
}
?>