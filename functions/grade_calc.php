<?php
	function grade_calc($grades, $get){
		$totalEcts = 0;
		$totalGrades = 0;
		$totalCourses = 0;

		foreach ($grades as $semester) {
			foreach ($semester['courses'] as $course) {
				if (!empty($get[$course['code']])) {
					$totalGrades += $get[$course['code']] * $course['ects'];
					$totalEcts += $course['ects'];
					$totalCourses ++;
				}
			}
		}
		$grade = $totalGrades / $totalEcts;
		$grade = round($grade,2);
		return array('grade' => $grade, 'totalCourses' =>  $totalCourses );
	}
?>