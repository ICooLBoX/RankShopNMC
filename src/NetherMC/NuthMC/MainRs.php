<?php

namespace NetherMC\NuthMC;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use NetherMC\NuthMC\Form\FormAPI;
use NetherMC\NuthMC\Form\SimpleForm;
use NetherMC\NuthMC\Form\ModalForm;

use NetherMC\NuthMC\Command\Commands;

use Shop\RankList;

use Shop\RankPrice;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class MainRs extends PluginBase implements Listener {
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getCommandMap()->register("/nmcranks", new Commands($this));
		}
}
