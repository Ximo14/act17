<?php
class conexion
{
  private $mysqli;
  private $errorConexion=false;


// REALIZAMOS CONEXION
  function __construct()
    {
      $this->mysqli = new mysqli ("localhost","root","","beneficios");
      if ($this->mysqli->connect_errno) {
        //Error
        $this->errorConexion=true;
      }
    }

    public function getErrorConexion()
    {
      return $this->errorConexion;
    }

    public function gastos()
    {
      return $resultado1=$this->mysqli->query("SELECT gasto FROM gastos");
    }

    public function ventas()
    {
      return $resultado2=$this->mysqli->query("SELECT venta FROM ventas");
    }

    public function ventasSem($semana)
    {
      return $resultado1=$this->mysqli->query("SELECT venta FROM ventas WHERE num_semana='".$semana."'");
    }

    public function gastosSem($semana)
    {
      return $resultado1=$this->mysqli->query("SELECT gasto FROM gastos WHERE num_semana='".$semana."'");
    }
}

?>
