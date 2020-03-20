<?php
class Myarray{
    private $data;//数据
    private $length;//长度
    private $capacity;//容量

    public function __construct($capacity)
    {
        $capacity = intval($capacity);
        if($capacity <= 0 )
            return null;
        $this->data = array();
        $this->capacity = $capacity;
        $this->length = 0;
    }

    /**
     * 检查数组是否已满
     * @return bool
     */
    public function checkIfFull(){
        if($this->length == $this->capacity) return true;
        return false;
    }

    /**
     * 检查数组是否已空
     * @return bool
     */
    public function checkOutOfRange($index){
        if($index >= $this->length) return true;
        return false;
    }
    /**
     * 向$index索引位置 插入 $val
     * @param $index
     * @param $val
     * 1 2 3 4 5
     */
    public function insert($index,$val){
        $index = intval($index);
        $val = intval($val);
        if($index < 0) return 1;
        if($this->checkIfFull()) return 2;
//        for ($i = $this->length + 1; $i >= $index;$i--){
//            $this->data[$i] = $this->data[$i-1];
//        }
        for ($i = $this->length - 1; $i >= $index; $i--) {
            $this->data[$i + 1] = $this->data[$i];
        }

        $this->data[$index] = $val;
        $this->length++;
    }

    /**
     * 删除 索引index的值
     * @param $index
     */
    public function delete($index){
        $index = intval($index);
        if($index < 0) return 1;
        if($this->checkOutOfRange($index)) return 2;
//        for($i = $index;$i <= $this->length -1;$i++){
////            $this->data[$i] = $this->data[$i+1];
////        }
/// 1 2 3 4 5 6
       for ($i = $index; $i < $this->length - 1; $i++) {
           $this->data[$i] = $this->data[$i + 1];
        }
        $this->length--;

    }

    /**
     * 查询
     * @param $index
     */
    public function search($index){
        $index = intval($index);
        if($index < 0 || $index >= $this->length) return 2;
        return[$index,$this->data[$index]];
    }

    /**
     *
     */
    public function printData(){
        if($this->length == 0) return null;
        $str = '';
        for ($i = 0;$i < $this->length;$i++){
            $str .= $this->data[$i].' | ';
        }
        var_dump($str);
    }
}
?>