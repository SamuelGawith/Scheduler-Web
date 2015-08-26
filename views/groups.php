<link href="style.css" rel="stylesheet" type="text/css"/>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Группы</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="outer">
    <div id="header">
        <div id="logo">
            <h1>
                <a>Расписание</a>
            </h1>
        </div>
        <div id="navigation">
            <ul>
                <li><a href="/">Главная</a></li>
                <li class="active"><a href="/index.php?view=groups">Группы</a></li>
            </ul>
        </div>
    </div>

    <div id="nav_menu" align="center">

        <ul>
            <?php
            foreach ($groups as $group): ?>
                <li><a href="/index.php?view=week&group=<?php echo $group ?>"><?php echo $group ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
	
    
</body>
</html>

