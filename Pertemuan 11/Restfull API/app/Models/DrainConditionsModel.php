<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class DrainConditionsModel extends BaseModel
{
    protected $table = 'drain_conditions';
    protected $returnType = 'App\Entities\DrainConditions';
    protected $primaryKey = 'drain_condition_id';    
    protected $allowedFields = [
        'observer_id',
		'drain_id',
		'drain_condition_description',
		'drain_condition_longitude',
		'drain_condition_lattitude',
		'drain_condition_status',
		'drain_condition_handling_status',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'drain_condition_id' => 'max_length[6]|required|is_unique[drain_conditions.drain_condition_id,id,{id}]',
		'observer_id' => 'max_length[6]|required',
		'drain_id' => 'max_length[6]|required',
		'drain_condition_description' => 'required',
		'drain_condition_longitude' => 'max_length[100]|required',
		'drain_condition_lattitude' => 'max_length[100]|required',
		'drain_condition_status' => 'required',
		'drain_condition_handling_status' => 'required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
