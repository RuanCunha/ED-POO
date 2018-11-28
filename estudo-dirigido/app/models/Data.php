<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 23/11/18
 * Time: 09:10
 */
//Questão 10
//Criando uma classe chamada Data, fica muito mais fácil alterar as informações contendo dias, mês e anos. Assim não se limitaria a apenas
//data de Entrada, mas também poderíamos utilizar data de saída, informações como validade, vencimento e várias outros atributos que envol-
//datas
class Data
{
    //Atributos da Classe
    public $dia, $mes, $ano;

    //Construtor
    public function __construct(int $dia, int $mes, int $ano) {

        if ($dia < 1 || $dia > 31){
            die("Data inválida, da uma arrumada ai meu camarada!");
        } else {
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;
        }

    }

    public function __toString()
    {
        return $this->getData();
    }

    public function getData() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}
