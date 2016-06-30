<?php
	function grade_calc($grades, $get){
		$totalEcts = 0;
		$totalGrades = 0;
		$totalCourses = 0;
		$num ='';
		$den ='';

		foreach ($grades as $semester) {
			foreach ($semester['courses'] as $course) {
				if (!empty($get[$course['code']])) {
					$totalGrades += $get[$course['code']] * $course['ects'];
					$totalEcts += $course['ects'];
					$num .= $get[$course['code']] . '*' . $course['ects'] . ' + ';
					$den .= $course['ects'] . ' + ';
					$totalCourses ++;
				}
			}
		}
		$grade = $totalGrades / $totalEcts;
		$grade = round($grade,2);
		$num = substr($num, 0, -2);
		$den = substr($den, 0, -2);
		return array(
			'grade' => $grade, 
			'totalCourses' =>  $totalCourses,
			'totalGrades' =>  $totalGrades,
			'totalEcts' =>  $totalEcts,
			'num' => $num,
			'den' => $den 
		);
	}
?>