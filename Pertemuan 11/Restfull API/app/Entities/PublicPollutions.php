<?php namespace App\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class PublicPollutions
* @OA\Schema(
*     title="PublicPollutions",
*     description="PublicPollutions"
* )
*
* @OA\Tag(
*     name="PublicPollutions",
*     description="Everything about your PublicPollutions" 
* )
*/ 
class PublicPollutions extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_id",
	 *     title="public_pollution_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $public_pollution_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="observer_id",
	 *     title="observer_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=6,
	 * )
	 *		 
	 */
	private $observer_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_title",
	 *     title="public_pollution_title",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=70,
	 * )
	 *		 
	 */
	private $public_pollution_title;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_description",
	 *     title="public_pollution_description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $public_pollution_description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_longitude",
	 *     title="public_pollution_longitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $public_pollution_longitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_lattitude",
	 *     title="public_pollution_lattitude",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $public_pollution_lattitude;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_type",
	 *     title="public_pollution_type",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $public_pollution_type;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_img",
	 *     title="public_pollution_img",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $public_pollution_img;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_status",
	 *     title="public_pollution_status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $public_pollution_status;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_action",
	 *     title="public_pollution_action",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $public_pollution_action;
	/**
	 * @OA\Property(		 		 		 
	 *     description="public_pollution_action_img",
	 *     title="public_pollution_action_img",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $public_pollution_action_img;
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
 *     request="PublicPollutions",
 *     description="PublicPollutions object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/PublicPollutions"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/PublicPollutions")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/PublicPollutions")
 *     )
 * )
 */