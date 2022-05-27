<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class ProvincesModel extends BaseModel
{
    protected $table = 'provinces';
    protected $returnType = 'App\Entities\Provinces';
    protected $primaryKey = 'prov_id';    
    protected $allowedFields = [
        'prov_name',
		'locationid',
		'status'
    ];
    protected $validationRules = [
        'prov_id' => 'numeric|required|is_unique[provinces.prov_id,id,{id}]',
		'prov_name' => 'max_length[255]',
		'locationid' => 'numeric',
		'status' => 'numeric'
    ];   
}
