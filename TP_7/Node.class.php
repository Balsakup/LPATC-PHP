<?php
class Node {

    private $data;
    private $next;

    public function __construct($data, $next = null) {
        $this->data = $data;
        $this->next = $next;
    }

    public function getData() {
        return $this->data;
    }

    public function getNext() {
        return $this->next;
    }

    public function setNext(Node $node) {
        $this->next = $node;
    }

    public function __toString() {
        return "Node[data=$this->data; next=$this->next]";
    }

}
