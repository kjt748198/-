<?php
header('Content-Type: application/json');

$musicDir = 'music/';  // 音乐文件夹路径
$musicFiles = glob($musicDir . '*.mp3');  // 获取所有 MP3 文件

$musicList = array();
foreach ($musicFiles as $file) {
    $fileName = basename($file);  // 获取文件名
    $title = pathinfo($fileName, PATHINFO_FILENAME);  // 获取不带扩展名的文件名
    $musicList[] = array(
        'title' => $title,
        'src' => $file
    );
}

echo json_encode($musicList);
?> 