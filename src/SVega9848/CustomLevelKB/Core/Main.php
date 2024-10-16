<?php

namespace SVega9848\CustomLevelKB\Core;

use SVega9848\CustomLevelKB\Commands\CustomKBCommand;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;
use SVega9848\CustomLevelKB\Listener\Events;

class Main extends PluginBase
{

	use SingletonTrait;

	public function onEnable(): void
	{
		self::setInstance($this);
		$this->getServer()->getPluginManager()->registerEvents(new Events($this), $this);
		$this->getServer()->getCommandMap()->register("customlevelkb", new CustomKBCommand($this));
	}
}
