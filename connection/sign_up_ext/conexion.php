<?php
class mysqlconex
{
   public function conex()
   {
      $enlace = mysqli_connect("localhost:3307", "root", "", "chefathome");
      return $enlace;
   }
}


