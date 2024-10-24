<?php

    include_once 'Figura.php';

    class Rectangulo extends Figura {
        public $ancho;
        public $alto;

        public function __construct($nombre, $ancho, $alto) {
            parent::__construct($nombre);
            $this->ancho = $ancho;
            $this->alto = $alto;
        }
        
        public function getAncho(){
            return $this->ancho;
        }

        public function getAlto(){
            return $this->alto;
        }

        public function calcularArea() {
            return $this->ancho * $this->alto;
        }

        public function calcularPerimetro() {
            return 2 * ($this->ancho + $this->alto);
        }

        public function __toString(){
            return "El área de la figura geométrica " . $this->getNombre() . " es: " . round($this->calcularArea()) . " y el perímetro es: " . round($this->calcularPerimetro()) . ".";
        }
    }