<?php

echo "Bem-vindo ao armazenador de dados de clientes \n";

$person = array(
    "name" => "John\n",
    "age" => 30,
    "\ncity" => "New York"
);

foreach ($person as $key => $value) {
    echo "$key: $value";
}


?>