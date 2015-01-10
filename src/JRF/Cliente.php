<?php
namespace JRF;

class Cliente {
    
    protected $conn;
    
    public function __construct(ConexaoInterface $conexao){
        $this->conn = $conexao::getConn();
    }
    
    public function listar(){
        $query = 'SELECT * FROM Usuarios';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
