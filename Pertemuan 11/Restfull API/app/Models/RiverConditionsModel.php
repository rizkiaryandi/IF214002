<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class RiverConditionsModel extends BaseModel
{
    protected $table = 'river_conditions';
    protected $returnType = 'App\Entities\RiverConditions';
    protected $primaryKey = 'river_condition_id';    
    protected $allowedFields = [
        'observer_id',
		'river_id',
		'river_condition_description',
		'river_condition_longitude',
		'river_condition_lattitude',
		'river_condition_status',
		'river_condition_handling_status',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'river_condition_id' => 'max_length[6]|required|is_unique[river_conditions.river_condition_id,id,{id}]',
		'observer_id' => 'max_length[6]|required',
		'river_id' => 'max_length[6]|required',
		'river_condition_description' => 'required',
		'river_condition_longitude' => 'max_length[100]|required',
		'river_condition_lattitude' => 'max_length[100]|required',
		'river_condition_status' => 'required',
		'river_condition_handling_status' => 'required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
