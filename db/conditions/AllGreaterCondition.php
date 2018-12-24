<?php
namespace app\db\conditions;
use yii\db\conditions\ConditionInterface;
class AllGreaterCondition implements ConditionInterface{
    private $columns;
    private $value;

    /**
     * @param string[] $columns 要大于 $value 的字段名数组
     * @param mixed $value 每个 $column 要比较的数值
     */
    public function __construct(array $columns, $value){
        $this->columns = $columns;
        $this->value = $value;
    }

    public static function fromArrayDefinition($operator, $operands){
        return new static($operands[0], $operands[1]);
    }
    
    public function getColumns() { return $this->columns; }
    public function getValue() { return $this->value; }
}