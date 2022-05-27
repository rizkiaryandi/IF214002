<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class AdministratorsModel extends BaseModel
{
    protected $table = 'administrators';
    protected $returnType = 'App\Entities\Administrators';
    protected $primaryKey = 'administrator_id';    
    protected $allowedFields = [
        'user_id',
		'administrator_name',
		'administrator_phone',
		'administrator_img',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'administrator_id' => 'max_length[6]|required|is_unique[administrators.administrator_id,id,{id}]',
		'user_id' => 'max_length[6]|required',
		'administrator_name' => 'max_length[100]|required',
		'administrator_phone' => 'max_length[20]|required',
		'administrator_img' => 'max_length[255]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
