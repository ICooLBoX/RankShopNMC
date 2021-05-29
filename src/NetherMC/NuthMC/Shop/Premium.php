<?php

namespace NetherMC\NuthMC\Shop;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\CommandSender;

use NetherMC\NuthMC\Form\SimpleForm;

class Premium {
  public function Rank($player){
    $form = new SimpleForm(function(Player $player int $data = null){
      $result = $data;
        if ($data === null){
          
        }
        switch ($result){
          
          case 1:
            PremiumPrice::King($player);
            break;
            case 2:
            PremiumPrice::QuennLord($player);
            break;
            case 3:
            PremiumPrice::OverLord($player);
            break;
            case 4:
            PremiumPrice::Spider($player);
            break;
            
          
        }
    });
          
          $form->setTitle("§4NetherMC");
          $form->setContent("Select Rank");
          $form->addButton("Exit");
          $form->addButton("§dKing\n§r[§310$§r]");
          $form->addButton("§dQuennLord\n§r[§315$§r]");
          $form->addButton("§dOverLord\n§r[§320$§r]");
          $form->addButton("§dSpider\n§r[§327$§r]");
          $form->sendToPlayer($player);
          return $form;
        
    
  }
}
