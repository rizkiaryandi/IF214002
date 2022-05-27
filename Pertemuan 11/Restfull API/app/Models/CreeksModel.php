<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class CreeksModel extends BaseModel
{
    protected $table = 'creeks';
    protected $returnType = 'App\Entities\Creeks';
    protected $primaryKey = 'creek_id';    
    protected $allowedFields = [
        'river_id',
		'creek_name',
		'creek_geojson',
		'creek_longitude',
		'creek_lattitude',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'creek_id' => 'max_length[6]|required|is_unique[creeks.creek_id,id,{id}]',
		'river_id' => 'max_length[6]|required',
		'creek_name' => 'max_length[50]|required',
		'creek_geojson' => 'max_length[100]|required',
		'creek_longitude' => 'max_length[100]|required',
		'creek_lattitude' => 'max_length[100]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
