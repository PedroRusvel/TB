<?php
// Verifica se os dados foram enviados pelo formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecta ao banco de dados (substitua as informações conforme necessário)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "AppFit";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    // Obtém os dados do formulário
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $objetivo = $_POST["objetivo"];
    $nivel_atividade = $_POST["nivel_atividade"];
    
    // Cria a query SQL para inserir ou atualizar os dados na tabela do banco de dados
    $sql = "INSERT INTO perfil (peso, altura, idade, sexo, objetivo, nivel_atividade) 
            VALUES ('$peso', '$altura', '$idade', '$sexo', '$objetivo', '$nivel_atividade') 
            ON DUPLICATE KEY UPDATE 
            peso = VALUES(peso), altura = VALUES(altura), idade = VALUES(idade), 
            sexo = VALUES(sexo), objetivo = VALUES(objetivo), nivel_atividade = VALUES(nivel_atividade)";
    
    if ($conn->query($sql) === TRUE) {
        echo "Dados salvos com sucesso!";
    } else {
        echo "Erro ao salvar os dados: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    echo "Erro: Método não suportado!";
}
?>
