<?php
    class Persona{
        private $nombre;
        private $telefono;

        public function __construct($nomb, $tel){
            $this->nombre = $nomb;
            $this->telefono= $tel;
        }
        public function get_data(){
            return "Nombre: ".$this->nombre."<br> Telefono: ".$this->telefono;

        }
    }
    class Alumno extends Persona{
        private $grado;
        private $turno;

        public function __construct($nomb, $tel, $grado, $turno)
        {
            parent::__construct($nomb,$tel);
            $this->grado = $grado;
            $this->turno = $turno;
            
        }
        public function get_data()
        {
            return parent::get_data()."<br>Grado: ".$this ->grado."<br> Turno: ".$this->turno;
        }    
    }
    


?>

<h3>Crear un objeto array de la clase alumno</h3>
<?php
    $alumno1 = new Alumno("Camilla","09611233466","Tercero - Nivel Medio","Tarde");

?>
<h3> Imprimir sus datos con foreach</h3>
<?php   
    echo $alumno1->get_data();
?>