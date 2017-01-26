<?php

/**
 * Created by PhpStorm.
 * User: u
 * Date: 1/24/2017
 * Time: 10:57 PM
 */
class Trapecio extends Figura
{
    private $baseMenor;
    private $baseMayor;
    private $altura;
    private $c;

    /**
     * Trapecio constructor.
     * @param $baseMenor
     * @param $baseMayor
     * @param $altura
     * @internal param $c
     */
    public function __construct($baseMenor, $baseMayor, $altura)
    {
        parent::__construct();
        $this->baseMenor = $baseMenor;
        $this->baseMayor = $baseMayor;
        $this->altura = $altura;

    }


    public function calcularArea(){
        $area=(($this->getBaseMenor()+$this->getBaseMayor())*$this->getAltura())/2;
        parent::setArea($area);
    }

    public function calcularPerimetro(){
        $this->setC(sqrt($this->getBaseMayor()*$this->getBaseMayor()+$this->getBaseMenor()*$this->getBaseMenor()));
        $perimetro=2*$this->getC()+$this->getBaseMenor()+$this->getBaseMayor();
        parent::setPerimetro($perimetro);
    }

    /**
     * @return mixed
     */
    public function getBaseMenor()
    {
        return $this->baseMenor;
    }

    /**
     * @param mixed $baseMenor
     */
    public function setBaseMenor($baseMenor)
    {
        $this->baseMenor = $baseMenor;
    }

    /**
     * @return mixed
     */
    public function getBaseMayor()
    {
        return $this->baseMayor;
    }

    /**
     * @param mixed $baseMayor
     */
    public function setBaseMayor($baseMayor)
    {
        $this->baseMayor = $baseMayor;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param mixed $c
     */
    public function setC($c)
    {
        $this->c = $c;
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

?>