<?php 
 class Person {
  private $skills;
  public
  function __construct($skills) {
    $this->skills = $skills;
  }
  function totalSkills() {
    return count($this->skills);
  	}

  	function log($message){
  		echo $message;
  	}
  }

  class Organisation{

  	private $Person;
  	private $department;

  	function __construct(Person $person,$dept){
  		$this->Person= $person;
  		$this->department= $dept;
  	}
  	public
 	function logger() {
    return $this->Person->log("arg");
  	}

  	function personSkills(){
  		return $this->Person->totalSkills();
  	}

  }
$mySkills = array("PHP", "HTML", "CSS", "JavaScript");
$per = new Person($mySkills);
$org = new Organisation($per,"Engineering");
var_dump($org);
echo "<br>";
echo $org->logger();
echo "<pre>";
echo $org->personSkills();
?>