<?php 
	if(!empty($_FILES)){ // Se o array $_FILES não estiver vazio
		// Incluímos o arquivo com a classe
		include 'UploadImagem.php'; 
		// Associamos a classe à variável $upload
		$upload = new UploadImagem(); 
		// Determinamos nossa largura máxima permitida para a imagem
		$upload->width = 300; 
		// Determinamos nossa altura máxima permitida para a imagem
		$upload->height = 300; 

		// Exibimos a mensagem com sucesso ou erro retornada pela função salvar.
		//Se for sucesso, a mensagem também é um link para a imagem enviada.
		echo $upload->salvar("upload/", $_FILES['img']);
		}
?>