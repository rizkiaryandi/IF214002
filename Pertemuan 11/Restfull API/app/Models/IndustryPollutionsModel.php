<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class IndustryPollutionsModel extends BaseModel
{
    protected $table = 'industry_pollutions';
    protected $returnType = 'App\Entities\IndustryPollutions';
    protected $primaryKey = 'industry_pollution_id';    
    protected $allowedFields = [
        'observer_id',
		'industry_pollution_title',
		'industry_pollution_description',
		'industry_pollution_longitude',
		'industry_pollution_lattitude',
		'industry_pollution_type',
		'industry_pollution_img',
		'industry_pollution_status',
		'industry_pollution_action',
		'industry_pollution_action_img',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'industry_pollution_id' => 'max_length[6]|required|is_unique[industry_pollutions.industry_pollution_id,id,{id}]',
		'observer_id' => 'max_length[6]|required',
		'industry_pollution_title' => 'max_length[70]|required',
		'industry_pollution_description' => 'required',
		'industry_pollution_longitude' => 'max_length[100]|required',
		'industry_pollution_lattitude' => 'max_length[100]|required',
		'industry_pollution_type' => 'required',
		'industry_pollution_img' => 'max_length[255]|required',
		'industry_pollution_status' => 'required',
		'industry_pollution_action' => 'required',
		'industry_pollution_action_img' => 'max_length[255]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
