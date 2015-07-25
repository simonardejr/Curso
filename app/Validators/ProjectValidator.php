<?php 

namespace Curso\Validators;

use Prettus\Validator\LaravelValidator;

/**
 * 
 */
class ProjectValidator extends LaravelValidator
{
	
	protected $rules = [
		'owner_id' => 'required',
		'client_id' => 'required',
		'name' => 'required|max:255',
		'description' => 'required|max:255',
		'due_date' => 'required|date',
	];

}