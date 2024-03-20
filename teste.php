<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calcular Necessidades Diárias</title>
  <style>
    /* Estilos da navegação */
    nav {
      background-color: #333;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover {
      background-color: #111;
    }

    .active {
      background-color: #4CAF50;
    }

    /* Estilos gerais */
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #000000;
      color: #ffffff;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      max-width: 600px;
      background-color: #333333;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
      text-align: center;
    }

    .result-info {
      margin-bottom: 30px;
      text-align: left; /* Alinhar texto à esquerda */
    }

    .title {
      font-size: 36px;
      margin-bottom: 20px;
      color: #00ff00;
    }

    .result-list {
      list-style-type: none;
      padding: 0;
      text-align: center;
    }

    .result-list li {
      margin-bottom: 15px;
      font-size: 20px;
    }

    .result-list li strong {
      font-weight: bold;
      margin-right: 10px;
      color: #00ff00;
    }

    .result-list li span {
      font-weight: bold;
      color: #ff7f50;
      font-size: 22px;
    }
  </style>
</head>
<body>
  <nav class="menu">
    <ul>
      <li><a href="App.php" id="home-link" class="active">Home</a></li>
      <li><a href="Perfil.php" id="perfil-link">Perfil</a></li>
      <li><a href="#" id="treinos-link">Treinos</a></li>
      <li><a href="#" id="dietas-link">Dietas</a></li>
    </ul>
  </nav>

  <!-- Exibir informações do usuário e cálculos -->
  <?php include 'calcular_necessidades.php'; ?>

  <div class="container">
    <div class="result-info">
      <h2>Resultados da Calculadora Nutricional</h2>
      <p>Confira os resultados dos cálculos:</p>
    </div>
    <ul class="result-list">
      <li><strong>IMC:</strong> <?php echo $imc; ?></li>
      <li><strong>GCD:</strong> <?php echo $gcd; ?> calorias</li>
      <li><strong>Calorias de proteínas:</strong> <?php echo $calorias_proteinas; ?> calorias</li>
      <li><strong>Calorias de gorduras:</strong> <?php echo $calorias_gorduras; ?> calorias</li>
      <li><strong>Calorias de carboidratos:</strong> <?php echo $calorias_carboidratos; ?> calorias</li>
    </ul>
  </div>

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
</
