<?php namespace App\Models;

use asligresik\easyapi\Models\BaseModel;

class SupportDevicesModel extends BaseModel
{
    protected $table = 'support_devices';
    protected $returnType = 'App\Entities\SupportDevices';
    protected $primaryKey = 'support_device_id';    
    protected $allowedFields = [
        'regional_unit_id',
		'support_device_name',
		'support_device_description',
		'support_device_longitude',
		'support_device_lattitude',
		'support_device_type',
		'support_device_link',
		'support_device_status',
		'support_device_username',
		'support_device_password',
		'support_device_port',
		'last_updated_condition_by',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'support_device_id' => 'max_length[6]|required|is_unique[support_devices.support_device_id,id,{id}]',
		'regional_unit_id' => 'max_length[6]|required',
		'support_device_name' => 'max_length[50]|required',
		'support_device_description' => 'required',
		'support_device_longitude' => 'max_length[100]|required',
		'support_device_lattitude' => 'max_length[100]|required',
		'support_device_type' => 'required',
		'support_device_link' => 'required',
		'support_device_status' => 'required',
		'support_device_username' => 'max_length[255]|required',
		'support_device_password' => 'max_length[150]|required',
		'support_device_port' => 'max_length[20]|required',
		'last_updated_condition_by' => 'max_length[6]|required',
		'created_at' => 'required',
		'updated_at' => 'required'
    ];   
}
