<?php
session_start();

$_SESSION['Cor'] = 'Azul';
$_SESSION['Carro'] = 'Azera';

echo $_SESSION['Cor']. "<br>" . $_SESSION['Carro'] . "<br>" . session_id(); 