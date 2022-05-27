<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class DikeConditionsModel extends BaseModel
{
    protected $table = 'dike_conditions';
    protected $returnType = 'App\Entities\DikeConditions';
    protected $primaryKey = 'dike_condition_id';    
    protected $allowedFields = [
        'observer_id',
		'dike_id',
		'dike_condition_description',
		'dike_condition_longitude',
		'dike_condition_lattitude',
		'dike_condition_status',
		'drain_condition_handling_status',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'dike_condition_id' => 'max_length[6]|required|is_unique[dike_conditions.dike_condition_id,id,{id}]',
		'observer_id' => 'max_length[6]|required',
		'dike_id' => 'max_length[6]|required',
		'dike_condition_description' => 'required',
		'dike_condition_longitude' => 'max_length[100]|required',
		'dike_condition_lattitude' => 'max_length[100]|required',
		'dike_condition_status' => 'required',
		'drain_condition_handling_status' => 'required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
