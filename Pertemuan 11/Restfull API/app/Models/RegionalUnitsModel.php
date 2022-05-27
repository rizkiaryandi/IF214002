<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class RegionalUnitsModel extends BaseModel
{
    protected $table = 'regional_units';
    protected $returnType = 'App\Entities\RegionalUnits';
    protected $primaryKey = 'regional_unit_id';    
    protected $allowedFields = [
        'main_administrator_id',
		'city_id',
		'regional_unit_name',
		'regional_unit_address',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'regional_unit_id' => 'max_length[6]|required|is_unique[regional_units.regional_unit_id,id,{id}]',
		'main_administrator_id' => 'max_length[6]|required',
		'city_id' => 'numeric|required',
		'regional_unit_name' => 'max_length[50]|required',
		'regional_unit_address' => 'required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
