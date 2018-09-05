<?php
/**
 * Created by PhpStorm.
 * User: omni
 * Date: 16.07.2018
 * Time: 17:55
 */

namespace App\FacebookLiteBundle\Service;

use App\FacebookLiteBundle\FacebookUserInterface;

/**
 * Class FacebookUser
 *
 * @package App\FacebookLiteBundle\Service
 */
class FacebookUser implements FacebookUserInterface
{
	/**
	 * @var null
	 */
	private $id = null;

	/**
	 * FacebookUser constructor.
	 *
	 * @param null|string $id
	 */
	public function __construct(?string $id){
		$this->id = $id;
	}

	/**
	 * @return null|string
	 */
	public function getId(): string {
		return $this->id;
	}
}