<?php

    include_once 'Figura.php';

    class Triangulo extends Figura {
        public $base;
        public $altura;

        public function __construct($nombre, $base, $altura) {
            parent::__construct($nombre);
            $this->base = $base;
            $this->altura = $altura;
        }
        
        public function getBase() {
            return $this->base;
        }

        public function getAltura() {
            return $this->altura;
        }

        public function calcularArea() {
            return ($this->base * $this->altura) / 2;
        }

        public function calcularPerimetro() {
            $lado1 = $this->base;
            $lado2 = sqrt(pow($this->base / 2, 2) + pow($this->altura, 2));
            $lado3 = $lado2;
            return $lado1 + $lado2 + $lado3;
        }

        public function __toString(){
            return "El área de la figura geométrica " . $this->getNombre() . " es: " . round($this->calcularArea()) . " y el perímetro es: " . round($this->calcularPerimetro()) . ".";
        }
    }
