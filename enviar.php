<?php
 
/*iremos declarar as variaveis que recebemos pelo método post
 
lembra lá na explicação do metodo post o que deveria ser feito? então, os dados
 
serão pegos por aqui e transformados em comunicação entre server e cliente para gerar
 
o email do cara e te enviar*/
 
$nome=$_POST[nome];//aqui pega os dados que foram preenchidos la no formulário com o ID NOME
$email=$_POST[email];//aqui a mesma coisa, mas com o email
$assunto=$_POST[assunto];//aqui a mesma coisa, mas com o assunto
$mensagem=$_POST[mensagem];//aqui a mesma coisa, mas com o assunto
 
//agora vamos enviar todos esses dados usando a função mail que é do PHP
mail("dxclubesemfronteiras@hotmail.com","$assunto","
Nome: $nome
Email: $email
Assunto: $assunto
Mensagem: $mensagem","FROM:$nome<$email>");
 
/*Ele diz assim pro código: "Envia um email para meuemail@meudominio.com.br e que esse email tenha os dados que
foram pegos em ASSUNTO, NOME, EMAIL, ASSUNTO e MENSAGEM, eles foram pegos com o MÉTODO POST e em FROM vai conter
os dados de quem enviou o email, ou seja, la na caixa de entrada do teu e-mail vai ter isso. :)*/
 
echo "sua mensagem foi enviada com sucesso!"; //aí mostramos no navegador da pessoa que enviou o email uma mensagem de sucesso
 
?>