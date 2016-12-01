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
    
    public function verReferencia($id) {
        $dados = array();
        if (isset($id) && !empty($id)) {
            $stmt = $this->db->prepare("SELECT count(concat(ref.referencia,' : ',ref.valor)) as qtd_referencia FROM "
                  . "tb_resultado_exame rexa LEFT JOIN tb_referencia ref ON (rexa.fk_nome_exame = ref.fk_nome_exame) "
                  . "LEFT JOIN tb_nome_exame as ne ON (ne.id_nome_exame = rexa.fk_nome_exame) WHERE rexa.id_resultado_exame = ?");
            $stmt->bindValue(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $dados['qtd_ref'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT rexa.id_resultado_exame AS idresultadoexame, concat(rexa.resultado,' ',ne.medida) "
                  . "AS resultado, ref.referencia AS ref, ref.valor AS valor, rexa.fk_exame AS numexame FROM tb_resultado_exame rexa "
                  . "LEFT JOIN tb_referencia ref ON (rexa.fk_nome_exame = ref.fk_nome_exame) LEFT JOIN tb_nome_exame as ne "
                  . "ON (ne.id_nome_exame = rexa.fk_nome_exame) WHERE rexa.id_resultado_exame = ?");
            $stmt->bindValue(1, $id, PDO::PARAM_INT);
            $stmt->execute();
            $dados['referencias'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        }
    }

}
