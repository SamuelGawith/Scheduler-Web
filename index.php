<?php
ob_start();
session_start();
include('db_functions.php');

$view = empty($_GET['view']) ? 'index' : $_GET['view'];

switch ($view) {
    case('index'):
        break;
    case('groups'):
		$groups = get_groups();
        break;
    case('week'):
		$_SESSION['group'] = $_GET['group'];
        break;
    case('sched'):
		$group = $_SESSION['group'];
		$day = $_GET['day'];
		$schedule = get_schedule($group, $day);
        break;
    default:
        header('Refresh: 3; index.php');
        exit("Такого адреса не существует!");
}

include($_SERVER['DOCUMENT_ROOT'] . '/views/' . $view . '.php');