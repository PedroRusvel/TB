<?php
#Usuario do sistema
$usuarios_app=array(
    array('usuario' => 'Pedro', 'senha' => 'Pedrospg22'),
);
$usuarios_autetificado=false;

    #foreach percorre todo o vetor
    foreach($usuarios_app as $user){
        #print_r($user);  
        $user['usuario'];
        $user['senha'];
    }

    if($user['usuario'] == $_POST['usuario'] && $user['senha']== $_POST['senha']){
       // echo 'Muito bem! Usuario logado';
        header('Location:home.php?login=certo'); 
        $usuario_autentificado=true;
    } else{
      //  echo 'Que pena! Usuario ou senha incorreto!';
        header('Location:index.php?login');    //header:Edita o endereco do site.  location: manda para pagina especificada.
    }
    
?>