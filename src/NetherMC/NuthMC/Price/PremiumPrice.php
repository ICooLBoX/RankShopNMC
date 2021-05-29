<?php

namespace NetherMC\NuthMC\Price;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;

use NetherMC\NuthMC\Form\SimpleForm;
use NetherMC\NuthMC\Form\Form;
use NetherMC\NuthMC\Shop\Premium;

class PremiumPrice {
  
  public function King($player){
    $form = new ModalForm(function(Player $player, int $data = null){
      $result = $data;
      if ($result === null){
          }
          return true;
          switch ($result){
            case 1:
              break;
              
              case 2:
                Premium::Rank($player);
                break;
            
          }
          
    } 
    
    $form->setTitle("§4King");
    $form->setContent("");
    $form->setButton1("Confirm");
    $form->setButton2("Back");
    $form->sendToPlayer($form);
    return $form;
  }
  public function King($player){
    $form = new ModalForm(function(Player $player, int $data = null){
      $result = $data;
      if ($result === null){
          }
          return true;
          switch ($result){
            case 1:
              break;
              
              case 2:
                Premium::Rank($player);
                break;
            
          }
          
    } 
    
    $form->setTitle("§4King");
    $form->setContent("");
    $form->setButton1("Confirm");
    $form->setButton2("Back");
    $form->sendToPlayer($form);
    return $form;
  }
public function King($player){
    $form = new ModalForm(function(Player $player, int $data = null){
      $result = $data;
      if ($result === null){
          }
          return true;
          switch ($result){
            case 1:
              break;
              
              case 2:
                Premium::Rank($player);
                break;
            
          }
          
    } 
    
    $form->setTitle("§4QuennLord");
    $form->setContent("");
    $form->setButton1("Confirm");
    $form->setButton2("Back");
    $form->sendToPlayer($form);
    return $form;
  
}

