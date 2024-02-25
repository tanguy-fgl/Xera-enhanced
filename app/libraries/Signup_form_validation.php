<?php

require_once(BASEPATH.'libraries/Form_validation.php');

class Signup_form_validation extends CI_Form_validation
{
    /**
	 * Valid Name
	 *
	 * @param	string
	 * @return	bool
	 */
	public function valid_name($name)
	{
		$array = [
			',', '\\', '/', '@', '[', ']', '(', ')', '{', '}', '.'
		];
		foreach ($array as $symbol) {
			if (strpos($name, $symbol) !== FALSE)
			{
				 $this->set_message('valid_name', 'The {field} field can not use illegal characters.');
				return FALSE;
			}
		}
		return TRUE;
	}
}

?>