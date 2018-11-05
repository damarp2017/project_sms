<?php

	$page='';
	if (isset($_GET['page'])) {
		$page=$_GET['page'];
	}

	$current_page=$page;

	switch ($page) {
		case 'dashboard':
			$page="include 'pages/dashboard.php';";
			break;
		case 'student':
			$page = "include 'pages/student/student.php';";
			break;
		case 'achievement':
			$page = "include 'pages/achievement/achievement.php';";
			break;
		case 'edit-achievement':
			$page = "include 'pages/achievement/edit-achievement.php';";
			break;
		case 'student-profile':
			$page = "include 'pages/student/profile.php';";
			break;
		default:
			$page = "include 'pages/dashboard.php';";
			break;

	}

	$content=$page;

 ?>
