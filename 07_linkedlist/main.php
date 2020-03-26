<?php
namespace Linkedlist;
use Linkedlist_06\SingleLinkedList;
require_once '../autoload.php';

class linked{
    /**
     * 单链表反转
     * @param SingleLinkedList $list
     * @return SingleLinkedListNode
     */
    public static function reversal(SingleLinkedList $list){
        $node = $list->head->next;
        if($list->getLength() <= 1) return $list->head;

        $pre = null;
        $exmain = null;
        while ($node->next != null){
            $exmain = $node;
            $node->next = $pre;
            if($pre == null){
                $pre = $node;
            }else{

            }

            $node = $exmain;

        }
        return $pre;

    }
}
$list = new SingleLinkedList();
$list->insert('a');
$list->insert('b');
$list->insert('c');
$list->insert('d');
$list->insert('e');
echo "<pre>";
var_dump(linked::reversal($list));
?>