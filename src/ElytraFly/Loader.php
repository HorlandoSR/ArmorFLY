<?php

namespace ElytraFly;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\entity\EntityArmorChangeEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\network\mcpe\protocol\LevelSoundEventPacket;

class Loader extends PluginBase implements Listener
{
	
	public function onEnable(){
		$this->getLogger()->info("ArmorFLY Enabled");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		if(!$this->getDescription()->getAuthors() === "KRUNCH7SHooT And HaykalPRO"){
			$this->getPluginLoader()->disablePlugin($this);
		}
	}
	
	public function onArmor(EntityArmorChangeEvent $ev){
		$sender = $ev->getEntity();
		$item = $ev->getNewItem();
		if($item->getId() == 310){
			$sender->setAllowFlight(true);
			$sender->setFlying(true);
			$volume = mt_rand();
			$sender->getLevel()->broadcastLevelSoundEvent($sender, LevelSoundEventPacket::SOUND_LEVELUP, (int) $volume);
		} else {
			$sender->setAllowFlight(false);
			$sender->setFlying(false);
		}
		if(!$item->getId() == 310){
			$sender->setAllowFlight(false);
			$sender->setFlying(false);
		}
	}
	
	$sender = $ev->getEntity();
		$item = $ev->getNewItem();
		if($item->getId() == 311){
			$sender->setAllowFlight(true);
			$sender->setFlying(true);
			$volume = mt_rand();
			$sender->getLevel()->broadcastLevelSoundEvent($sender, LevelSoundEventPacket::SOUND_LEVELUP, (int) $volume);
		} else {
			$sender->setAllowFlight(false);
			$sender->setFlying(false);
		}
		if(!$item->getId() == 311){
			$sender->setAllowFlight(false);
			$sender->setFlying(false);
		}
	}
        
        $sender = $ev->getEntity();
		$item = $ev->getNewItem();
		if($item->getId() == 312){
			$sender->setAllowFlight(true);
			$sender->setFlying(true);
			$volume = mt_rand();
			$sender->getLevel()->broadcastLevelSoundEvent($sender, LevelSoundEventPacket::SOUND_LEVELUP, (int) $volume);
		} else {
			$sender->setAllowFlight(false);
			$sender->setFlying(false);
		}
		if(!$item->getId() == 312){
			$sender->setAllowFlight(false);
			$sender->setFlying(false);
		}
	}

        $sender = $ev->getEntity();
		$item = $ev->getNewItem();
		if($item->getId() == 313){
			$sender->setAllowFlight(true);
			$sender->setFlying(true);
			$volume = mt_rand();
			$sender->getLevel()->broadcastLevelSoundEvent($sender, LevelSoundEventPacket::SOUND_LEVELUP, (int) $volume);
		} else {
			$sender->setAllowFlight(false);
			$sender->setFlying(false);
		}
		if(!$item->getId() == 313){
			$sender->setAllowFlight(false);
			$sender->setFlying(false);
		}
	}
}
