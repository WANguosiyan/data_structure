<?php
namespace Linkedlist_06;
$list = new SingleLinkedList();
$list->insert('a');
$list->insert('b');
$list->insert('c');
$list->insert('b');
$list->insert('a');
echo "<pre>";
var_dump($list->getLikedList());
var_dump(palinDrome($list));
 function palinDrome(SingleLinkedList $list){

     if($list->getLength() <= 1) return true;
    $fast = $list->head->next;
    $slow = $list->head->next;

    $pre = null;
    $exmain = null;


   while($fast != null && $fast->next != null){
       $fast = $fast->next->next;
       //翻转前半部分
       $exmain = $slow->next;
       $slow->next = $pre;
       $pre = $slow;
       $slow = $exmain;
   }
   //判断奇偶
     if($fast != null){
         $slow = $slow->next;
     }
     while ($slow ->next != null){
         if($slow != $pre) return false;
         $slow = $slow->next;
         $pre = $pre->next;
     }
     return true;


}

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