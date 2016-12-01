<?php

class ReferenciasModel extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function getReferenciaById($id) {
        if (isset($id) && !empty($id)) {
            $stmt = $this->db->prepare("SELECT ref.referencia AS referencia, ref.valor AS valor, ref.id_referencia AS idreferencia "
                    . "FROM tb_referencia ref JOIN tb_nome_exame ne ON (ne.id_nome_exame = ref.fk_nome_exame) "
                    . "WHERE ne.id_nome_exame = ? ORDER BY ref.id_referencia");
            $stmt->bindValue(1, $id, PDO::PARAM_INT);
            $stmt->execute();            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

    }

}
