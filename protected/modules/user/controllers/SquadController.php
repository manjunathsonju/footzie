<?php

class SquadController extends Controller
{
	public $defaultAction = 'squad';
	


	
	
	/**
	 * Registration user
	 */
	public function actionSquad() {
            $model = new SquadForm;
            $profile=new Profile;
            $profile->regMode = true;
			// ajax validator
			if(isset($_POST['ajax']) && $_POST['ajax']==='squad-form')
			{
				//echo UActiveForm::validate(array($model));
				Yii::app()->end();
			}
			
		    if (Yii::app()->user->id) {
		    	$this->redirect(Yii::app()->controller->module->profileUrl);
		    } else {
		    	if(isset($_POST['SquadForm'])) {
					$model->attributes=$_POST['SquadForm'];
					//$profile->attributes=((isset($_POST['Profile'])?$_POST['Profile']:array()));
					if($model->validate())
					{
						
						
					$model->save(); 
							
							
							
							
						
					} 
				}
			    $this->render('/user/registration',array('model'=>$model,'profile'=>$profile));
		    }
	}
}