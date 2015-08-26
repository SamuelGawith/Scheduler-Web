<?php

function db_connect() {
    $host = '';
    $user = '';
    $pswd = '';
    $db = '';

    $connection = mysql_connect($host, $user, $pswd);

    if (!$connection || !mysql_select_db($db, $connection)) {
        return false;
    }
	
	mysql_query("SET NAMES utf8");

    return $connection;
}


function get_schedule($group, $day) {
    db_connect();

    $query = "SELECT auditory, lecture, lecturer, time FROM schedule WHERE class='$group' AND dayofweek='$day'";

    $result = mysql_query($query);
	
    $result = db_result_to_array($result);

    return $result;
}


function get_groups() {
	db_connect();
	
	$result = mysql_query("SELECT class FROM schedule");


	if (mysql_num_rows($result) > 0) {
		$classes = array();
	
		while ($row = mysql_fetch_array($result)) {
			$classes[] = $row["class"];
		}
	
		$all_groups = array_values(array_unique($classes));
	
		return $all_groups;
	}

}


function db_result_to_array($result) {
    $res_array = array();

    $count = 0;
    
    while ($row = mysql_fetch_array($result)) {
        $res_array[$count] = $row;
        $count++;
    }

    return $res_array;
}