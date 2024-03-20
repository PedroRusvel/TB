<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link rel="stylesheet" href="app.css">
</head>
<body>
<style>
  body {
  font-family: Arial, sans-serif;
  background-color: #333;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 600px;
  margin: 20px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  font-weight: bold;
  margin-bottom: 5px;
}

input,
select {
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
}
</style>
<nav class="menu">
  <ul>
    <li><a href="App.php" id="home-link" class="active">Home</a></li>
    <li><a href="Perfil.php" id="perfil-link">Perfil</a></li>
    <li><a href="#" id="treinos-link">Treinos</a></li>
    <li><a href="#" id="dietas-link">Dietas</a></li>
  </ul>
</nav>


<!-- Adicione o link para o ícone do lápis -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Estilos para o ícone do lápis */
    .edit-icon {
      margin-left: 5px;
      color: #333; /* Cor do ícone do lápis */
      cursor: pointer; /* Transforma o cursor em uma mão ao passar sobre o ícone */
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Informações Pessoais</h1>
  <!-- Adicione o ícone do lápis ao lado dos campos editáveis -->
  <form method="post" action="salvar_dados.php">
    <label for="peso">Peso (kg):</label>
    <input type="number" id="peso" name="peso" step="0.1" value="" readonly>
    <i class="fas fa-pencil-alt edit-icon" onclick="editarCampo('peso')"></i>
    
    <label for="altura">Altura (m):</label>
    <input type="number" id="altura" name="altura" step="0.01" value="" readonly>
    <i class="fas fa-pencil-alt edit-icon" onclick="editarCampo('altura')"></i>
    
    <label for="idade">Idade:</label>
    <input type="number" id="idade" name="idade" value="" readonly>
    <i class="fas fa-pencil-alt edit-icon" onclick="editarCampo('idade')"></i>
    
    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo" readonly>
      <option value="masculino" selected>Masculino</option>
      <option value="feminino">Feminino</option>
    </select>
    
    <label for="objetivo">Objetivo da Dieta:</label>
    <select id="objetivo" name="objetivo" readonly>
      <option value="perder_peso" selected>Perder Peso</option>
      <option value="ganhar_peso">Ganhar Peso</option>
      <option value="manter_peso">Manter Peso</option>
      <option value="aumentar_massa_muscular">Aumentar Massa Muscular</option>
    </select>
    <i class="fas fa-pencil-alt edit-icon" onclick="editarCampo('objetivo')"></i>
    
    <label for="nivel_atividade">Nível de Atividade:</label>
    <select id="nivel_atividade" name="nivel_atividade" readonly>
      <option value="sedentario" selected>Sedentário</option>
      <option value="leve">Leve (exercício leve 1-3 dias por semana)</option>
      <option value="moderado">Moderado (exercício moderado 3-5 dias por semana)</option>
      <option value="ativo">Ativo (exercício intenso 6-7 dias por semana)</option>
      <option value="muito_ativo">Muito Ativo (exercício intenso diariamente)</option>
    </select>
    
    <button type="submit">Salvar Alterações</button>
  </form>
</div>

<script>
  // Função para editar um campo quando o ícone do lápis é clicado
  function editarCampo(idCampo) {
    const campo = document.getElementById(idCampo);
    campo.removeAttribute('readonly');
    campo.focus();
  }
</script>

<script>
  // Obter o caminho da página atual
  const path = window.location.pathname;
  
  // Função para remover a classe "active" de todos os links do menu
  function removeActiveClass() {
    const links = document.querySelectorAll('.menu a');
    links.forEach(link => {
      link.classList.remove('active');
    });
  }

  // Atualizar a classe "active" do link correspondente à página atual
  if (path.includes('Perfil.php')) {
    removeActiveClass();
    document.getElementById('perfil-link').classList.add('active');
  } else if (path.includes('Treinos.php')) {
    removeActiveClass();
    document.getElementById('treinos-link').classList.add('active');
  } else if (path.includes('Dietas.php')) {
    removeActiveClass();
    document.getElementById('dietas-link').classList.add('active');
  } else {
    removeActiveClass();
    document.getElementById('home-link').classList.add('active');
  }
</script>

</body>
</html>
