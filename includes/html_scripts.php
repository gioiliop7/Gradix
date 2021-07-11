<script
	src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootswatch-dist/js/bootstrap.min.js"></script>
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

<script>
	jQuery( document ).ready(function() {
		var ids = document.querySelectorAll('[data-id]');
		jQuery( ids ).each(function() {
			value = jQuery(this).attr("data-id");
			if(value == 'software'){
				jQuery('[data-id="software"]').addClass('bg-warning');
			}
			if(value == 'hardware'){
				jQuery('[data-id="hardware"]').addClass('bg-danger');
			}
			if(value == 'networking'){
				jQuery('[data-id="networking"]').addClass('bg-success');
			}
		});

		$( "#clearform" ).click(function(e) {
			e.preventDefault();
			window.location.href="./nps.php";
		});
});
</script>