<?php
class ListNode{
    public $data = null;
    public $next = null;

    function __construct($data = null)
    {
        $this->data = $data;
    }
}


class LinkedList {
    private $firstNode = null;
    private $nodeCount = 0;

    public function insertAtFirst($data=null){
        $newNode = new ListNode($data);
        
        if ($this->firstNode == null){
            $this->firstNode = $newNode;
        } else {
            $currentFirstNode = $this-> firstNode;
            $newNode->next = $currentFirstNode;
            $this->firstNode = $newNode;
        }
        $this->nodeCount++;
        return true;
    }

    public function insertATEnd($data) {
        $newNode = new ListNode($data);
        
        if ($this->firstNode == null) {
            $this->firstNode = $newNode;
        } else {
            $currentNode = $this->firstNode;
            while ($currentNode-> next !== null) {
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;
        }
        $this->nodeCount++;
    }

    public function search($data =null){
        if($this->nodeCount){
            $currentNode = $this->firstNode;
            while ($currentNode !== null){
                if($currentNode->data === $data){
                    return $currentNode;
                }
                $currentNode = $currentNode->next;
            }
        }
        return false;
    }

    public function insertBefore(string $data = null, string $query = null) {
        $newNode = new ListNode($data);
        if($this->firstNode){
            $currentNode = $this->firstNode;
            $previous = null;

            // firstNode instance how to work need to know;

            while($currentNode != null){

                if($currentNode->data == $query && $previous == null) {
                     $newNode->next = $currentNode;
                     $this->firstNode = $newNode;
                     $this->nodeCount++;
                     break;
                }

                else if($currentNode->data == $query && $previous != null) {
                    $newNode->next = $currentNode;
                    $previous->next = $newNode; // how previous work need to know;
                    $this->nodeCount++;
                    break;
                }
                
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function insertAfter( $data= null, $query = null ){
        $newNode = new ListNode($data);
        if($this->firstNode){
            $currentNode = $this->firstNode;
            while( $currentNode != null){

                if($currentNode->data == $query){
                    $newNode->next = $currentNode->next;
                    $currentNode->next = $newNode;
                    $this->nodeCount++;
                    break;
                }
                $currentNode = $currentNode->next;
            }
        }
    }

    public function deleteFirst(){
        if($this->firstNode){
            $currentNode = $this->firstNode;
            if($currentNode->next == null){
                $this->firstNode = null;
            }else {
                $nextNodes = $currentNode->next;
                $this->firstNode = $nextNodes;
            }
            $this->nodeCount--;
        }
    }

    public function deleteLast(){
        if($this->firstNode){
            $currentNode = $this->firstNode;
            $previous = null;
            if($currentNode->next == null){
                $this->firstNode = null;
            } else {
                while($currentNode != null){
                    if($currentNode-> next == null){
                        $previous->next = null;
                        break;
                    }
                    $previous = $currentNode;
                    $currentNode= $currentNode->next;
                }
            }
            $this->nodeCount--;
        }
    }

    public function delete($query = null){
        if($this->firstNode){
            $currentNode = $this->firstNode;
            $previous = null;
            while( $currentNode != null){
                if($currentNode->data == $query && $previous == null){
                    $this->firstNode = $currentNode->next;
                    $this->nodeCount --;
                    break;
                }
                else if($currentNode->data == $query && $previous != null){
                    $previous->next = $currentNode->next;
                    $this->nodeCount --;
                    break;
                }
                $previous = $currentNode;
                $currentNode = $currentNode->next;
            }
        }
    }

    public function reverseList(){
        if($this->firstNode != null){
            $reverseList = null;
            $current = $this->firstNode;
            $next = null;
            while($current != null){
                $next = $current->next;
                $current->next = $reverseList;
                $reverseList = $current;
                $current = $next;
            }
            $this->firstNode = $reverseList;
            var_dump($this->firstNode);
        }
    }

    public function getNthNode($n = 0){
        if($this->firstNode){
            $count = 1;
            $current = $this->firstNode;
            while($current != null){
                if($count == $n){
                    return $current;
                }
                $current = $current->next;
                $count++;
            }
        }
    }

    public function display()
    {
        $currentNode = $this->firstNode;
        echo "total ". $this->nodeCount."\n";
        while($currentNode !== null){
            echo "currentData ". $currentNode->data . "\n";
            $currentNode = $currentNode->next;
        }
    }        
}

$list = new LinkedList();

$list->insertATEnd(11);
$list->insertATEnd(15);
$list->insertATEnd(18);
$list->insertATEnd(19);
$list->insertAtFirst(10);
$list->insertBefore(17, 18);
$list->insertAfter(20,19);
$list->deleteFirst();
$list->deleteLast();
$list->deleteLast();
$list->deleteLast();
$list->delete(15);
var_dump($list->getNthNode(1));
$list->display();
$list->reverseList();
