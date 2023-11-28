<?php 
class Alumno
{
    private $legajo;
    private $nombre;
    private $dni;
    private $materias;
    
    public function __construct($nombre,$dni,$legajo=-1)
    {
        
    $this->legajo=$legajo;
    $this->nombre=$nombre;
    $this->dni=$dni;
    $this->materias=[];
    
    }
    public function get_legajo()
    {
        return $this->legajo;
    }

    public function set_legajo($legajo)
    {
    
        $this->legajo= isset($legajo)&& is_numeric($legajo)? $legajo:-1;
    }
    public function get_nombre()
    {
        return $this->nombre;
    }

    public function set_nombre($nombre)
    {
    
        if(isset($nombre))$this->nombre=$nombre;
    }
    public function get_dni()
    {
        return $this->dni;
    }

    public function set_dni($dni)
    {  
        if(isset($dni) && is_numeric($dni))$this->dni=$dni;
    }
    public function get_materias()  
    {
        return $this->materias;
    }
    public function add_materia($materia)
    {
        if(isset($materia) && !in_array(strtolower($materia),$this->materias))
        {
            $this->materias[]=$materia;

        }   
    }
    public function toString()
    {
        $rta= "nombre: {$this->nombre} legajo: {$this->legajo} dni: {$this->dni}";
        $rta.=" Materias: </br>";
        foreach ($this->materias as $materia)
        {
            $rta.=$materia."</br>";
        }
        return $rta;  
    }


}

$alumno1=new Alumno("anya",60300800,1000);
$alumno1->add_materia("php");
$alumno1->add_materia("js");

echo $alumno1->toString();


$alumno2=new Alumno("ramon",64300800,1001);
$alumno2->add_materia("c");
$alumno2->add_materia("html");

echo $alumno2->toString();


$alumno3=new Alumno("marta",60300802,1002);
$alumno3->add_materia("git");
$alumno3->add_materia("sql");

echo $alumno3->toString();


$alumno4=new Alumno("andres",64300803,1003);
$alumno4->add_materia("css");
$alumno4->add_materia("c#");

echo $alumno4->toString();

$alumno5=new Alumno("Pascal",64305803,1004);
$alumno5->add_materia("bash");
$alumno5->add_materia("ts");

echo $alumno5->toString();
?>