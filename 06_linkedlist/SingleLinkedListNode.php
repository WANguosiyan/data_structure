<?php
namespace Singlelinkedlist;
/**
 * 新建单链表节点类
 */
class SingleLinkedListNode{

    //节点数据
    public $data;
    //节点next指针
    public $next;

    //创建新节点
    public function __construct()
    {
        $this->data = null;
        $this->next = null;
    }
}
?>