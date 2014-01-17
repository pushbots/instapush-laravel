<?php

namespace Pushbots\Instapush;

/**
 * Description of Instapush
 *
 * @author abbas
 */

//include_once  'instapush.class.php';
use Config;

class InstapushService {

    /**
     *
     * @var instaPush 
     */
    private $ip;

    public function __construct() {
        $this->ip = $ip = new \instaPush();
        $this->ip->App(
                Config::get('instapush::appId'), Config::get('instapush::appSecret')
        );
    }

    /**
     * 
     * @param string $event
     * @param array $trackers
     */
    public function push($event, array $trackers) {
        foreach($trackers as $tracker => $value){
            $this->ip->trackers($tracker, $value);
        }
        $this->ip->Event($event);
        $this->ip->Push();
    }

    public function test(){
        return 'test';
    }
}
