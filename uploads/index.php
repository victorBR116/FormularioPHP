<?php

if(isset($_POST['enviar-formulario'])) {
    var_dump($_FILES);
    $formatosPermetidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
   
    if(in_array($extensao, $formatosPermetidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name']; 
        $novoNome = uniqid(). ".$extensao";
      
        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            $mensagem  = "upload feito com sucesso!";
        else:
            $mensagem  = "Erro, não foi possivel fazer o upload";
        endif;
    else:
        $mensagem = "formato inválido";
    endif;
    
    echo $mensagem;
}

?>

<html>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo"><br>
     <input type="submit" name="enviar-formulario">
     
</body>
</html>


