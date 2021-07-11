<?php
	$url = "http://gradix.appix.org";
	$json = file_get_contents('tmimata/mixanikon_pliroforikis_nps.json');
	$grades = json_decode($json, true);
    error_reporting(0);

	if ($_GET) {
		require('functions/grade_calc.php');
		$grade = grade_calc($grades, $_GET);?>
        <script>
            var totalects = '<?php echo $grade['totalEcts'];?>'
            if (totalects == 0){
                alert('Οι συνολικές διδακτικές μονάδες που έχεις συμπληρώσει ισούνται με ' + totalects + ' οπότε πρόσθεσε τουλάχιστον έναν βαθμό που δεν θα είναι 0 για να δεις την βαθμολογία σου.');
                window.location.href="./nps.php";
            }      
        </script>
        <?php 
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once('includes/html_head.php'); ?>
		<title>Gradix v2: Υπολογισμός του Βαθμού Πτυχίου σας.</title>
	</head>
	<body>
		<?php require_once('includes/html_nav_uth.php'); ?>
		<div class="container">
			<div class=row>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
					<strong>Προσοχή!</strong> Προς το παρόν το script λειτουργεί
					μόνο για το τμήμα Μηχανικών
					Πληροφορικής Τ.Ε. Σύντομα θα προστεθεί και το ΠΣ των Ηλεκτρονικών Μηχανικών.
				</div>
				<div class="jumbotron">
					<h1>Gradix v2</h1>
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
					<?php if($_GET): ?>
						<h2>
							Ο βαθμός πτυχίου σας (για τα μαθήματα που εισάγατε)
							υπολογίζεται σε:
						</h2>
							$$
								\sum_{i=1}^{n} δ_i β_i = <?php echo $grade['num']; ?> =
								<?php echo $grade['totalGrades']; ?>
							$$
							$$
								\sum_{i=1}^{n} δ_i = <?php echo $grade['den']; ?> =
								<?php echo $grade['totalEcts']; ?>
							$$
						<p>
							$$
								β ={
									\sum_{i=1}^{n} δ_i β_i
									\over
									\sum_{i=1}^{n} δ_i
								} =
								{
									δ_1 β_1 + δ_2 β_2 + ... + δ_n β_n
									\over
									δ_1 + δ_2 + ... + δ_n
								} =
								{
									<?php echo $grade['totalGrades']; ?>
									\over
									<?php echo $grade['totalEcts']; ?>
								} \approx <?php echo $grade['grade']; ?>
							$$
						</p>
					<?php endif; ?>
				</div>
			</div>
			<div class="row">
				<?php
					require('functions/print_grades.php');
					print_grades_nps($grades, $_GET);
				?>
			</div>
			<div class="row footerrow text-center">Διαθέσιμος ο Source Code στο
				<a target="_blank" href="https://github.com/gioiliop7/Gradix">Github</a>.
			</div>
		</div>

		<?php require_once('includes/html_modals.php') ?>
		<?php require_once('includes/html_scripts.php') ?>

        <style>
        a{
            color:#5f021f;
        }
        a:hover{
            color:#8c2a00;
            text-decoration:none;
        }
        #bs-example-navbar-collapse-1 > ul> li> a{
            color:#fff;
        }
        #bs-example-navbar-collapse-1 > ul > li.dropdown.open > a{
            background:transparent;
        }
        .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus{
            background:#5f021f;
        }
        </style>

	</body>
</html>
