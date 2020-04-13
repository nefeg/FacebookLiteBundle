<?php

namespace Aimchat\FacebookLiteBundle;

/**
 * Interface FacebookUserInterface
 *
 * @package Aimchat\FacebookLiteBundle
 */
interface FacebookUserInterface
{
	/**
	 * @return null|string
	 */
	public function getId(): string;

//	/**
//	 * @param string $fbId
//	 * @return \Aimchat\FacebookLiteBundle\FacebookUserInterface
//	 */
//	public function setFbId(string $fbId) :FacebookUserInterface;
}