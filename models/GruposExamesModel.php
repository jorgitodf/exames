<?php

class GruposExamesModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getGruposExames() {
        $stmt = $this->db->query("SELECT * FROM tb_grupo_exame ORDER BY nome_grupo ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
