<?php

class ExamesModel extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function editarResultadoExame($idResultadoExames) {
        if (!empty($idResultadoExames) && is_array($idResultadoExames)) {
            $ids = implode(',', $idResultadoExames);
            $stmt = $this->db->prepare("SELECT res.id_resultado_exame AS id, ne.nome_exame AS nome, res.resultado AS resultado, "
                  . "ne.medida AS medida FROM tb_resultado_exame AS res JOIN tb_nome_exame AS ne ON (ne.id_nome_exame = "
                  . "res.fk_nome_exame) WHERE res.id_resultado_exame IN ($ids) ORDER BY res.id_resultado_exame ASC");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }
    
    public function salvarResultadoEditadoExame($resultadoExames) {
        if (!empty($resultadoExames) && is_array($resultadoExames)) {
            try {
                $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                $this->db->beginTransaction();
                    foreach ($resultadoExames as $key => $value) {
                        $stmt = $this->db->prepare("UPDATE tb_resultado_exame SET resultado = '$value' WHERE id_resultado_exame = $key");
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
    
    public function listarExamesAdicionar($idExame, $idGrupoExame) {
        $dados = array();
        if ((isset($idExame) && !empty($idExame)) && (isset($idGrupoExame) && !empty($idGrupoExame))) {
            $stmt = $this->db->prepare("SELECT nex.id_nome_exame AS id, nex.nome_exame AS nome, nex.fk_grupo_exame AS id_grupo "
                  . "FROM tb_nome_exame nex JOIN tb_grupo_exame AS gex ON (gex.id_grupo_exame = nex.fk_grupo_exame) "
                  . "WHERE NOT EXISTS (SELECT * FROM vw_litar_exames_adicionar eadc WHERE eadc.fk_nome_exame = nex.id_nome_exame "
                  . "AND eadc.id_exame = ? AND eadc.id_grupo_exame = ?) AND gex.id_grupo_exame = ? ORDER BY nex.nome_exame");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->bindValue(2, $idGrupoExame, PDO::PARAM_INT);
            $stmt->bindValue(3, $idGrupoExame, PDO::PARAM_INT);
            $stmt->execute();
            $dados['tipoexames'] = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            
            $stmtex = $this->db->prepare("SELECT exa.id_exame AS id_exa, exa.num_exame, DATE_FORMAT(exa.data_exame, '%d/%m/%Y') "
                  . "AS dt_exame FROM tb_exame AS exa WHERE id_exame = ?");
            $stmtex->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmtex->execute();
            $dados['exame'] = $stmtex->fetchAll(PDO::FETCH_ASSOC);
            
            return $dados;
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
    
    public function contaExamesResultadoAberto() {
        $dados = array();
        $stmt = $this->db->prepare("SELECT distinct(SELECT EXTRACT(year FROM data_exame)) AS ano FROM tb_exame ORDER BY ano ASC");
        $stmt->execute();
        $dados['data'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados['data'] as $value) {
            $stmt = $this->db->prepare("SELECT count(DISTINCT rexa.fk_exame) AS qtd, rexa.fk_exame AS idExame, "
                  . "(SELECT EXTRACT(year FROM exa.data_exame)) AS data FROM tb_resultado_exame AS rexa JOIN tb_exame AS exa "
                  . "ON (exa.id_exame = rexa.fk_exame) WHERE rexa.resultado = '' OR rexa.resultado IS NULL AND exa.data_exame "
                  . "BETWEEN '".$value['ano']."-01-01' AND '".$value['ano']."-12-31'");
            $stmt->execute();
            $dados['exames'] = $stmt->fetch(PDO::FETCH_ASSOC);
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
                try {
                    $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                    $this->db->beginTransaction();

                    $stmt = $this->db->prepare("INSERT INTO tb_exame (num_exame,data_exame,fk_paciente,fk_medico,fk_laboratorio,fk_tipo_exame) 
                        VALUES (?,?,?,?,?,?)");
                    $stmt->bindValue(1, $exame['num_exame'], PDO::PARAM_STR);
                    $stmt->bindValue(2, $exame['data_exame'], PDO::PARAM_STR);
                    $stmt->bindValue(3, $exame['fk_paciente'], PDO::PARAM_INT);
                    $stmt->bindValue(4, $exame['fk_medico'], PDO::PARAM_INT);
                    $stmt->bindValue(5, $exame['fk_laboratorio'], PDO::PARAM_INT);
                    $stmt->bindValue(6, $exame['fk_tipo_exame'], PDO::PARAM_INT);
                    $stmt->execute();

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
    
    public function getLastIdExame() {
        $stmt = $this->db->query("SELECT id_exame FROM tb_exame ORDER BY id_exame DESC LIMIT 1");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function adcionarTipoDeExames($idExame, $idGrupo, $tipoDeExame) {
        if ((isset($idExame) && !empty($idExame)) && (isset($tipoDeExame) && !empty($tipoDeExame)) && (isset($idGrupo) && !empty($idGrupo))) {
            $fks = implode(',', $tipoDeExame);
            $resp = "";
            $stmt = $this->db->prepare("SELECT fk_nome_exame FROM tb_resultado_exame WHERE fk_nome_exame IN "
                  . "($fks) AND fk_exame = ?");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $resp = true;
            }
            if ($resp != true) {
                try {
                    $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                    $this->db->beginTransaction();
                    foreach ($tipoDeExame as $value) {
                        $stmt = $this->db->prepare("INSERT INTO tb_resultado_exame (fk_exame, fk_nome_exame) VALUES (?, ?)");
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
            return false;
        }
    }


    public function selecionarExames($idExame, $idExamesDetalhe) {
        if ((isset($idExame) && !empty($idExame)) && (isset($idExamesDetalhe) && !empty($idExamesDetalhe))) {
            
            $fks = implode(',', $idExamesDetalhe);
            $resp = "";
            $stmt = $this->db->prepare("SELECT fk_nome_exame FROM tb_resultado_exame WHERE fk_nome_exame IN "
                  . "($fks) AND fk_exame = ?");
            $stmt->bindValue(1, $idExame, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $resp = true;
            }
            if ($resp != true) {
                try {
                    $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                    $this->db->beginTransaction();

                    foreach ($idExamesDetalhe as $value) {
                        $stmt = $this->db->prepare("INSERT INTO tb_resultado_exame (fk_exame, fk_nome_exame) VALUES (?, ?)");
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
    
    public function cadastrarTipoDeExame($tipoExame, $medidaExame, $grupoExame) {
        if (!empty($tipoExame) && !empty($medidaExame) && !empty($grupoExame)) {
            try {
                $this->db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
                $this->db->beginTransaction();

                $stmt = $this->db->prepare("INSERT INTO tb_nome_exame (nome_exame, medida, fk_grupo_exame) VALUES (?,?,?)");
                $stmt->bindValue(1, $tipoExame, PDO::PARAM_STR);
                $stmt->bindValue(2, $medidaExame, PDO::PARAM_STR);
                $stmt->bindValue(3, $grupoExame, PDO::PARAM_INT);
                $stmt->execute();
                
                $this->db->commit();
                return true;

            } catch (PDOException $exc) {
                $this->db->rollback();
                printf($exc);
                return false;
            }
        }
    }
    
    public function verificaExisteTipoDeExame($tipoExame) {
        $stmt = $this->db->prepare("SELECT nome_exame FROM tb_nome_exame WHERE nome_exame = ?");
        $stmt->bindValue(1, $tipoExame, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return 1;
        }
    }
    
    public function verificaExisteExame($num_exame) {
        if (!empty($num_exame) || $num_exame != NULL) {
            $stmt = $this->db->prepare("SELECT num_exame FROM tb_exame WHERE num_exame = ?");
            $stmt->bindValue(1, $num_exame, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $erro = '
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#msgErroExameJaCadastrado").html("Exame já Cadastrado");
                        $("#msgErroExameJaCadastrado").css("display","block");
                    });
                </script>';
                return $erro;
            }
        }
    }

}
