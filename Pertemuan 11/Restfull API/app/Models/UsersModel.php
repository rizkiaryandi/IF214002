<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class UsersModel extends BaseModel
{
    protected $table = 'users';
    protected $returnType = 'App\Entities\Users';
    protected $primaryKey = 'user_id';    
    protected $allowedFields = [
        'user_email',
		'user_hint',
		'user_status',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'user_id' => 'max_length[6]|required|is_unique[users.user_id,id,{id}]',
		'user_email' => 'max_length[100]|required',
		'user_hint' => 'max_length[20]|required',
		'user_status' => 'required'
    ];   
}
