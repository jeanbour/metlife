<?php 

namespace App\Gestiones\Managers;
use App\Gestiones\Managers;

class RegisterManager extends BaseManager
{
	
	public function getRules()
	{
		$rules = [
			// 'Nombre' => 'required',
			// 'Apellido paterno' => 'required',
			// 'email'		=> 'required|email|unique:users,email',
			// 'password'		=> 'required|confirmed',			
			// 'password_confirmation'		=> 'required'	

				// ************************************************************
			'nombre' => 'required',			
	        'apellido_paterno' => 'required',			
	        'apellido_materno' => 'required',			
	        'telefono' => '',			
	        'celular' => 'required_if:telefono,',
				// ************************************************************

	        // 'calle' => 'required',			
	        // 'numeroI' => 'required',			
	        // 'numeroE' => '',			
	        // 'colonia' => 'required',			
	        // 'seccional' => 'required',

			// ************************************************************
	        'foto' => 'image',			
	        // ************************************************************

	        'apoyo' => '',			
	        // 'apoyo_2' => 'required',		
	        // 'apoyo_3' => 'required',			
	        // 'apoyo_4' => 'required',		
	        // 'apoyo_5' => 'required',	

	        // ************************************************************
	        'monto' => '',
	        'monto[1]' => 'required_if:apoyo[1],1',		
	        'monto[2]' => 'required_if:apoyo[2],1',			
	        'monto[3]' => 'required_if:apoyo[3],1',		
	        'monto[4]' => 'required_if:apoyo[4],1',		
	        'monto[5]' => 'required_if:apoyo[5],1'	
	        // ************************************************************	
		];

		return $rules;
	}
}