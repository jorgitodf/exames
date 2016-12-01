<?php

class ajaxController extends controller {

    protected $referenciasModel;
    
    public function __construct() {
        parent::__construct();
        $this->referenciasModel = new ReferenciasModel();
    }    

    public function index(){}
    
    public function getReferencia() {
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $id = intval(addslashes($_GET['id']));
            $data = $this->referenciasModel->getReferenciaById($id);
        }
        echo json_encode($data);
    }

    public function cadastrar_cliente() {
        if (isset($_POST['num_exame']) && empty($_POST['num_exame'])) {
            $erro1 = "Campo num_exame vazio";
        }    
        if (isset($_POST['data_exame']) && empty($_POST['data_exame'])) {
            $erro2 = "Campo data_exame vazio";
        }    
        
        echo json_encode(array("erro1" => $erro1, "erro2" => $erro2));
    }


    
    
    
    
    
    public function search_clients() {
    	$data = array();
    	$u = new Users();
        $u->setLoggedUser();
    	$c = new Clients();

    	if(isset($_GET['q']) && !empty($_GET['q'])) {
    		$q = addslashes($_GET['q']);

    		$clients = $c->searchClientByName($q, $u->getCompany());

    		foreach($clients as $citem) {
    			$data[] = array(
    				'name' => $citem['name'],
    				'link' => BASE_URL.'/clients/edit/'.$citem['id'],
                    'id'   => $citem['id']
    			);
    		}
    	}

    	echo json_encode($data);
    }
}
















