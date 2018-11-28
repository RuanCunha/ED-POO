<?php

////// QUESTÃO 7 ///////

    class Funcionario{

        //Atributos da Classe
        public $departamento, $salario, $dataEntrada, $CPF;

        public function __construct()
        {
        }

        public function __toString() {
            return $this->mostra();

        }

        //Métodos da Classe
        public function recebeAumento(){

            $novoSalario = $this->salario + ($this->salario*0.1);
            $this->salario = $novoSalario;

        }

        public function calculoGanhoAnual(){
            $ganhoAnual = $this->salario * 12;
            return $ganhoAnual;
        }

        public function mostra(){
            return "O funcionário do departamento de {$this->departamento}, funcionário desde {$this->dataEntrada->getData()} possui o salário de {$this->salario}.\n";
        }

    }


    //Boa correção professor :P


