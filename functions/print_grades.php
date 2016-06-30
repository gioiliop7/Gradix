<?php function print_grades($grades, $get){ ?>
	<form method="GET">
		<div class="row">
			<div class="col-md-8">
				<h2 id="dpt_label">Μηχανικών Πληροφορικής (ΠΠΣ)</h2>
			</div>
			<div class="col-md-4">
				<input class="btn btn-success btn-lg btn-block" 
					type="submit" value="Υπολογισμός">
			</div>
		</div>
		<div class="row">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th colspan="2" class="text-center">Μάθημα</th>
						<th class="text-center">Είδος</th>
						<th class="text-center">ECTS</th>
						<th class="text-center">Βαθμός</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($grades as $semester): ?>
						<tr>
							<th colspan="5" class="text-center bg-primary">
								<?php echo $semester['title']; ?>
							</th>
						</tr>
						<?php foreach ($semester['courses'] as $course): ?>
							<tr class="<?php echo($course['type'] == 'ΜΕΥ-ΕΥ')?'bg-info':'' ?> " >
								<?php if($course['type'] == 'ΜΕΥ-ΕΥ'): ?>
									<td><b>ΕΠΙΛΟΓΗΣ</b></td>
								<?php endif; ?>
								<td colspan="<?php echo($course['type'] == 'ΜΕΥ-ΕΥ')?'':'2' ?>"">
									<?php echo $course['title']; ?>
								</td>
								<td width="100px">
									<?php echo $course['type']; ?>
								</td>
								<td width="20px">
									<?php echo $course['ects']; ?>
								</td>
								<td width="80px">
									<input class="form-control input-sm" 
										type="text" 
										name="<?php echo $course['code']; ?>"
										id="<?php echo $course['autofillId']; ?>"
										value="<?php
											$code = $course['code'];
											if (isset($get[$code])){
												echo $get[$code];
											} 
										?>"
										min="0" max="10">
								</td>
							</tr>
						<?php endforeach; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-8">
				<input class="btn btn-success btn-lg btn-block" 
					type="submit" value="Υπολογισμός">
			</div>
		</div>
		
	</form>
<?php } ?>	