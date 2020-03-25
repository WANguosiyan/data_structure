<?php
/**
 * 链表插入、删除、查找
 */
namespace Singlelinkedlist;
require_once './SingleLinkedListNode.php';

class SingleLinkedList{

    public $head;
    //链表长度
    public $length;

    public function __construct()
    {
        $newNode = new SingleLinkedListNode();
        $this->head = $newNode;
        $this->length = 0;
    }

    /**
     * 查找链表长度
     */
   public function getLength(){
        return $this->length;
   }

    /**
     * 在链表头部插入节点
     * @param $data 插入数据
     */
   public function insert($data){

       if(null == $this->head) return false;
//       新建节点
       $newNode = new SingleLinkedListNode();
       $newNode->data = $data;
       $newNode->next = $this->head->next;
       $this->head->next = $newNode;
       $this->length++;
   }

    /**
     * 删除某个节点
     * @param $node  节点
     */
    public function delete($node){

        if(null == $node) return false;

        //查找删除节点的前驱节点
        $proNode = $this->getProNode($this->head,$node);

        $proNode->next = $node->next;

        unset($node);
        $this->length--;
        return true;

    }

    /**
     * 查找节点的前驱节点
     * @param SingleLinkedListNode $obj
     * @param $node
     */
    public function getProNode(SingleLinkedListNode $obj,$node){

        if(null == $node) return false;
        $curNode = $obj->next;//当前节点
        $preNode = $obj->next;//前驱节点

        while ($curNode !== $node){
            $preNode = $curNode;
            $curNode = $curNode->next;

        }
        return $preNode;

    }

    /**
     * 根据索引查找节点
     * @param $index
     */
    public function getNodeByInex($index){
        if($index >= $this->length) return false;
        $curNode = $this->head->next;

        for ($i=0;$i < $index;$i++){
            $curNode = $curNode->next;
        }
        return $curNode;
    }

    /**
     * 在指定节点后插入数据
     * @param SingleLinkedListNode $node
     * @param $data
     */
    public function insertNodeAfter(SingleLinkedListNode $node,$data){
        if($node == null) return null;
        $newNode = new SingleLinkedListNode();
        $newNode->data = $data;
        $newNode->next = $node->next;
        $node->next = $newNode;
        $this->length++;
        return true;

    }

    /**
     * 在指定节点前插入元素
     * @param SingleLinkedListNode $node
     * @param $data
     */
    public function insertNodeBefore(SingleLinkedListNode $node,$data){

        if(null == $node) return false;
        $newNode = new SingleLinkedListNode();
        $newNode->data = $data;
        $newNode->next = $node;
        $proNode = $this->getProNode($this->head,$node);
        $proNode->next = $newNode;
        $this->length++;
        return true;
    }
    /**
     * 返回链表数据
     */
    public function getLikedList(){
        return $this->head;
    }
}

?>