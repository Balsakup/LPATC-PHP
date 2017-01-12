<?php
class User {

    private $ip;
    private $date;
    private $time;
    private $agent;

    public function __construct($ip, $date, $time, $agent) {
        $this->ip    = $ip;
        $this->date  = $date;
        $this->time  = $time;
        $this->agent = $agent;
    }

    public function getIp() {
        return $this->ip;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTime() {
        return $this->time;
    }

    public function getAgent() {
        return $this->agent;
    }

}
