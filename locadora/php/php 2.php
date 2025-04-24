<?php
//Array com categoria de filmes
$categorias = ["Ação", "Aventura", "Ficção Ciêntifica", "Terror", "Comédia", "Suspense"];
//adicionando nova categoria
$nova_categoria = "Drama";// o valor da nova categoria será recebido do front-end
$categorias[]= "$nova_categoria";
//array's com filmes de cada categoria
$filmes = [
"Ação"=> ["Cargarga Explosiva", "Duro de Matar 2.0", "John wick-Baba Yaga"],
"Aventura"=> ["Harry Potter e a pedra filosofal", "Harry potter e o cálice de fogo", "Harry potter e o prisioneiro de Askaban"],
"Ficção Ciêntifica"=> ["Entre Montanhas", "Independence day", "Parque dos dinossauros"],
"Terror"=> ["Anabelle", "Massacre da Serra Elétrica", "Jogos mortais"],
"Comédia"=> ["Os cabra da peste", "Debiloide", "Se beber não case"],
"Suspense"=> ["Bird Box", "Gravidade", "Conclave"],
];
//adicionando novos filmes a nova categoria
$filmes[$nova_categoria] = ["The Electric State", "Delicious", "Pequena Sibéria"];
$i = "Drama";
//texto introdutório (seria feito em html)
echo "Locadora de Filmes\n";
echo "Escolha a categoria!\n";
foreach ($categorias as $numero => $nome) {
    echo ($numero + 1). " - " . $nome . PHP_EOL;
};
/*condicional onde se o valor selecionado de $i for x, exiba isso*/
if (in_array($i, $categorias)) {
    echo "\nVocê escolheu a categoria: " . $i . "\n";
    echo "Filmes disponíveis:\n";
    foreach ($filmes[$i] as $item) {
        echo "- " . $item . "\n";
    };
} else {
    echo "\nCategoria \"" . $i . "\" não encontrada.\n";
};