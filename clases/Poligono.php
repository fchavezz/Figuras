<?php

/**
 * Created by PhpStorm.
 * User: u
 * Date: 1/24/2017
 * Time: 11:24 PM
 */
class Poligono extends Figura
{
    private $clados,$cmlado;

    /**
     * Poligono constructor.
     * @param $clados
     * @param $cmlado
     */
    public function __construct($clados, $cmlado)
    {
        parent::__construct();
        $this->clados = $clados;
        $this->cmlado = $cmlado;
    }


    public function calcularArea()
    {
        $area=360/$this->clados;
        $apotema=($this->cmlado/2)/(tan(($area/2)*(PI()/180)));
        $area=(parent::getPerimetro()*($apotema))/2;
        parent::setArea($area);
    }

    public function calcularPerimetro()
    {
        $perimetro=$this->clados*$this->cmlado;
        parent::setPerimetro($perimetro);
    }

    /**
     * @return mixed
     */
    public function getClados()
    {
        return $this->clados;
    }

    /**
     * @param mixed $clados
     */
    public function setClados($clados)
    {
        $this->clados = $clados;
    }

    /**
     * @return mixed
     */
    public function getCmlado()
    {
        return $this->cmlado;
    }

    /**
     * @param mixed $cmlado
     */
    public function setCmlado($cmlado)
    {
        $this->cmlado = $cmlado;
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