<?php

namespace NetherMC\NuthMC\Command;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\commamd\Command;

use NetherMC\NuthMC\MainRs;
use NetherMC\NuthMC\Form\Form;
use NetherMC\NuthMC\Shop\RankList;
use pocketmine\command\PluginCommand;
use pocketmine\utils\TextFormat;


class Commands extends PluginCommand {
	
	public function __construct(MainRs $main) {
        $this->main = $main;
        
        
        parent::__construct("nmcranks", $main);
        $this->setUsage("/nmcranks");
        $this->setDescription("Purchase Rank From NetherMC");
    }
    
        

    public function execute(CommandSender $sender, string $commandLabel, array $args) : bool {
        if (!$sender instanceof Player){ $sender->sendMessage(TextFormat::RED . "This command only works in-game!");
       } else {

                
 
                    RankList::RankList($sender); 
                    }
                    }
                    return true
                    
}
                 
