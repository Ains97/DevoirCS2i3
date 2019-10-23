<?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Categorie</title>
</head>
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	
<style type="text/css">
	.success{
		color: green;
	}
	.error{
		color: red;
	}
</style>
<body>
	<form id="form1">
		
		<input type="text" name="nom" placeholder="Nom de la categorie"><br/>
		
		<input type="submit" value="OK">
		<p id="response"></p>
	</form>
	<br>

	<table border="1">
		<thead>
			<tr>
				
				<th>Nom</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>
					
				</th>
			</tr>
			
			
		</tbody>
	</table>
	<script type="text/javascript">
			
				$("#form1").submit(function(e){
					e.preventDefault();
 	 				$.ajax({
						type:"post",
						url:"Controller/CategorieDAOAjax.php",
						data:$(this).serialize(),
						success:function(response){
							$("#response").html(response);
							$("#response").addClass("success");

						},
						error:function(err){
							$("#response").html(err.statusText);
							$("#response").addClass("error");
						}

				});
           });
		
		$("#form1").submit(function(e){
					e.preventDefault();
 	 				$.ajax({
						type:"get",
						url:"Controller/CategorieDAOAjax.php",
						dataType:'Html',
						data:$(this).serialize(),
						success:function(response){
							$("#response").html(response);
							$("#response").addClass("success");

						},
						error:function(err){
							$("#response").html(err.statusText);
							$("#response").addClass("error");
						}
						

				});
           });
	</script>
</body>
</html>