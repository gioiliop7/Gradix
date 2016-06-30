<div class="modal fade" id="about_calc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Υπολογισμός Βαθμού</h4>
			</div>
			<div class="modal-body">
				Ο βαθμός πτυχίου υπολογίζεται από την εξίσωση:
				$$
					β = {
						δ_1 β_1 + δ_2 β_2 + ... + δ_v β_v 
						\over 
						δ_1 + δ_2 + ... + δ_v 
					}
				$$
				, όπου β1, β2, ... , βν είναι οι βαθμοί των 
				μαθημάτων και της πτυχιακής και δ1, δ2, ..., δν 
				οι αντίστοιχες ETCS μονάδες.
				Τα μαθήματα με κενή βαθμολογία δεν λαμβάνονται υποψη στον 
				υπολογισμό, οπότε μπορείτε να αφήνετε κενές βαθμολογίες. 
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">About Teilam Grades</h4>
			</div>
			<div class="modal-body">
				<p>
					Το <a href="https://github.com/JohnPrantalos/teilam-grades">
					teilam-grades</a> ξεκίνησε ως ένα απλό script για να μπορώ
					να βάζω βαθμολογίες που δεν είχαν περαστεί ακόμη ή για 
					μαθήματα που δεν είχα περάσει και ήθελα να δώ πως θα
					διαμορφωνόταν ο Βαθμός Πτυχίου μου αν έπερνα στο τάδε 5 και
					στο δείνα 6.
				</p>
				<p>
					Το script έφτασε σε ένα σημείο που είπα να το δημοσιέυσω με 
					αποτέλεσμα να υπάρξουν κάποιες ωραίες ιδέες όπως το autofill
					του <a href="https://github.com/stsourlidakis">
					@stsourlidakis</a> και η επέκταση του script και για ΝΠΣ και
					Ηλεκτρονικούς πέρα από το ΠΠΣ της Πληροφορικής.
				</p>				
				<p>
					Ο κώδικας είναι διαθέσιμος στο 
					<a href="https://github.com/JohnPrantalos/teilam-grades">
					Github</a> υπό άδεια 
					<a href="http://www.apache.org/licenses/LICENSE-2.0">
					Apache 2.0</a>.
				</p>
				<p>
					Για ότι πρόβλημα/ιδέα έχετε, ανοίξτε ένα 
					<a href="https://github.com/JohnPrantalos/teilam-grades/issues">
					Github Issue</a> ή στείλτε e-mail στο 
					johnprantalos[at]gmail.com.
				</p>				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="autofill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Αυτόματη Εισαγωγή Βαθμών</h4>
			</div>
			<div class="modal-body">
				<p>
					Ο <a href="https://github.com/stsourlidakis">@stsourlidakis</a>
					δημιούργησε ένα javascript script το οποίο πέρνει τη βαθμολογία
					σας και την εισάγει στον πίνακα αντί να πρέπει να κάνετε μία
					- μια τις αντιστοιχίες. <strong>Kudos</strong> στον Σταύρο!
				</p>
				<p>
					Για να το κάνετε, πρέπει να πάτε στις 
					<a href="https://e-gram.teilam.gr/unistudent/stud_CResults.asp">
						Βαθμολογίες της Ηλεκτρονικής Γραμματείας
					</a> να επιλέξετε τα πάντα στην σελίδα ( <kbd>Ctrl + A</kbd> ),
					να τα αντιγράψετε ( <kbd>Ctrl + C</kbd> ) και να τα επικολλήσετε
					στο παρακάτω πεδίο.
				</p>
				<div class="alert alert-warning alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button> 
					<strong>Προσοχή!</strong> Η Αυτόματη Εισαγωγη Βαθμών είναι 
					ακόμη σε δοκιμαστική λειτουργία και δεν έχει ελεγθεί 
					επαρκώς. Σιγουρευτείτε ότι οι βαθμοί που μπαίνουν είναι
					σωστοί αν ο Βαθμός Πτυχίου που υπολογίζεται είναι 
					διαφορετικός από αυτόν που λέει στην Ηλεκτρονική Γραμματεία.
				</div>
				<p>
					<input type="text" id="raw" class="form-control col-xs-12" oninput="autofill()">
				</p>
				<p>
					Αν δεν κλείσει αυτόματα το παρόν παράθυρο μετά την 
					επικόλληση, πατήστε Κλείσιμο.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Κλείσιμο</button>
			</div>
		</div>
	</div>
</div>