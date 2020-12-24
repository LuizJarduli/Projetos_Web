function enviarArquivo() {	

	var $uploadCrop;

	//Função responsável por verificar se um arquivo foi selecionado
	function readFile(input) {		
			//Se o usuário escolheu um arquivo
			if (input.files && input.files[0]) {

			$("#upload-area").show();
            var reader = new FileReader();            
            reader.onload = function (e) {

				$('.upload-area').addClass('ready');
            	$uploadCrop.croppie('bind', {
            		url: e.target.result
            	}).then(function(){
            		console.log('jQuery bind complete');
            	});            	
            }            
            reader.readAsDataURL(input.files[0]);
        	}
        else {
	       alert("Nenhum item selecionado ou navegador incompatível")
	    }
	}

	$uploadCrop = $('#upload-area').croppie({
		//Area de Recorte
		viewport: {
			width: 475,
			height: 250,
			type: 'rect'
		},
		//Área de Visualização Externa
		boundary: {
	    width: 600,
	    height: 350
	}			
	});
	//Função que será executada ao escolher um arquivo
	$('#upload').on('change', function () { readFile(this); });

	//Ao clicar no botão confirmar
	$('.enviar').on('click', function (ev) {					
		$uploadCrop.croppie('result', {
			type: 'canvas',			
			size: "viewport",
			format: 'jpeg',			
			quality: 0.80
		}).then(function (resp) {			
				//Inserindo imagem dentro do DIV resultado				
				$(".resultado").append("<img src='"+resp+"'>");		
				//Criando input hidden com a codificação da imagem
				$(".resultado").append("<input type='hidden' value='"+resp+"' name='imagem'/>");		
				//Criando botão concluir
				$(".resultado").append("<br/><br/><input type='submit' value='Concluir'/></div>");
				//Mostrando Div resultado
				$(".resultado").show();
				//Escondendo outras regiões
				$("#limite").hide();
				$("#upload").val('');					
		});
	});

	//Atualizar página
	$('.cancelar').on('click', function (ev) {							
				location.reload();
	});		
}
//Ao carregar página, executar função enviarArquivo para preparar área de recorte
$(document).ready(function(){
	enviarArquivo();
});