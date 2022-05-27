<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class DikesModel extends BaseModel
{
    protected $table = 'dikes';
    protected $returnType = 'App\Entities\Dikes';
    protected $primaryKey = 'dike_id';    
    protected $allowedFields = [
        'river_id',
		'regional_unit_id',
		'dike_name',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'dike_id' => 'max_length[6]|required|is_unique[dikes.dike_id,id,{id}]',
		'river_id' => 'max_length[6]|required',
		'regional_unit_id' => 'max_length[6]|required',
		'dike_name' => 'max_length[50]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
