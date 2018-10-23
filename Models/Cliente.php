<?php
require_once 'Conexao.class.php';


class ClienteModel extends Conexao {

    /** @var PDO */

    private $conexao;

    /** @var PDOStatment */

    private $sql;

    public function cadastrarUsuario($nome_cliente, $email_cliente, $data_cadastro ) {

        // 1 Passo: Resgatar a conexão

        $this->conexao = parent::getConexao();

        //2 passo: montar a instrução SQL

        $comando_sql = "INSERT INTO tb_cliente "

                . "(nome, email, data_cadastro )"

                . "VALUES (?,?,?)";

        // 3 passo: vincular a conexão com a instrução SQL

        $this->sql = $this->conexao->prepare($comando_sql);

        // 4 passo: Vincular os parametros com os links da instrução

        $this->sql->bindValue(1, $nome_cliente);

        $this->sql->bindValue(2, $email_cliente);

        $this->sql->bindValue(3, $data_cadastro);

        // 5 passo: Executar

        $this->sql->execute();

        $recupera_id = $this->conexao->lastInsertId();

        return $recupera_id;

    }


    public function cadastrarEndereco($rua, $numero, $cidade) {

        // 1 Passo: Resgatar a conexão

        $this->conexao = parent::getConexao();

        //2 passo: montar a instrução SQL

        $comando_sql = "INSERT INTO tb_endereco "

                . "(rua, numero, cidade)"

                . "VALUES (?,?,?)";

        // 3 passo: vincular a conexão com a instrução SQL

        $this->sql = $this->conexao->prepare($comando_sql);

        // 4 passo: Vincular os parametros com os links da instrução

        $this->sql->bindValue(1, $rua);

        $this->sql->bindValue(2, $numero);

        $this->sql->bindValue(3, $cidade);

        // 5 passo: Executar

        $this->sql->execute();

    }

}