<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class RiversModel extends BaseModel
{
    protected $table = 'rivers';
    protected $returnType = 'App\Entities\Rivers';
    protected $primaryKey = 'river_id';    
    protected $allowedFields = [
        'river_name',
		'river_geojson',
		'river_longitude',
		'river_lattitude',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'river_id' => 'max_length[6]|required|is_unique[rivers.river_id,id,{id}]',
		'river_name' => 'max_length[50]|required',
		'river_geojson' => 'max_length[100]|required',
		'river_longitude' => 'max_length[100]|required',
		'river_lattitude' => 'max_length[100]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
