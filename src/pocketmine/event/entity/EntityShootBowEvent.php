<?php

/**
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link   http://www.pocketmine.net/
 *
 *
 */

namespace pocketmine\event\entity;

use pocketmine\entity\Living;
use pocketmine\entity\Projectile;
use pocketmine\event\Cancellable;
use pocketmine\item\Bow;
use pocketmine\item\Item;

class EntityShootBowEvent extends EntityEvent implements Cancellable{
	public static $handlerList = null;

	/** @var Bow */
	private $bow;
	/** @var Projectile */
	private $projectile;
	/** @var float */
	private $force;

	/**
	 * @param Living     $shooter
	 * @param Bow        $bow
	 * @param Projectile $projectile
	 * @param float      $force
	 */
	public function __construct(Living $shooter, Bow $bow, Projectile $projectile, $force){
		$this->entity = $shooter;
		$this->bow = $bow;
		$this->projectile = $projectile;
		$this->force = $force;
	}

	/**
	 * @return Living
	 */
	public function getEntity(){
		return $this->entity;
	}

	/**
	 * @return Bow
	 */
	public function getBow(){
		return $this->bow;
	}

	/**
	 * @return Projectile
	 */
	public function getProjectile(){
		return $this->projectile;
	}

	/**
	 * @return float
	 */
	public function getForce(){
		return $this->force;
	}


}