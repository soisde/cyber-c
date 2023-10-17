<?php

class Conexao
{

  public static function LigarConexao()
  {

    //$conn = new PDO('mysql:dbname=dbcybercompany;host=localhost', 'root', '');

    $conn = new PDO( 'mysql:dbname=u283879542_cybercompany;host=auth-db1064.hstgr.io', 'u283879542_cybercompany', 'SenacAgencia02');

    //

    // dbname= Nome da tabela; host= onde se localiza o banco; root= usuario; ''= senha 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
  }
}
