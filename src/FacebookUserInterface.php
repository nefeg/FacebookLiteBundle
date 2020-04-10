<?php

namespace FacebookLiteBundle;

/**
 * Interface FacebookUserInterface
 *
 * @package FacebookLiteBundle
 */
interface FacebookUserInterface
{
	/**
	 * @return null|string
	 */
	public function getId(): string;

//	/**
//	 * @param string $fbId
//	 * @return \FacebookLiteBundle\FacebookUserInterface
//	 */
//	public function setFbId(string $fbId) :FacebookUserInterface;
}