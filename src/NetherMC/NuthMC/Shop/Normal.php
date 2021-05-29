<?php

namespace NetherMC\NuthMC\Shop;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use NetherMC\NuthMC\Form\SimpleForm;

class Normal {
  
  public function Rank{
    $form = new SimpleForm(function(Player $player, int $data = null){
      $result = $data;
      if($data === null){
        
        return true;
      }
        switch($result){
          $rapi = $this->getServer()->getPluginManager()->getPlugin("PurePerms");
          
          case 1:
            $coins = $this->eco->myMoney($player);
            
            if($coins >= 1000000){
              $elite = $rapi->getGroup("Elite");
              $rapi->setGroup($player, $elite);
              $player->sendMessage("You have purchased rank Elite");
            }else{
              $player->sendMessage("You Dont Have enough money");
              
            
          break;
          
          case 2
          $coins = $this->eco->myMoney($player);
            
            if($coins >= 5000000){
              $vip = $rapi->getGroup("VIP");
              $rapi->setGroup($player, $vip);
              $player->sendMessage("You have purchased rank VIP");
            }else{
              $player->sendMessage("You Dont Have enough money");
            
            
          break;
          
          case 3:
            $coins = $this->eco->myMoney($player);
            
            if($coins >= 10000000){
              $mvp = $rapi->getGroup("MVP");
              $rapi->setGroup($player, $mvp);
              $player->sendMessage("You have purchased rank MVP");
            }else{
              $player->sendMessage("You Dont Have enough money");
            
          break;
          
          case 4;
          $coins = $this->eco->myMoney($player);
            
            if($coins >= 15000000){
              $nmc = $rapi->getGroup("NMC");
              $rapi->setGroup($player, $nmc);
              $player->sendMessage("You have purchased rank NMC");
            }else{
              $player->sendMessage("You Dont Have enough money");
          
          break;
          
        }
    });
          
          $form->setTitle("§4NetherMC");
          $form->setContent("select rank now");
          $form->addButton("Exit");
          $form->addButton("n1Elite\n[§41M§r]");
          $form->addButton("§aVIP\n[§45M§r]");
          $form->addButton("§bMVP\n[§410M§r]");
          $form->addButton("§cNMC\n[[§415M§r]");
          $form->sendToPlayer($player);
          return $form;
          
        
      
    }
}
