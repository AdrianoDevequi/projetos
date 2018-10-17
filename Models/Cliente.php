<?php
require_once 'Conexao.class.php';


class PessoaDAO extends Conexao {

    /** @var PDO */

    private $conexao;

    /** @var PDOStatment */

    private $sql;

    public function criarContaFace($nome_pessoa, $email_pessoa, $senha_pessoa, $status_pessoa, $data_cadastro, $id_face) {

        // 1 Passo: Resgatar a conexão

        $this->conexao = parent::getConexao();

        //2 passo: montar a instrução SQL

        $comando_sql = "INSERT INTO tb_cliente "

                . "(status, nome, data_cadastro )"

                . "VALUES (?,?,?)";

        // 3 passo: vincular a conexão com a instrução SQL

        $this->sql = $this->conexao->prepare($comando_sql);

        // 4 passo: Vincular os parametros com os links da instrução

        $this->sql->bindValue(1, $nome_pessoa);

        $this->sql->bindValue(2, $email_pessoa);

        $this->sql->bindValue(3, $data_cadastro);

        // 5 passo: Executar

        $this->sql->execute();

        $recupera_id = $this->conexao->lastInsertId();

        return $recupera_id;

    }
}