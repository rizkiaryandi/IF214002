<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class CitiesModel extends BaseModel
{
    protected $table = 'cities';
    protected $returnType = 'App\Entities\Cities';
    protected $primaryKey = 'city_id';    
    protected $allowedFields = [
        'city_name',
		'prov_id'
    ];
    protected $validationRules = [
        'city_id' => 'numeric|required|is_unique[cities.city_id,id,{id}]',
		'city_name' => 'max_length[255]',
		'prov_id' => 'numeric'
    ];   
}
