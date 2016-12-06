<?php

class ExamesModel extends Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function listaGeralExames() {
        $stmt = $this->db->query("SELECT * FROM vw_lista_geral_exames");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function listarExamePorAno($ano) {
        if (isset($ano) && !empty($ano)) {
            $stmt = $this->db->query("SELECT lge.id_exame as id_exame, lge.num_exame as num_exame, lge.dt_exame as dt_exame, 
                lge.medico as medico, lge.lab as lab, lge.tipo_exame as tipo_exame FROM vw_lista_geral_exames lge JOIN tb_exame e 
                ON (e.id_exame = lge.id_exame) WHERE e.data_exame BETWEEN '".$ano."-01-01' AND '".$ano."-12-31' "
                  . "ORDER BY e.data_exame ASC");
            $stmt->bindValue(1, $ano, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }    
    }

    public function verDetalheExame($idExame) {
        $dados = array();
        if (isset($idExame) && !empty($idExame)) {
            $stmt = $this->db->prepare("SELECT * FROM vw_ver_exame_por_id as epi "
                  . " WHERE epi.id_exame = ? AND epi.id_grupo_exame = 1 "
                  . " ORDER BY epi.id_grupo_exame, epi.id_resultado_exame ASC");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo1'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM vw_ver_exame_por_id as epi "
                  . " WHERE epi.id_exame = ? AND epi.id_grupo_exame = 2 "
                  . " ORDER BY epi.id_grupo_exame, epi.id_resultado_exame ASC");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo2'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM vw_ver_exame_por_id as epi WHERE epi.id_exame = ? AND id_grupo_exame = 3 "
                  . " ORDER BY epi.id_grupo_exame, epi.id_resultado_exame ASC");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo3'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM vw_ver_exame_por_id as epi WHERE epi.id_exame = ? AND id_grupo_exame = 4 "
                  . " ORDER BY epi.id_grupo_exame, epi.id_resultado_exame ASC");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo4'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM vw_ver_exame_por_id as epi WHERE epi.id_exame = ? AND id_grupo_exame = 5 "
                  . " ORDER BY epi.id_grupo_exame, epi.id_resultado_exame ASC");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo5'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM vw_ver_exame_por_id as epi WHERE epi.id_exame = ? AND id_grupo_exame = 6 "
                  . " ORDER BY epi.id_grupo_exame, epi.id_resultado_exame ASC");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo6'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $dados;
        }
    }
    
    public function listarExamesPorGrupo($idExame) { 
        $dados = array();
        if (isset($idExame) && !empty($idExame)) {
            $stmt = $this->db->prepare("SELECT * FROM tb_nome_exame as ne LEFT JOIN tb_grupo_exame as ge ON "
                  . "(ge.id_grupo_exame = ne.fk_grupo_exame) WHERE ge.id_grupo_exame = 1");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo1'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM tb_nome_exame as ne LEFT JOIN tb_grupo_exame as ge ON "
                  . "(ge.id_grupo_exame = ne.fk_grupo_exame) WHERE ge.id_grupo_exame = 2");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo2'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM tb_nome_exame as ne LEFT JOIN tb_grupo_exame as ge ON "
                  . "(ge.id_grupo_exame = ne.fk_grupo_exame) WHERE ge.id_grupo_exame = 3");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo3'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM tb_nome_exame as ne LEFT JOIN tb_grupo_exame as ge ON "
                  . "(ge.id_grupo_exame = ne.fk_grupo_exame) WHERE ge.id_grupo_exame = 4");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo4'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM tb_nome_exame as ne LEFT JOIN tb_grupo_exame as ge ON "
                  . "(ge.id_grupo_exame = ne.fk_grupo_exame) WHERE ge.id_grupo_exame = 5");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo5'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $this->db->prepare("SELECT * FROM tb_nome_exame as ne LEFT JOIN tb_grupo_exame as ge ON "
                  . "(ge.id_grupo_exame = ne.fk_grupo_exame) WHERE ge.id_grupo_exame = 6");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['grupo6'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $dados;
        }

    }

    public function contaExames() {
        $dados = array();
        $data = array();
        $stmt = $this->db->prepare("SELECT distinct(SELECT EXTRACT(year FROM data_exame)) AS data FROM tb_exame ORDER BY data ASC");
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($data as $value) {
            $stmt = $this->db->prepare("SELECT count(id_exame) as qtd_exam, (SELECT EXTRACT(year FROM data_exame)) AS data "
                    . "FROM tb_exame WHERE data_exame BETWEEN '".$value['data']."-01-01' AND '".$value['data']."-12-31'");
            $stmt->execute();
            array_push($dados, $stmt->fetch(PDO::FETCH_ASSOC)); 
            
        }   
        return $dados;
    }   
    
    public function cadastrarNovoExame($exame) {
        if (isset($exame) && !empty($exame)) {
            $resp = "";
            $stmt = $this->db->prepare("SELECT num_exame FROM tb_exame WHERE num_exame = ?");
            $stmt->bindValue(1, $exame['num_exame'], PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $resp = true;
            }
            if ($resp != true) {
                $stmt = $this->db->prepare("INSERT INTO tb_exame (num_exame,data_exame,fk_paciente,fk_medico,fk_laboratorio,fk_tipo_exame) 
                    VALUES (?,?,?,?,?,?)");
                $stmt->bindValue(1, $exame['num_exame'], PDO::PARAM_STR);
                $stmt->bindValue(2, $exame['data_exame'], PDO::PARAM_STR);
                $stmt->bindValue(3, $exame['fk_paciente'], PDO::PARAM_INT);
                $stmt->bindValue(4, $exame['fk_medico'], PDO::PARAM_INT);
                $stmt->bindValue(5, $exame['fk_laboratorio'], PDO::PARAM_INT);
                $stmt->bindValue(6, $exame['fk_tipo_exame'], PDO::PARAM_INT);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    return 1;
                }
            }
            return 0;
        }
    }
    
    public function getLastIdExame() {
        $stmt = $this->db->query("SELECT id_exame FROM tb_exame ORDER BY id_exame DESC LIMIT 1");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function selecionarExames($idExame, $idExamesDetalhe) {
        if ((isset($idExame) && !empty($idExame)) && (isset($idExamesDetalhe) && !empty($idExamesDetalhe))) {
            
            try {
                $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                $this->db->beginTransaction();
                
                foreach ($idExamesDetalhe as $value) {
                    $stmt = $this->db->prepare("INSERT INTO tb_resultado_exame (fk_ame, fk_nome_exame) VALUES (?, ?)");
                    $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
                    $stmt->bindValue(2, $value, PDO::PARAM_INT);
                    $stmt->execute();
                }
                
                $this->db->commit();
                return true;
                
            } catch (PDOException $exc) {
                $this->db->rollback();
                printf($exc);
                return false;
            }

        } 
    }

}
