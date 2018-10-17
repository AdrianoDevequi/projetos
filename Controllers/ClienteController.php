<?php
require_once 'Models/Cliente.php';
require_once 'UtilController.php';

class ClienteController {
public function criarConta($nome_cliente, $email_cliente) {


        if (trim($nome_cliente) == "" || trim($email_cliente) == "" ) {

            return 0;
        }

        try {

            $objdao = new ClienteDAO();

            $data_cadastro = UtilController::DevolverDataHoraAtual();

            $id = $objdao->criarConta($nome_cliente, $email_cliente, $data_cadastro);

            return $id;
            
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -100;
        }
    }
}
