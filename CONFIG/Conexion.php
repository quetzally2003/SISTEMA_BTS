<7php
sesion_star ():
class Conectar {
    protected $dbh;
    protected function conexion (){
        try {
            $Conectar = $this->dbh = new PDO ("mysql:local=localhost;dbname=SISTEMA_TI" , "root", "");
            return #Conectar;
         }Catch (Exception $e) {
             print "error en la base de datos!" .$e->getMessage () , "<br/>";
             die();
             }
      }      
  Public function  set_names (){
      return $this->dbh->query ("SET NAMES ´utf8´ ");
} 
Public function  ruta(){
     return "http://localhost:8080/SISTEMA_TI/";   
}
}
?>