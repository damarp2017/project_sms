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
		case 'user':
			$page = "include 'pages/user/user.php';";
			break;
		case 'student':
			$page = "include 'pages/student/student.php';";
			break;
		case 'student-profile':
			$page = "include 'pages/student/profil.php';";
			break;
		case 'lecturer-profile':
			$page = "include 'pages/profile.php';";
			break;
		case 'achievement':
			$page = "include 'pages/achievement/achievement.php';";
			break;
		case 'achievement-detail':
			$page = "include 'pages/achievement/detail.php';";
			break;
		default:
			$page = "include 'pages/dashboard.php';";
			break;

	}

	$content=$page;

 ?>
