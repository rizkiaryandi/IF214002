<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class SupportDevices
* @OA\Schema(
*     title="SupportDevices",
*     description="SupportDevices"
* )
*
* @OA\Tag(
*     name="SupportDevices",
*     description="Everything about your SupportDevices" 
* )
*/ 
class SupportDevices extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_id",
	 *     title="support_device_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $support_device_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="regional_unit_id",
	 *     title="regional_unit_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $regional_unit_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_name",
	 *     title="support_device_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $support_device_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_description",
	 *     title="support_device_description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $support_device_description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_longitude",
	 *     title="support_device_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $support_device_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_lattitude",
	 *     title="support_device_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $support_device_lattitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_type",
	 *     title="support_device_type",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $support_device_type;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_link",
	 *     title="support_device_link",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $support_device_link;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_status",
	 *     title="support_device_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $support_device_status;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_username",
	 *     title="support_device_username",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $support_device_username;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_password",
	 *     title="support_device_password",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=150,
	 * )
	 *		 
	 */
	private $support_device_password;
	/**
	 * @OA\Property(		 		 		 
	 *     description="support_device_port",
	 *     title="support_device_port",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $support_device_port;
	/**
	 * @OA\Property(		 		 		 
	 *     description="last_updated_condition_by",
	 *     title="last_updated_condition_by",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $last_updated_condition_by;
	/**
	 * @OA\Property(		 		 		 
	 *     description="created_at",
	 *     title="created_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $created_at;
	/**
	 * @OA\Property(		 		 		 
	 *     description="updated_at",
	 *     title="updated_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $updated_at; 
}
/**
 *
 * @OA\RequestBody(
 *     request="SupportDevices",
 *     description="SupportDevices object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/SupportDevices"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/SupportDevices")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/SupportDevices")
 *     )
 * )
 */