<?php

namespace AllPlayersArePoggitStaff;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener{

 public function onEnable(): void{
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->conflict();
}
 public function onJoin(PlayerJoinEvent $ev){
  $ev->getPlayer()->setDisplayName(array_rand(["adeynes", "awzaw", "brandon15811", "cortexpe", "cthulhu", "dktapps", "intyre", "jacknoordhuis", "javierleon9966", "jaxkdev", "jasonwynn10", "sandertv", "shoghicp", "sof3", "matcracker", "xavier69420", "ethaniccc", "fuyutsuki", "ifera", "thedeibo", "thunder33345", "NoDanaOnlyZuul", "PEMapModder", "poggit-bot", "robske110", "PotterHarry98"]));
}
 public function conflict(){
  if($this->getServer()->getPluginManager()->getPlugin("AntiPoggitStaffs") !== null){
  $this->getServer()->getPluginManager()->disablePlugin($this);
  $this->getLogger()->notice("AntiPoggitStaffs Plugin Conflict So Can't Work");
}
}
}
