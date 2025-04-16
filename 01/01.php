<?php
//condicionais 
/*Muitas vezes, ao escrever código, você deseja executar 
ações diferentes para condições diferentes. Você pode usar
instruções condicionais no seu código para fazer isso.*/
/*Em PHP temos as seguintes instruções condicionais:

"if" declaração - executa algum código se uma condição for verdadeira
"if...else" - declaração - executa algum código se uma condição for verdadeira e outro código se essa condição for falsa
"if...elseif...else" - declaração - executa códigos diferentes para mais de duas condições
"switch" - declaração - seleciona um dos muitos blocos de código a serem executados*/
$opcao =("não");//Considerando que opção pode receber sim e não. if e else
echo "Resposta sobre if e else\n";
if ($opcao == "sim"){
    echo "Obrigado pela compra!\n";
}else {
    echo "Obrigado mesmo assim\n";
        };
/*if, elseif e else podem ser acrescentados outros tipos de 
comparativos nas condicionais if*/
$vendido = ("em_andamento");
echo "Resposta sobre if, elseif e else\n";
if ($vendido == "sim"){
    echo "Volte sempre";
    }elseif("em_andamento"){
    echo "Pois cuida!\n";
    }else{
    echo "Posso lhe enviar as promoções";
    };
/*exemplo de switch,*/
$etapa = "Negociação";
echo "Resposta para a SWITCH\n";
switch ($etapa) {
  case "Escolha_do_produto":
    echo "Apresentando opções\n";
    break;
  case "Produto_escolhido":
    echo "Adicionar ao Carrinho\n";
    break;
  case "Negociação":
    echo "Exibindo Formas de Pagamento\n";
    break;
  default:
    echo "Falar com o supervisor!\n";
};

//ARRAYS
//array associativa, array abreviada
$cliente=["Lana"=>"Moby", "Miguel"=>"Etios", "Solange"=>"Civic", "Luana"=>"Compas" ];
//adicionando elemento a uma array associativa
$cliente["Ana"]="Hb20";
//array indexada
$marca=array("Fiat", "Toyota", "Honda", "Geep");
//adicionando elemento a uma array indexada
$marca[]="Hyundai";
//matriz multidimencional
$vendas = [
    ["Lana", "Moby", "Fiat"],
    ["Miguel", "Etios", "Toyota"],
    ["Solange", "Civic", "Honda"],
    ["Luana", "Compas", "Geep"]
];
//adicionando elementos a uma array multidimencional
$vendas[] = ["Ana", "Hb20", "Hyundai"];
//matriz multidimencional/associativa
$cadastro = [
    "01"=> ["Lana", "Moby", "Fiat"],
    "02"=>["Miguel", "Etios", "Toyota"],
    "03"=>["Solange", "Civic", "Honda"],
    "04"=>["Luana", "Compas", "Geep"]
];
//adicionando elemento a array multidimencional/associativa
$cadastro["05"] = ["Madyson", "Amarok", "Volkswagen"];
//exibindo todos os elementos das array's
echo "Elementos das array's\n";
var_dump($marca,$cliente);
echo "Elementos da array multidimencional\n";
var_dump($vendas);
echo "\n";
echo "Elementos da array multidimencional/associativa\n";
var_dump($cadastro);
//exibindo elementos da array associativa
echo "Elementos da array associativa\n";
echo $cliente["Lana"];
echo "\n";
echo $cliente["Miguel"];
echo "\n";
echo $cliente["Ana"];
echo "\n";
//exibindo elementos da array indexada
echo "Elementos da array indexada\n";
echo $marca["0"];
echo "\n";
echo $marca["4"];
echo "\n";
//exibindo elementos da array multidimencional
echo "Elementos da array multidimencional\n";
echo $vendas["4"]["1"];
echo "\n";
echo $vendas["0"]["0"];
echo "\n";
echo "Elementos da array multidimencional/associativa\n";
foreach ($cadastro["01"] as $item) {
    echo $item . " ";
}
echo "\n";
foreach ($cadastro["05"] as $item) {
    echo $item . " ";
}
echo "\n";

//Funções 

/*O verdadeiro poder do PHP vem de suas funções,
O PHP tem mais de 1000 funções integradas
Além das funções PHP integradas, é possível criar suas próprias funções.
Uma função é um bloco de instruções que podem ser usadas repetidamente em um programa.
Uma função não será executada automaticamente quando uma página for carregada.
Uma função será executada por uma chamada à função.*/

/*Uma declaração de função definida pelo usuário começa com a 
palavra-chave function, seguida pelo nome da função:*/
echo "Resposta da criação e execução de uma função\n";
function finalizarVenda(){
    echo "Compra finalizada, você receberá um código de rastreio\n";
};
finalizarVenda();

//Criando uma função com argumento
echo "Resposta para a criação de função com Argummento\n";
function produtoVendido($Marca = "Honda"){
    echo "Esta é a marca comprado: $Marca\n";
};
produtoVendido();

//Loops/laços de repetição PHP
/*Muitas vezes, ao escrever código, você quer que o mesmo bloco de 
código seja executado repetidamente um certo número de vezes.
Os loops são usados para executar o mesmo bloco de código 
repetidamente, desde que uma determinada condição seja verdadeira.

Em PHP, temos os seguintes tipos de loop:

"while"- percorre um bloco de código enquanto a condição especificada for 
verdadeira.
"do...while"- percorre um bloco de código uma vez e, em seguida, repete o loop 
enquanto a condição especificada for verdadeira.
"for"- percorre um bloco de código um número especificado de vezes.
"foreach"- percorre um bloco de código para cada elemento em uma matriz.
*/
//Loop WHILE
$i = 1;
while ($i < 6) {
  echo $i;
  $i++;
};
//Declaração break, 
//Com a breakinstrução podemos parar o loop mesmo que a condição ainda seja verdadeira:
$i = 1;
while ($i < 6) {
  if ($i == 3) break;
  echo $i;
  $i++;
};
/*O laço do...while do PHP
O do...whileloop sempre executará o bloco de código pelo menos uma vez, então verificará 
a condição e repetirá o loop enquanto a condição especificada for verdadeira.*/
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
/*O loop for
O forloop é usado quando você sabe quantas vezes o script deve ser executado.*/
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
};
/*
O loop foreach em matrizes
O uso mais comum do foreachloop é percorrer os itens de um array.
*/
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $x) {
  echo "$x <br>";
};
echo "Hello class!\n";