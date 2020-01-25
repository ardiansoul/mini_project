<?php 
$str = <<<EOD
Exemple of string
spanning multiple line
using heredoc syntax.
EOD;
// More complex exemple with variables
class foo
{
	var $foo;
	var $bar;

	function foo()
	{	
		$this->foo = 'foo';
		$this->bar = array('bar1', 'bar2','bar3');
	}
}


$foo = new foo();
$name = 'ardi';

echo <<<EOT
<u>$str</u><br>
my name is "<b>$name</b>". i am printing same <br>$foo->foo</b>.
now, i am printing some <b>{$foo->bar[1]}</b>.
this is should print a capital 'A': \x41
EOT;





 ?>