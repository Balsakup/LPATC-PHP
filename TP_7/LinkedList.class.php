<?php
class LinkedList {

    private $firstNode;
    private $lastNode;
    private $count;

    public function __construct() {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function isEmpty() {
        return $this->firstNode === null;
    }

    public function length() {
        return $this->count;
    }

    public function addFirst($data = null) {
        if ($data == null) {
            die('Impossible d\'ajouter un noeud avec rien dedans');
        }

        $node = new Node($data);

        if ($this->isEmpty()) {
            $this->firstNode = $this->lastNode = $node;
        } else {
            $tmp = $this->firstNode;
            $this->firstNode = $node;
            $this->firstNode->setNext($tmp);
        }

        $this->count++;
    }

    public function addLast($data) {
        if ($data == null) {
            die('Impossible d\'ajouter un noeud avec rien dedans');
        }

        $node = new Node($data);

        if ($this->isEmpty()) {
            $this->firstNode = $this->lastNode = $node;
        } else {
            $this->lastNode->setNext($node);
            $this->lastNode = $node;
        }

        $this->count++;
    }

    public function add($data) {
        if ($data == null) {
            die('Impossible d\'ajouter un noeud avec rien dedans');
        }

        $this->addLast($data);
    }

    public function removeFirst() {
        $this->firstNode = $this->firstNode->getNext();
        $this->count--;
    }

    public function removeLast() {
        if ($this->lastNode->getNext() !== null) {
            $this->lastNode = $this->lastNode->getNext();
        } else {
            if ($this->lastNode->equals($this->firstNode)) {
                $this->firstNode = $this->lastNode = null;
            }
        }

        $this->count--;
    }

    public function remove($index = -1) {
        if ($index < 0) {
            die("L'index ($index) est invalide");
        }

        $previous = null;
        $current = $this->firstNode;

        for ($i = 0; $i < $this->count; $i++) {
            if ($i == $index) {
                if ($index == 0) {
                    return $this->removeFirst();
                } else {
                    $this->count--;
                    return $previous->setNext($current->getNext());
                }
            }

            $previous = $current;
            $current = $current->getNext();
        }
    }

    public function get($index = -1) {
        if ($index < 0) {
            die("Il n'y a aucun élément à la position $index");
        }

        $current = $this->firstNode;

        for ($i = 0; $i < $this->count; $i++) {
            if ($i == $index) {
                return $current;
            }

            $current = $current->getNext();
        }
    }

    public function read($index = -1) {
        if ($index < 0) {
            $current = $this->firstNode;

            while ($current !== null) {
                echo $current->getData() . '<br>';
                $current = $current->getNext();
            }
        } else {
            $this->get($index)->getData();
        }
    }

}
