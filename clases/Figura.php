<?php

abstract class Figura
{
	private $perimetro;
	private $area;
	private $tipo;
    const PI=3.1416;

    /**
     * Figura constructor.
     */
    public function __construct()
    {
    }

    public function show(){
        echo "El perimetro es: ".$this->perimetro;
        echo "<br>";
        echo "El area es: ".$this->area;
    }

    public abstract function calcularArea();
    public abstract function calcularPerimetro();

    /**
     * @return mixed
     */
    public function getPerimetro()
    {
        return $this->perimetro;
    }

    /**
     * @param mixed $perimetro
     */
    public function setPerimetro($perimetro)
    {
        $this->perimetro = $perimetro;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     */
    public function setArea($area)
    {
        $this->area = $area;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }






}

