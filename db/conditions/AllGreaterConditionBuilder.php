<?php
namespace app\db\conditions;
use yii\db\ExpressionBuilderInterface;
use yii\db\ExpressionInterface;
use yii\db\conditions\SimpleCondition;
use yii\db\conditions\AndCondition;
class AllGreaterConditionBuilder implements ExpressionBuilderInterface{
    use \yii\db\ExpressionBuilderTrait; 
    public function build(ExpressionInterface $expression, array &$params = []){
        $value = $expression->getValue();
        
        $conditions = [];
        foreach ($expression->getColumns() as $column) {
            $conditions[] = new SimpleCondition($column, '>', $value);
        }

        return $this->queryBuilder->buildCondition(new AndCondition($conditions), $params);
    }
}