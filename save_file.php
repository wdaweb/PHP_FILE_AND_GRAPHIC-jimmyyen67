<?php
include_once "base.php";
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

  $data=[
    'filename'=>$name,
    'type'=>$_FILES['img']['type'],
    'note'=>$_POST['note'],
    'path' => 'img/'.$name
  ];
  echo"<pre>";
  print_r($data);
  echo"</pre>";
  save('file_info',$data);
  header("location:manage.php");
}
