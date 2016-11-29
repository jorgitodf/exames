<?php

class LaboratoriosModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getLaboratorios() {
        $stmt = $this->db->query("SELECT * FROM tb_laboratorio ORDER BY nome_lab ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getTipoExame() {
        $stmt = $this->db->query("SELECT * FROM tb_tipo_exame ORDER BY tipo_exame ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
