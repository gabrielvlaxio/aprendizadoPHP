<?php
    class conectar {
        private $server = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "sistema";
    

    public function conexao() {
        $conexao = mysqli_connect ($this->server,$this->user,$this->password,$this->db);
          return $conexao;
    }
}
              
?>