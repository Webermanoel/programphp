<?php
echo "Bem-vindo ao armazenador de dados de clientes \n";

function dadosNome(&$nomes) { 
    for ($i = 0; $i < 5; $i++) { 
        echo "Digite o nome: (" . ($i + 1) . "/5) ou digite 'sair' para finalizar nomes: \n"; 
        $nome = trim(fgets(STDIN));

        if (strtolower($nome) === "sair") {
            break; 
        }

        if (empty($nome)) {
            echo "Erro: O nome não pode ser vazio!\n";
            $i--; 
        } else {
            $nomes[] = $nome; 
        }
    }
}

function dadosIdade(&$idades, $quantidade) { 
    for ($i = 0; $i < $quantidade; $i++) { 
        echo "Digite a idade do cliente " . ($i + 1) . " ou digite 'sair' para finalizar idades: "; 
        $input = trim(fgets(STDIN));

        if (strtolower($input) === "sair") {
            break; 
        }

        if (!ctype_digit($input)) {
            echo "Erro: Você precisa digitar um número válido!\n";
            $i--; 
        } else {
            $idades[] = (int) $input;
        }
    }
}

function dadosPlanos(&$planos, $quantidade) {
    $listaPlanos = ["basico", "intermediario", "premium"];

    for ($i = 0; $i < $quantidade; $i++) {
        echo "Escolha um plano para " . ($i + 1) . "º cliente (basico, intermediario, premium) ou digite 'sair' para finalizar planos: ";
        $planoEscolhido = trim(fgets(STDIN));

        if (strtolower($planoEscolhido) === "sair") {
            break; 
        }

        if (in_array($planoEscolhido, $listaPlanos)) {
            $planos[] = $planoEscolhido;
        } else {
            echo "Erro: Plano inválido! Escolha entre basico, intermediario ou premium.\n";
            $i--; 
        }
    }
}

function dadosCadastro() {
    $nomes = []; 
    $idades = [];
    $planos = [];

    dadosNome($nomes); 
    
    if (count($nomes) > 0) {
        dadosIdade($idades, count($nomes)); 
    }

    if (count($idades) > 0) {
        dadosPlanos($planos, count($idades));
    }

    echo "\nOs dados cadastrados:\n";
    for ($i = 0; $i < count($nomes); $i++) {
        $idade = $idades[$i] ?? "Não informada";
        $plano = $planos[$i] ?? "Não escolhido";

        echo "Cliente " . ($i + 1) . ":\n";
        echo "Nome: " . $nomes[$i] . "\n";
        echo "Idade: " . $idade . " anos\n";
        echo "Plano: " . ucfirst($plano) . "\n";
        echo "----------------------\n";
    }
}

dadosCadastro();
