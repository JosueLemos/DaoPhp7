<?php

require_once("config.php");

// Seleciona apenas um usuario por vez->
/*
$root = new Usuario();
$root->loadbyId(3);
echo $root;
*/

// Listagem de todos os usuarios->
/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

// Listagem de usuario buscando o Login-> // vai achar todos os usuarios que tem a letra "a" //
/*
$search = Usuario::search("a"); 
echo json_encode($search);
*/

// Lista um usuario usando login e senha->
/*
$usuario = new Usuario();
$usuario->login("Eduarda", "EITACARAI19919191");
echo $usuario;
*/

// Insert para novo usuario->
/*
$aluno = new Usuario("Tulio", "666");
$aluno->insert();
echo $aluno;
*/

// Update para usuario->
$user = new Usuario();
$user->loadById(8);
$user->update("professor", "CARAIPROFESSORSEELOCO");
echo $user;

?>