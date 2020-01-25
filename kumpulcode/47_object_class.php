<?php 
/**
 * class untuk membuat form inputan text sederhana
 */
class form
{
	var $fields = array();
	var $action;
	var $submit = "Submit Form";
	var $jumfield = 0;
	function __construct($action, $submit)
	{
		$this->action = $action;
		$this->submit = $submit;
	}
	function displayform()
	{
		echo "<form action='".$this->action."'method='POST'>";
		echo "<table width='100%'>";
		for ($j=0; $j <count($this->fields); $j++) { 
			echo "<tr><td align = 'right'>".$this->fields[$j]['label']."</td>";
			echo "<td><input type='text' name'".$this->fields[$j]['name']."'></td></tr>";
		}
		echo "<tr><td colspan='2'>";
		echo "<input type='submit' value='".$this->submit."'></td></tr>";
		echo "</table>";

	}
	function addfield($name, $label)
	{
		$this->fields [$this->jumfield]['name'] = $name;
		$this->fields [$this->jumfield]['label'] = $label;
		$this->jumfield++;
	}
}





 ?>