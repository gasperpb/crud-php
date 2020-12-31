<?php 
try{// faz conexão com o banco de dados
    $conectar =new PDO("mysql:host=localhost;port=3306;dbname=pdo;","root","");
    echo "Conectado com sucesso";

}catch (PDOException $e) {
      //caso ocorra algum erro na conexão com o banco, 

        echo 'falha ao conectar com banco de dados'. $e->getMessage();

}