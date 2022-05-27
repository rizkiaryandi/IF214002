<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class PublicPollutionsModel extends BaseModel
{
    protected $table = 'public_pollutions';
    protected $returnType = 'App\Entities\PublicPollutions';
    protected $primaryKey = 'public_pollution_id';    
    protected $allowedFields = [
        'observer_id',
		'public_pollution_title',
		'public_pollution_description',
		'public_pollution_longitude',
		'public_pollution_lattitude',
		'public_pollution_type',
		'public_pollution_img',
		'public_pollution_status',
		'public_pollution_action',
		'public_pollution_action_img',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'public_pollution_id' => 'max_length[6]|required|is_unique[public_pollutions.public_pollution_id,id,{id}]',
		'observer_id' => 'max_length[6]|required',
		'public_pollution_title' => 'max_length[70]|required',
		'public_pollution_description' => 'required',
		'public_pollution_longitude' => 'max_length[100]|required',
		'public_pollution_lattitude' => 'max_length[100]|required',
		'public_pollution_type' => 'required',
		'public_pollution_img' => 'max_length[255]|required',
		'public_pollution_status' => 'required',
		'public_pollution_action' => 'required',
		'public_pollution_action_img' => 'max_length[255]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
