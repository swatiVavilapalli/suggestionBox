<!DOCTYPE html>
<html>
<head>
	<title>Search User</title>
	<link rel="stylesheet" type="text/css" href="../PHPContactForm/bootstrap.min.css">
	<script> 
		function showSuggestion(str){
			//console.log(str);
			if(str.length == 0){
				document.getElementById('output').innerHTML = '';
			} else{
				//AJAX request
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function(){
					if (this.readyState == 4 && this.status == 200){
						document.getElementById('output').innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET","suggest.php?q="+str, true);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<h1> Search Users<br></h1>
		<form>
			Search User: <input type="text
			" name="form-control" onkeyup="showSuggestion(this.value)">
		</form>
		<p> Suggestions: <span id="output" style="font-weight:bold"></span></p>
		
	</div>
</body>
</html>