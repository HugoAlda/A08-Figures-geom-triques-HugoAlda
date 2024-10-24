<?php

    include_once 'Figura.php';

    class Esfera extends Figura {
        public $radio;

        public function __construct($nombre, $radio) {
            parent::__construct($nombre);
            $this->radio = $radio;
        }

        public function getRadio(){
            return $this->radio;
        }

        public function calcularArea() {
            return 4 * pi() * pow($this->radio, 2);
        }

        public function calcularPerimetro() {
            return 2 * pi() * $this->radio;
        }

        public function __toString(){
            return "El área de la figura geométrica " . $this->getNombre() . " es: " . round($this->calcularArea()) . " y el perímetro es: " . round($this->calcularPerimetro()) . ".";
        }
    }