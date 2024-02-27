<?php
// Включити вивід помилок на екран
//ini_set('display_errors', 1);

// Встановити рівень звітування про помилки
//error_reporting(E_ALL);
function countDirectories($directoryPath) {
    // Отримуємо список файлів та директорій у зазначеній директорії
    $files = scandir($directoryPath);

    // Починаємо підрахунок директорій
    $directoryCount = 0;

    // Проходимо через кожен елемент у списку
    foreach ($files as $file) {
        // Перевіряємо, чи поточний елемент є директорією та чи не є точками (.), означаючими поточну та батьківську директорії
        if (is_dir($directoryPath . '/' . $file) && $file != '.' && $file != '..') {
            $directoryCount++;
        }
    }

    // Повертаємо кількість знайдених директорій
    return $directoryCount;
}
?>
<html>
<head>
    <title>Навчання IT</title>
    <link rel="stylesheet"  href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <meta charset="utf-8">
</head><body>
<div class="wrapper">
	<div class="container">
		<div class="default">
            <div class="top">
                <h1>Уроки Front-end developer</h1>
            </div>
            <div class="main">
                <div class="img">
                    <?
                    $directoryPath = 'lessons/html';
                    $numberOfDirectories = countDirectories($directoryPath);
                    if($numberOfDirectories == 0 || $numberOfDirectories >= 5)$sufix = "уроків";
                    if($numberOfDirectories == 1)$sufix = "урок";
                    if(in_array($numberOfDirectories, array(2,3,4)))$sufix = "уроки";
                    ?>
                    <a href="lessons/html"><img src="images/html.png"></a>
                    <a href="lessons/html"><p><?=$numberOfDirectories?> <?=$sufix?></p></a>
                </div>
                <div class="img">
                    <?
                    $directoryPath = 'lessons/css';
                    $numberOfDirectories = countDirectories($directoryPath);
                    if($numberOfDirectories == 0 || $numberOfDirectories >= 5)$sufix = "уроків";
                    if($numberOfDirectories == 1)$sufix = "урок";
                    if(in_array($numberOfDirectories, array(2,3,4)))$sufix = "уроки";
                    ?>
                    <a href="lessons/css"><img src="images/css.png"></a>
                    <a href="lessons/css"><p><?=$numberOfDirectories?> <?=$sufix?></p></a>
                </div>
                <div class="img">
                    <?
                    $directoryPath = 'lessons/js';
                    $numberOfDirectories = countDirectories($directoryPath);
                    if($numberOfDirectories == 0 || $numberOfDirectories >= 5)$sufix = "уроків";
                    if($numberOfDirectories == 1)$sufix = "урок";
                    if(in_array($numberOfDirectories, array(2,3,4)))$sufix = "уроки";
                    ?>
                    <a href="lessons/js"><img src="images/js.png"></a>
                    <a href="lessons/js"><p><?=$numberOfDirectories?> <?=$sufix?></p></a>
                </div>
                <div class="img">
                    <?
                    $directoryPath = 'lessons/git';
                    $numberOfDirectories = countDirectories($directoryPath);
                    if($numberOfDirectories == 0 || $numberOfDirectories >= 5)$sufix = "уроків";
                    if($numberOfDirectories == 1)$sufix = "урок";
                    if(in_array($numberOfDirectories, array(2,3,4)))$sufix = "уроки";
                    ?>
                    <a href="lessons/git"><img src="images/git.png"></a>
                    <a href="lessons/git"><p><?=$numberOfDirectories?> <?=$sufix?></p></a>
                </div>
            </div>
		</div>
	</div>
</div>
</body>
</html>