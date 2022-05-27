<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class ObserversModel extends BaseModel
{
    protected $table = 'observers';
    protected $returnType = 'App\Entities\Observers';
    protected $primaryKey = 'observer_id';    
    protected $allowedFields = [
        'user_id',
		'regional_unit_id',
		'observer_name',
		'observer_phone',
		'observer_img',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'observer_id' => 'max_length[6]|required|is_unique[observers.observer_id,id,{id}]',
		'user_id' => 'max_length[6]|required',
		'regional_unit_id' => 'max_length[6]|required',
		'observer_name' => 'max_length[50]|required',
		'observer_phone' => 'max_length[20]|required',
		'observer_img' => 'max_length[255]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
