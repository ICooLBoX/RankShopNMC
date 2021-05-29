<?php

namespace NetherMC\NuthMC\Shop;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\commamd\CommandSender;

use NetherMC\NuthMC\Shop\RankPrice;
use NetherMC\NuthMC\Shop\Normal;



class RankList {
	
	public function RankList($player){
		$form = new SimpleForm(function (Player $sender, int $data = null) {
			$result = $data;
            if($result === null){
                return true;
            }             
            switch($result){
            	case 0:
            Normal::Rank($player);
                break;
                case 1:
              Premium::Rank($player);
                
                break;
            }
		});
                
              
              
              $form->addButton("Normal Rank");
              $form->addButton("Premium Ranks");
              $form->sendToPlayer($player);
              return $form;
            }
}
