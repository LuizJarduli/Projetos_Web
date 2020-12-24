<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Teste</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>

 
		<button class="btn btn-primary" id="testar">Testar</button>
		<!-- Modal -->
		<div class="modal fade" id="modal_upload" tabindex="-1" role="dialog" aria-labelledby="uploadfile" aria-hidden="true">
		  <div class="modal-dialog" role="document" style="max-width: 800px;">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="uploadfile">Upload de Arquivo</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <iframe src="recortarimagem/" width="99.6%" height="400" frameborder="0">			      	
			    </iframe>
		      </div>		      
		    </div>
		  </div>
		</div>

		<div id="img">

		</div>
  </body>

  <script>
  	$(document).ready(function(){
		$('#testar').click(function(){			
		    $('iframe').attr("src","recortarimagem/index.php");		      	
		    $('#modal_upload').modal({show:true})
		});
  	});

  	function fecharEscolha(imagem, situacao){

  		if(situacao == true){
  			$("#img").append("<img src='upload/usuario/"+imagem+"'>");
  			 $('#modal_upload').click();
  		}

  	}

  </script>

</html>
