<?php

namespace Aimchat\FacebookLiteBundle\Service;

use Aimchat\FacebookLiteBundle\FacebookUserInterface;

/**
 * Class FacebookUser
 *
 * @package Aimchat\FacebookLiteBundle\Service
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