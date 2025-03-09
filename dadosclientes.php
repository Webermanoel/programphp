<?php
echo "Bem-vindo ao armazenador de dados de clientes \n";

function dadosCadastro(){
    $nomes = []; 
    $idades = [];

    function dadosNome(&$nomes) { 
        for($i = 0; $i < 5; $i++) { 
            echo "Digite o nome: (" . ($i + 1) . "/5): "; 
            $nome = trim(fgets(STDIN));

            if (empty($nome)) {
                echo "Erro: O nome não pode ser vazio!\n";
                $i--; 
            } else {
                $nomes[] = $nome; 
            }
        }
    }

    function dadosIdade(&$idades) { 
        for($i = 0; $i < 5; $i++) { 
            echo "Digite a idade: (" . ($i + 1) . "/5): "; 
            $input = trim(fgets(STDIN));

            if (!is_numeric($input)) {
                echo "Erro: Você precisa digitar um número!\n";
                $i--; 
            } else {
                $idades[] = (int) $input;
            }
        }
    }
    
    dadosNome($nomes); 
    dadosIdade($idades); 

    echo "Os dados foram cadastrados com sucesso: \n";
    print_r($nomes); 
    print_r($idades);
}

dadosCadastro();
?>
