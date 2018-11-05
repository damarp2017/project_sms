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
		case 'user-admin':
			$page = "include 'pages/user/admin/admin.php';";
			break;
		case 'user-lecturer':
			$page = "include 'pages/user/lecturer/lecturer.php';";
			break;
		case 'user-student':
			$page = "include 'pages/user/student.php';";
			break;
		case 'student':
			$page = "include 'pages/student/student.php';";
			break;
		case 'achievement':
			$page = "include 'pages/achievement/achievement.php';";
			break;
		case 'achievement-detail':
			$page = "include 'pages/achievement/detail.php';";
			break;
		case 'user-profile':
			$page = "include 'pages/user/profile.php';";
			break;
		case 'student-profile':
			$page = "include 'pages/student/profil.php';";
			break;
		default:
			$page = "include 'pages/dashboard.php';";
			break;

	}

	$content=$page;

 ?>
