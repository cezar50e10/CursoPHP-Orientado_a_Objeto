<?php

class Caneta
{
    public $modelo;
    public  $cor;
    private $ponta;
    protected $carga;
    protected  $tampada;
    
    public function __construct($p){
        $this->modelo = "Preto";
        $this->tampar();
        $this->setPonta($p);
    }
    
    public function rabiscar(){
        if ($this->tampada == TRUE) {
            echo "Caneta esta fechada, não da para rabiscar";
        }else{
            echo"Estou rabiscando";
        }
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
    
    
    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @return mixed
     */
    public function getPonta()
    {
        return $this->ponta;
    }

    /**
     * @return mixed
     */
    public function getCarga()
    {
        return $this->carga;
    }

    /**
     * @return boolean
     */
    public function getTampada()
    {
        return $this->tampada;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    /**
     * @param mixed $ponta
     */
    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    /**
     * @param mixed $carga
     */
    public function setCarga($carga)
    {
        $this->carga = $carga;
    }

    /**
     * @param boolean $tampada
     */
    public function setTampada($tampada)
    {
        $this->tampada = $tampada;
    }


}

