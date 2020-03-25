<?php
namespace Singlelinkedlist;
require_once './SingleLinkedList.php';

 function palinDrome($list){
    $linkedlist = $list->head->next;
    $length = $list->length;
    $fast = $linkedlist;
    $slow= $linkedlist;
    while ($fast->next !== null){
        $fast = $fast->next->next;
        $slow = $slow->next;
    }


}
$list = new SingleLinkedList();
$list->insert('a');
$list->insert('b');
$list->insert('c');
$list->insert('d');
palinDrome($list);
//echo "<pre>";
//var_dump($list->getLikedList());
//var_dump($list->getLength());
//$node = $list->getNodeByInex(2);
//var_dump($node);
//$list->delete($node);
//var_dump($list->getLikedList());
//var_dump($list->getLength());
//插入
//$list->insertNodeBefore($node,6);
//var_dump($list->getLikedList());
//$node1 = $list->getNodeByInex(3);
//var_dump($node1);
//$list->insertNodeAfter($node1,99);
//var_dump($list->getLikedList());
?>