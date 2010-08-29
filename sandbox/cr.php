<html><head></head>
<body>
<?php 

class Person
{
	var $name;
	
	public function set_name($data)
	{
		$this->name = $data;
	}
	
	public function get_name()
	{
		return $this->name;
	}
}

$ralph = new Person;
$ralph->set_name("Ralph");

echo "The name of your friend is ", $ralph->get_name(), ".";

?>

Print this out

<?php 
class Student extends Person
{
	var $major;
	
	public function set_major($any)
	{
	   $this->major=$any;	
	}
	
	public function get_major()
	{
		return $this->major;
	}
}

$binky = new Student;
$binky->set_name("Binky");
$binky->set_major("Agricultural Economics");

echo "Your name is " . $binky->get_name();
echo "Your major is " . $binky->get_major();

?>
</body>
</html>
