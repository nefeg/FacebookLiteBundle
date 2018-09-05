<?php
/**
 * Created by PhpStorm.
 * User: omni
 * Date: 12.07.2018
 * Time: 21:52
 */

namespace App\FacebookLiteBundle;


/**
 * Interface FacebookUserInterface
 *
 * @package App\FacebookLiteBundle
 */
interface FacebookUserInterface
{
	/**
	 * @return null|string
	 */
	public function getId(): string;

//	/**
//	 * @param string $fbId
//	 * @return \App\FacebookLiteBundle\FacebookUserInterface
//	 */
//	public function setFbId(string $fbId) :FacebookUserInterface;
}