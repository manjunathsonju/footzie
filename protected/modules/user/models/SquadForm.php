<?php
/**
 * RegistrationForm class.
 * RegistrationForm is the data structure for keeping
 * user registration form data. It is used by the 'registration' action of 'UserController'.
 */
class SquadForm extends User {
	//public $verifyPassword;
	//public $verifyCode;
	
	public function rules() {
		$rules = array(
			array('squad_name', 'status', 'required'),
			array('squad_name', 'length', 'max'=>20, 'min' => 3,'message' => UserModule::t("Incorrect Squad name (length between 3 and 20 characters).")),
			array('status', 'length', 'max'=>128, 'min' => 4,'message' => UserModule::t("Incorrect password (minimal length 4 symbols).")),
			
			array('squad_name', 'unique', 'message' => UserModule::t("This squad's name already exists.")),
			//array('email', 'unique', 'message' => UserModule::t("This user's email address already exists.")),
			//array('verifyPassword', 'compare', 'compareAttribute'=>'password', 'message' => UserModule::t("Retype Password is incorrect.")),
			array('squad_name', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u','message' => UserModule::t("Incorrect symbols (A-z0-9).")),
		);
		if (isset($_POST['ajax']) && $_POST['ajax']==='squad-form') 
			return $rules;
		
	}
	
}