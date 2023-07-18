<?php
    class Automovil
    {
        public$motor,$color,$marca;
        // public $color;
        // public $marca;
        // public $motor;
        public function __construct($color,$k,$m)
        {
            $this ->color=$color;
            $this ->marca=$k;
            $this ->motor=$m;
        }

        public function get_color()
        {

            return $this ->color;

        }
        function set_color($c){
            $this-> color=$c;
        }
    }
    // $auto1=new Automovil();
    // $auto1->color="Gris";
    // $auto1->motor=1.5;
    // $auto1->marca="Ford";

    // $auto2=new Automovil();
    // $auto2->color="Verde";
    // $auto2->motor=2.0;
    // $auto2->marca="Toyota";

    // $auto3=new Automovil();
    // $auto3->color="Negro";
    // $auto3->motor=3.0;
    // $auto3->marca="Mercedez";
?>
<h3>Imprimir los colores de autos disponibles</h3>
<!-- <?php
    echo"primer auto: ".$auto1->get_color();
    echo"<br>Segundo auto: ".$auto2->obtener_color();
    echo"<br>Tercer auto: ".$auto3->obtener_color();
?> -->
<?php
    $auto1= new Automovil("Rojo", "2000CC,naftero", "Mazda");
    printf("El auto es de color: %s",$auto1->get_color());
    $auto1->set_color("gris");
    printf("<br>El auto es de color: %s",$auto1->get_color());
    printf("<br>El auto es de la marca: %s",$auto1->marca);

?>