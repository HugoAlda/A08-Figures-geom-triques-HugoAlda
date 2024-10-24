<?php

    include_once 'Figura.php';

    class Cuadrado extends Figura {
        public $lado;

        public function __construct($nombre, $lado) {
            parent::__construct($nombre);
            $this->lado = $lado;
        }

        public function getLado(){
            return $this->lado;
        }

        public function calcularArea() {
            return pow($this->lado, 2);
        }

        public function calcularPerimetro() {
            return 4 * $this->lado;
        }

        public function __toString(){
            return "El área de la figura geométrica " . $this->getNombre() . " es: " . round($this->calcularArea()) . " y el perímetro es: " . round($this->calcularPerimetro()) . ".";        
        }
    }