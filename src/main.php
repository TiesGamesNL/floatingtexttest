use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\math\Vector3;
use pocketmine\plugin\PluginBase;

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}

class Main extends PluginBase implements Listener{

    public function onJoin(PlayerJoinEvent $event){
        $sender = $event->getPlayer();
        $x = $sender->getX();
        $y = $sender->getY() + 2;
        $z = $sender->getY();
        $level = $sender->getLevel();
        $level->addParticle(new FloatingTextParticle(new Vector3($x, $y, $z), "Texdwdwdwdwdawdawdaddadwadafsfsfdfet"));
    }

}
