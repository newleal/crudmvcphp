<?php_
   class Conectar{
      protected $dbh;
      
      protected function Conexion(){
         try {
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud2","root","123");
            return $conectar;            
         } catch (Exception $e) {
            print_r("!Error DB". $e->getMessage(). "<br>" );
            die();
         }
      }
   }
?>