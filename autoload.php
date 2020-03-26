<?php
spl_autoload_register(function ($class) { // class = os\Linux
    /* 限定类名路径映射 */
    $class_map = array(
        // 限定类名 => 文件路径
        'Linkedlist_06\SingleLinkedList' =>  __DIR__.'/06_linkedlist/SingleLinkedList.php',
        'Linkedlist_06\SingleLinkedListNode' =>  __DIR__.'/06_linkedlist/SingleLinkedListNode.php',
    );

    /* 根据类名确定文件名 */
    $file = $class_map[$class];
    /* 引入相关文件 */
    if (file_exists($file)) {
        include $file;
    }
});

?>