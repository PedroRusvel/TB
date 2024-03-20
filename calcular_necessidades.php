<?php
// Verificar se já inicializou os resultados para evitar duplicações
if (!isset($resultados_inicializados)) {
    session_start();

    // Simulação das informações do usuário (substitua pelos dados do banco de dados)
    $_SESSION['peso'] = 77; // em kg
    $_SESSION['altura'] = 1.77; // em metros
    $_SESSION['idade'] = 19; // em anos
    $_SESSION['sexo'] = 'masculino'; // ou 'feminino'
    $_SESSION['nivel_atividade'] = 'ativo'; // ou outro nível de atividade

    // Constantes para os cálculos
    define('CALORIAS_PROTEINAS', 4); // Calorias por grama de proteína
    define('CALORIAS_CARBOIDRATO', 4); // Calorias por grama de carboidrato
    define('CALORIAS_GORDURAS', 9); // Calorias por grama de gordura

    // Cálculo do Índice de Massa Corporal (IMC)
    $imc = number_format($_SESSION['peso'] / ($_SESSION['altura'] * $_SESSION['altura']), 2);

    // Cálculo do Gasto Calórico Diário (GCD)
    if ($_SESSION['sexo'] == 'masculino') {
        $gcd = (10 * $_SESSION['peso']) + (6.25 * $_SESSION['altura'] * 100) - (5 * $_SESSION['idade']) + 5;
    } else {
        $gcd = (10 * $_SESSION['peso']) + (6.25 * $_SESSION['altura'] * 100) - (5 * $_SESSION['idade']) - 161;
    }

    switch ($_SESSION['nivel_atividade']) {
        case 'sedentario':
            $gcd *= 1.2;
            break;
        case 'leve':
            $gcd *= 1.375;
            break;
        case 'moderado':
            $gcd *= 1.55;
            break;
        case 'ativo':
            $gcd *= 1.725;
            break;
        case 'muito_ativo':
            $gcd *= 1.9;
            break;
    }

    // Cálculo das Necessidades Diárias de Proteínas, Carboidratos e Gorduras
    // Supondo 2.2g/kg para um adulto ativo
    $proteinas = $_SESSION['peso'] * 2.2;
    if (is_numeric($proteinas)) {
        $calorias_proteinas = number_format($proteinas * CALORIAS_PROTEINAS, 2);
    } else {
        $calorias_proteinas = 0; // Ou algum valor padrão se $proteinas não for numérico
    }

    // 25% do GCD para gorduras
    $calorias_gorduras = number_format(($gcd * 0.25) / CALORIAS_GORDURAS, 2);

    // O restante do GCD para carboidratos
    $calorias_carboidratos = number_format($gcd - ($calorias_proteinas + $calorias_gorduras), 2);

    $resultados_inicializados = true; // Marcar como inicializado para evitar duplicações
}
?>
