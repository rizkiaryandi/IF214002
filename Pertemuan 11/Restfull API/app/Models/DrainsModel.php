<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class DrainsModel extends BaseModel
{
    protected $table = 'drains';
    protected $returnType = 'App\Entities\Drains';
    protected $primaryKey = 'drain_id';    
    protected $allowedFields = [
        'drain_name',
		'drain_geojson',
		'drain_longitude',
		'drain_lattitude',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'drain_id' => 'max_length[6]|required|is_unique[drains.drain_id,id,{id}]',
		'drain_name' => 'max_length[50]|required',
		'drain_geojson' => 'max_length[100]|required',
		'drain_longitude' => 'max_length[100]|required',
		'drain_lattitude' => 'max_length[100]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
