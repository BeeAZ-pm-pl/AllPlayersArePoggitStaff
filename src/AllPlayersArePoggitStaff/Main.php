<?php

namespace AllPlayersArePoggitStaff;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Internet;

class Main extends PluginBase implements Listener {

	private array $users = ["adeynes", "awzaw", "brandon15811", "cortexpe", "cthulhu", "dktapps", "intyre", "jacknoordhuis", "javierleon9966", "jaxkdev", "jasonwynn10", "sandertv", "shoghicp", "sof3", "matcracker", "xavier69420", "ethaniccc", "fuyutsuki", "ifera", "thedeibo", "thunder33345", "NoDanaOnlyZuul", "PEMapModder", "poggit bot", "robske110", "PotterHarry98"];

	public function onEnable(): void {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->conflict();
		$this->loadUsernames();
	}

	private function conflict() {
		if ($this->getServer()->getPluginManager()->getPlugin("AntiPoggitStaffs") == null) return;
		$this->getServer()->getPluginManager()->disablePlugin($this);
		$this->getLogger()->notice("AntiPoggitStaffs Plugin Conflict So Can't Work");
	}

	private function loadUsernames() {
		$request = Internet::getURL("https://api.github.com/orgs/poggit/members", 10, [], $err);
		if ($err) return;
		$accounts = json_decode($request->getBody(), true);
		foreach ($accounts as $account) {
			$this->users[] = $account["login"];
		}
	}

	public function onJoin(PlayerJoinEvent $ev) {
		$ev->getPlayer()->setDisplayName(array_rand($this->users));
	}
}
