<?php
	$url = "http://dev.johnprantalos.pw/teilam-grades";
	$json = file_get_contents('tmimata/mixanikon_pliroforikis_pps.json');
	$grades = json_decode($json, true);

	if ($_GET) {
		require('functions/grade_calc.php');
		$grade = grade_calc($grades, $_GET);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once('includes/html_head.php'); ?>
		<?php include('includes/ga.php'); ?>
		<title>Teilam Grades - JP</title>
	</head>
	<body>
		<?php require_once('includes/html_nav.php'); ?>
		<div class="container">
			<div class=row>
				<div class="alert alert-danger alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button> 
					<strong>Προσοχή!</strong> Προς το παρόν το script λειτουργεί
					μόνο για τον Παλαιό Πρόγραμμα Σπουδών του τμήματος Μηχανικών 
					Πληροφορικής Τ.Ε. Σύντομα θα προστεθεί και το Νέο Πρόγραμμα
					Σπουδών καθώς επίσης και το ΠΣ των Ηλεκτρονικών Μηχανικών. 
				</div>
				<div class="jumbotron">
					<h1>Teilam Grades</h1>
					<p>
						<a href="" data-toggle="modal" data-target="#about_calc">
							Υπολογίστε
						</a> τον βαθμό πτυχίου σας εισάγοντας την τρέχουσα
						βαθμολογία σας (με το χέρι ή 
						<a href="" data-toggle="modal" data-target="#autofill">
						 	αυτόματα
					 	</a>) και προσθέστε τις βαθμολογίες που δεν έχουν 
					 	περαστεί ακόμη ή πιστεύετε ότι θα πάρετε, αποκτώντας
					 	έτσι μια ιδέα για το πως θα είναι η τελική σας
					 	βαθμολογία.
					</p>
				</div>			 	
			</div>
			<div class="row">
				<?php 
					require('functions/print_grades.php');
					print_grades($grades, $_GET);
				?>
			</div>
			<div class="row text-center">
				Διαθέσιμος ο Source Code στο 
				<a href="https://github.com/JohnPrantalos/teilam-grades">Github
				</a>.
			</div>
		</div>
		<?php require_once('includes/html_modals.php') ?>
		<?php require_once('includes/html_scripts.php') ?>
		
	</body>
</html>