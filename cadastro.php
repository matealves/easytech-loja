<?php
include "conexao.inc";/*chama a conexao.incque é o atalho pra chamar o db*/
$res=mysqli_query($con,"SELECT * from tb_cadastro");/*informamos o nome da conexao"$con"criamos uma variavel "res" para poder usar o comando my sql*/
$linhas=mysqli_num_rows($res);/*comando pra retornar o numero de linhas esta retornando*/
echo "encontrados $linhas registros na tbela tb_cadastros";/*mostra a qtd de registro na tabela*/
mysqli_close($con);/*comando para fechar a tabela*/
?>