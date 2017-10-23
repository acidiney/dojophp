<!DOCTYPE html>
<html>
<head>
	<title>Retornando Usuarios Do Github</title>
	<meta charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">

		.panel
		{
			padding: 15px;
		}
		.user-card
		{
			    width: 25%;
			    min-height: 250px;
			    float: left;
			    margin:0;
			    margin-bottom: 15px;
		}
		.center-block
		{
			    max-width: 100%;
		}
		.card-content
		{
			text-align: center;
			box-shadow: 0px 0px 0.5px rgba(0,0,0,0.95);
		}
		a{
			color: #363636;
		    font-size: 2rem;
		    font-weight: 300;
		    line-height: 1.125;
		}


	</style>
</head>
<body data-ng-app="Github">
	<div class="container">
		<div class="panel">
			<div class="panel-head">
				<h1>Retornando Usuarios de {{cidade}}</h1>
				<label for="cidade">Cidade</label>
				<input data-ng-model="cidade" id="cidade" class="form-control" type="text" max-lenght="20" placeholder="Cidade" />
				<button id="" onclick="search();" class="btn btn-primary btn-md">Pesquisar</button>
			</div>
			<div class="panel-body" >
				<p id="resultado"></p>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js" type="text/javascript"></script>
<!-- Add Jquery 3.2.1 minif CDN-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<h4 class="text-center" style="color: #ccc">Criado Por Acidiney Dias</h4>
	<script type="text/javascript">
		angular.module('Github', []);

		function search() {
				var cidade = $('#cidade').val();
				$.ajax({
	        			url:"controller.php",
	        			type:"POST",
	        			data:{'cidade': cidade},
	        			dataType: 'json',
						success: function(data){
							$('#resultado').html(data);
						},
						error:function(data)
						{
							$('#resultado').html(data);
						}
	        		});
		}
	</script>
</body>
</html>
