<?php
/**
 * 链表插入、删除、查找
 */
namespace Linkedlist_06;
//require_once '06_linkedlist/SingleLinkedListNode.php';

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
    public function insertNodeAfter(SingleLinkedListNode $originNode, SingleLinkedListNode $node)
    {
        // 如果originNode为空，插入失败
        if (null == $originNode) {
            return false;
        }

        $node->next = $originNode->next;
        $originNode->next = $node;

        $this->length++;

        return $node;
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

    /**
     * 构造一个有环的链表
     */
    public function buildHasCircleList()
    {

        $data = [1, 2, 3, 4, 5, 6, 7, 8];
        $node0 = new SingleLinkedListNode($data[0]);
        $node1 = new SingleLinkedListNode($data[1]);
        $node2 = new SingleLinkedListNode($data[2]);
        $node3 = new SingleLinkedListNode($data[3]);
        $node4 = new SingleLinkedListNode($data[4]);
        $node5 = new SingleLinkedListNode($data[5]);
        $node6 = new SingleLinkedListNode($data[6]);
        $node7 = new SingleLinkedListNode($data[7]);

        $this->insertNodeAfter($this->head, $node0);
        $this->insertNodeAfter($node0, $node1);
        $this->insertNodeAfter($node1, $node2);
        $this->insertNodeAfter($node2, $node3);
        $this->insertNodeAfter($node3, $node4);
        $this->insertNodeAfter($node4, $node5);
        $this->insertNodeAfter($node5, $node6);
        $this->insertNodeAfter($node6, $node7);

        $node7->next = $node4;
    }

}

?>