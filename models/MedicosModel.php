<?php

class MedicosModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getMedicos() {
        $stmt = $this->db->query("SELECT * FROM tb_medico ORDER BY nome_med ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}
