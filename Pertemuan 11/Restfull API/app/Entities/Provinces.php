<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Provinces
* @OA\Schema(
*     title="Provinces",
*     description="Provinces"
* )
*
* @OA\Tag(
*     name="Provinces",
*     description="Everything about your Provinces" 
* )
*/ 
class Provinces extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="prov_id",
	 *     title="prov_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $prov_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="prov_name",
	 *     title="prov_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $prov_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="locationid",
	 *     title="locationid",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $locationid;
	/**
	 * @OA\Property(		 		 		 
	 *     description="status",
	 *     title="status",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $status; 
}
/**
 *
 * @OA\RequestBody(
 *     request="Provinces",
 *     description="Provinces object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Provinces"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Provinces")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Provinces")
 *     )
 * )
 */