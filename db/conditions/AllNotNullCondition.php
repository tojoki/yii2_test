<?php
namespace app\db\conditions;
use yii\db\conditions\ConditionInterface;
class AllNotNullCondition implements ConditionInterface{
    private $columns;

    /**
     * @param string[] $columns 要查询的非空字段数据
     */
    public function __construct(array $columns){
        $this->columns = $columns;
    }
    
    public static function fromArrayDefinition($operator, $operands){
        return new static($operands[0]);
    }
    
    public function getColumns() { return $this->columns; }
}