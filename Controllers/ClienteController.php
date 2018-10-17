<?php
require_once 'Models/Cliente.php';
require_once 'UtilController.php';

class ClienteController {
public function cadastrarUsuario($nome_cliente, $email_cliente) {


        if (trim($nome_cliente) == "" || trim($email_cliente) == "" ) {

            return 0;
        }

        try {

            $objdao = new ClienteModel();

            $data_cadastro = UtilController::DevolverDataHoraAtual();

            $id = $objdao->cadastrarUsuario($nome_cliente, $email_cliente, $data_cadastro);

            return $id;
            
        } catch (Exception $ex) {

            echo $ex->getMessage();

            return -100;
        }
    }
}
