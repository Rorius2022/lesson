<html>
<head>
    <title>Навчання IT</title>
    <link rel="stylesheet"  href="/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <meta charset="utf-8">
</head><body>
<div class="wrapper">
    <div class="container">
        <div class="default">
            <div class="top">
                <div class="back-arrow">
                    <a href="/index.php"><img src="/images/back.png" width="30" height="30"></a>
                </div>
                <h1>Уроки CSS</h1>
            </div>
            <div class="main">
                <div>
                    <img src="/images/html.png">
                </div>
                <div class="img left">
                    <?
                    $arLessons = Array(
                        "1"=>"Основи HTML",
                        "2"=>"Текстові елементи HTML",
                        "3"=>"Списки в HTML",
                    );
                    if(!empty($arLessons))
                    {
                        foreach ($arLessons as $lessonID=>$lessonName)
                        {
                            ?><a href="lesson<?=$lessonID?>">Урок <?=$lessonID?>. <?=$lessonName?></a><br><?
                        }
                    }
                    else{
                        ?><p>На даний момент ще немає уроків.</p><?
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>