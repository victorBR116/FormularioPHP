<?php
session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];

echo "esse é o seu nome: $nome, e esse é o seu email: $email" . "<br>" . session_id();