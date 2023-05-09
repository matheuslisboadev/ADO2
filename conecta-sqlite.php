<?php
function conectar() {
    try {
        $db_file = "C:\\xampp\\htdocs\\transportadora.db";
        
        return new PDO("sqlite:$db_file");
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
        throw $e;
    }
}
?>