<!DOCTYPE html>
<html>
<head>
	<title>Compre seu hotwheels</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		@font-face{
			font-family: "HEAVYHEA";
			src: url(font/webfonts/HEAVYHEA.TTF) format('opentype') ;
		}
	</style>
</head>
<body style="font-family:'HEAVYHEA',sans-serif;background: url(img/wallpaper3.jpg) fixed no-repeat center;background-size: cover">
<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #f30 !important;border-bottom: 2px solid #00f;">
			<a href="index.php" class="nav-item nav-link">
				<img src="img/logohotwheels.png" style="width: 30%;height: 70%;margin: 0;padding: 0;">
			</a>
				<div class="navbar-nav">
					<a href="index.php" class="nav-item nav-link">HOME</a>
					<a href="pedidos.php" class="nav-item nav-link">PEDIDOS</a>
					<a href="cadastrocarrinho.php" class="nav-item nav-link active">VENDA CONOSCO!</a>
				</div>
		</nav>
	</div>
</div>
<div class="row" style="margin: 10px;" id="formulario">
	<div class="col-md-4 jumbotron" style="background: rgba(0,0,0,0.4);">
		<h1 class="p-4" style="color: #f6fefe;text-shadow: 2px 2px 0 #000;">
			PREENCHA AS INFORMAÇÕES NO FORMULÁRIO SOBRE SEU PRODUTO!
		</h1>
	</div>
	<div class="col-md-8">
		<div class="jumbotron text-center" style="border: 2px solid #00f;background-color: #f30;">
			<form action="cadastro.php" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="nome" class="form-control" placeholder="Nome">
				</div>
				<div class="form-group">
					<input type="number" name="preco" class="form-control" placeholder="Valor do produto">
				</div>
				<div class="form-group">
					<input type="number" name="qtd" class="form-control" placeholder="Quantidade em estoque">
				</div>
				<div class="form-group">
					<input type="file" name="img" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-warning" type="submit" id="btnenviar">Cadastrar <i class="fas fa-car"></i></button>
				</div>
				<div class="form-group">
					<button class="btn btn-danger" type="button" id="btnregistro">Ver lista de registros <i class="fas fa-clipboard-list"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="row" id="registro" style="display: none;">
	<div class="col-md-12">
		<div class="jumbotron text-center">
			<table class="table table-striped p-5">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nome</th>
						<th scope="col">Preço</th>
						<th scope="col">Quantidade</th>
						<th scope="col"></th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody  id="requisicao">
				
				</tbody>
			</table>
			<button type="button" class="btn btn-outline-dark" id="btnvoltar">Voltar ao cadastro <i class="fas fa-undo-alt"></i></button>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		var i = 0;
	
		$("#btnregistro").click(function(){
			i++;

			if (i>1) {
				$('#formulario').slideUp("slow");
				$('#registro').slideDown("slow");
			} else {

			
				$.ajax({
				method: "POST",
				url: "ajaxTPC.php",
				success:function(data){
					$('#requisicao').append(data);
					requisitado = false;
				}
				});
				$('#formulario').slideUp("slow");
				$('#registro').slideDown("slow");
			}
		
		});
		$("#btnvoltar").click(function(){
			$('#registro').slideUp("slow");
			$('#formulario').slideDown("slow");
		});
	});
</script>
