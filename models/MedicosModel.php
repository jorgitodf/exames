<?php

class MedicosModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMedicos() {
        $stmt = $this->db->query("SELECT * FROM tb_medico ORDER BY nome_med ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function listarMedicos($medico) {
        if (isset($medico) && !empty($medico)) {
            $stmt = $this->db->prepare("SELECT * FROM tb_medico ORDER BY nome_med ASC");
            $stmt->bindValue(1, $medico, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
   }

}
