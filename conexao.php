<?php
#Usuario do Sistema
$dsn='mysql:host=localhost;dbname=AppFit';
$usuario='root';
$senha= '';

try {
    $conexao = new PDO($dsn , $usuario, $senha);
        $query = 'INSERT INTO login(usuario, senha) values
        ("Pedro", "Pedrospg22")';
       $query = 'SELECT *FROM usuarios ';
        $retorno=$conexao->query($query);

        $lista=$retorno->fetchAll();

        $usuarios_autetificado=false;
            foreach($lista as $user){
                #print_r($user);  
                $user['usuario'];
                $user['senha'];
            
                if($user['usuario'] == $_POST['usuario'] && $user['senha']== $_POST['senha']){
                     echo 'Muito bem! Usuario logado';
                    header('Location:App.php?validation=1'); 
                    $usuario_autentificado=true;
                } else{
                    echo 'Que pena! Usuario ou senha incorreto!';
                     header('Location:index.php?validation=0');    //header:Edita o endereco do site.  location: manda para pagina especificada.
                }
        }
}catch(PDOException $e){
    echo 'Erro: '.$e->getCode().'Mensagem: '.$e->getMessage();
}
?>