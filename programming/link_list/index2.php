<?php

class NodeList {
    public $data = null;
    public $next = null;

    public function __construct ($data = null)
    {
        $this->data = $data;
    }
}

class LinkedList{
    private $firstNode = null;
    private $nodeCount = 0;
    private $lastNode = null;

    public function insert ($data) {
        $newNode = new NodeList($data);
        
        if ($this->firstNode == null) {
            $this->firstNode = $newNode;
            $this->lastNode = $newNode;
        } else {
            $currentNode = $this->firstNode;
            while ($currentNode-> next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
            $this->lastNode = $newNode;
        }
        $this->nodeCount++;
    }

    public function insertSpecificItem($itemName, $data= null){
        $newNode = new NodeList($data);
        $currentNode = $this->firstNode;
        while($currentNode->next !== null){
            if($currentNode->data == $itemName){
                $newNode->next = $currentNode->next;
                $currentNode->next = $newNode;
                $this->nodeCount++;
            }
        $currentNode = $currentNode->next;
        }
    }

    public function displayAll(){
        echo "Total node ". $this->nodeCount . "\n";
        $currentNode = $this->firstNode;
        while($currentNode !== null){
            echo "current node: ".$currentNode->data. "\n";
            $currentNode = $currentNode->next;
        }
        echo "last node ".$this->lastNode->data."\n";
    }
}

$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->insertSpecificItem("Introduction to Algorithm", "yahoo parsi");
$BookTitles->displayAll();