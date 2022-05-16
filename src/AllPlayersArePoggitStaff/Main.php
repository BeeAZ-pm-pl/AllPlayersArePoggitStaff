<?php

namespace AllPlayersArePoggitStaff;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Main extends PluginBase implements Listener{

 public function onEnable(): void{
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
}
 public function onJoin(PlayerJoinEvent $ev){
  $ev->getPlayer()->setDisplayName(array_rand(["adeynes", "awzaw", "brandon15811", "cortexpe", "cthulhu", "dktapps", "intyre", "jacknoordhuis", "javierleon9966", "jaxkdev", "jasonwynn10", "sandertv", "shoghicp", "sof3", "matcracker", "xavier69420", "ethaniccc", "fuyutsuki", "ifera", "thedeibo", "thunder33345", "NoDanaOnlyZuul", "PEMapModder", "poggit-bot", "robske110", "PotterHarry98"]));
}
}
