<?php 

class listNode {
    public $data = null;
    public $next = null;

    public function __construct(string $data = null)
    {
        $this->data = $data;
    }
}


class LinkedList {
    private $firstNode = null;
    private $nodeCount = 0;
    
    public function insert(string $data= null){
        $newNode = new listNode($data);
        if($this->firstNode === null){
            $this->firstNode = &$newNode;
        }else{
            $currentNode = $this->firstNode;
            while($currentNode->next !== null){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->nodeCount++;
        return true;
    }

    public function display(){
        echo "total link list " . $this->nodeCount. "\n";
        $currentNode = $this->firstNode;
        while ($currentNode !== null) {
        echo $currentNode->data . "\n";
        $currentNode = $currentNode->next;
        }

    }
}

$BookTitles = new LinkedList();
$BookTitles->insert("Introduction to Algorithm");
$BookTitles->insert("Introduction to PHP and Data structures");
$BookTitles->insert("Programming Intelligence");
$BookTitles->display();
