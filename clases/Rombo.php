<?php

/**
 * Created by PhpStorm.
 * User: u
 * Date: 1/25/2017
 * Time: 8:02 AM
 */
class Rombo extends Figura
{
private $dmenor;
private $dmayor;
private $lados;

    /**
     * Rombo constructor.
     * @param $dmenor
     * @param $dmayor
     * @param $lados
     */
    public function __construct($dmenor, $dmayor, $lados)
    {
        parent::__construct();
        $this->dmenor = $dmenor;
        $this->dmayor = $dmayor;
        $this->lados = $lados;
    }

    public function calcularArea(){
        $ar=($this->dmenor*$this->dmayor)/2;
        parent::setArea($ar);
    }

    public function calcularPerimetro(){
        $per=4*$this->lados;
        parent::setPerimetro($per);
    }

    /**
     * @return mixed
     */
    public function getDmenor()
    {
        return $this->dmenor;
    }

    /**
     * @param mixed $dmenor
     */
    public function setDmenor($dmenor)
    {
        $this->dmenor = $dmenor;
    }

    /**
     * @return mixed
     */
    public function getDmayor()
    {
        return $this->dmayor;
    }

    /**
     * @param mixed $dmayor
     */
    public function setDmayor($dmayor)
    {
        $this->dmayor = $dmayor;
    }

    /**
     * @return mixed
     */
    public function getLados()
    {
        return $this->lados;
    }

    /**
     * @param mixed $lados
     */
    public function setLados($lados)
    {
        $this->lados = $lados;
    }

    function __toString()
    {
        return "Holis";
    }
    public function show(){
        echo "El Perimetro es: ".parent::getPerimetro()."cm<br>";
        echo "El area es: ".parent::getArea()."cm<sup>2</sup>";


    }



}