<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="outer">
    <div id="header">
        <div id="logo">
            <h1>
                <a><?php echo $_GET['group']?></a>
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
            $days = array(
				"понедельник",
				"вторник",
				"среда",
				"четверг",
				"пятница",
				"суббота"
			);
            foreach ($days as $day): ?>
                <li><a href="/index.php?view=sched&day=<?php echo $day ?>"><?php echo $day ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>