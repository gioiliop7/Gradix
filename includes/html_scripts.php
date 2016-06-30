<script
	src="https://code.jquery.com/jquery-2.2.4.min.js"
	integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
	crossorigin="anonymous"></script>
<script>
	function autofillControlsToggle(){
		document.getElementById('raw').value = '';
		document.getElementById('autofillControls').style.display = document.getElementById('autofillControls').style.display=='none'?'':'none';
	}
	function autofill() {
		var raw = document.getElementById('raw').value;
		var tempName;
		var grades = {};
		out = raw.split('ΥΠΟΧΡΕΩΤΙΚΟ');
		for (var i = 1, len = out.length; i < len; i++) {
			tempName = out[i - 1].split(')').pop().trim();
			if(tempName=='')tempName = 'ΣΑΕ';
			grades[tempName] = (out[i].split('	')[4].trim().replace(',', '.'));
		}
		for (key in grades) {
			if(document.getElementById(key)){
				if(grades[key]!='-')
					document.getElementById(key).value = grades[key];
			} else {
				console.log('Not found: '+key);
			}
		}
		document.getElementById('raw').value = '';
		$('#autofill').modal('hide');
	}
</script>