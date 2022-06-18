<?php
   class Employee {
      function display() {
         echo "<br>Employee class !!!";
      }
      function demo($name) {
         echo "<br>$name class !!!";
      }
   }
   class Organisation extends Employee {
      function demo($name) {
         echo "<br>$name class !!!";
      }
   }
   $ob = new Employee;
   $ob->demo("Employee");
   $ob->display();
   $ob2 = new Organisation;
   $ob2->demo("Organisation");
   $ob2->display();
?>