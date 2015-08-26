<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Расписание</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="outer">
    <div id="header">
        <div id="logo">
            <h1>
                <a><?php echo "{$_SESSION['group']} {$_GET['day']}" ?></a>
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

    <div id="main">
        <table align="center" cellspacing="70" border="0">
            <tr>
                <?php foreach ($schedule as $item):
                    if ($item['lecture'] == "null") {
                        ?>
                        <div align="center">
                            <div><b><font size="14"><br>Нет занятий!</font></b></div>
                        </div>
                    <? } else { ?>
					<td valign="top">
                        <div>
							<div>Лекция: <b><?php echo $item['lecture'] ?>.</b></div>
							<div>Аудитория: <b><?php echo $item['auditory'] ?>.</b></div>
							<div>Преподаватель: <b><?php echo $item['lecturer'] ?>.</b></div>
							<div>Начало: <b><?php echo $item['time']; } ?>.</b></div>
						</div>
                    </td>

                <?php endforeach; ?>
            </tr>
        </table>
    </div>
</body>
</html>