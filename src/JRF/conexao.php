<?php
namespace JRF;

class Conexao implements ConexaoInterface{
    protected static $host = 'localhost';
    protected static $user = 'root';
    protected static $pass = 'secret';
    protected static $db   = 'di_server';
    protected static $instance = NULL;
    
    static final function criaConn()
    {
        try {
            if(self::$instance == NULL){
                $dsn = 'mysql:host='.self::$host.';dbname='.self::$db;
                $options = [ \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'];
                self::$instance = new \PDO($dsn, self::$user, self::$pass, $options);
            }
        } catch (Exception $exc) {
            echo 'Erro ao conectar - '.$exc->getMessage();
        }

        self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return self::$instance;
    }
    
    public static function getConn(){
        return self::criaConn();
    }
}



