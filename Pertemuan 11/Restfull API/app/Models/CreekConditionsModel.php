<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class CreekConditionsModel extends BaseModel
{
    protected $table = 'creek_conditions';
    protected $returnType = 'App\Entities\CreekConditions';
    protected $primaryKey = 'creek_condition_id';    
    protected $allowedFields = [
        'observer_id',
		'creek_id',
		'creek_condition_description',
		'creek_condition_longitude',
		'creek_condition_lattitude',
		'creek_condition_status',
		'creek_condition_handling_status',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'creek_condition_id' => 'max_length[6]|required|is_unique[creek_conditions.creek_condition_id,id,{id}]',
		'observer_id' => 'max_length[6]|required',
		'creek_id' => 'max_length[6]|required',
		'creek_condition_description' => 'required',
		'creek_condition_longitude' => 'max_length[100]|required',
		'creek_condition_lattitude' => 'max_length[100]|required',
		'creek_condition_status' => 'required',
		'creek_condition_handling_status' => 'required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
