<?php
namespace app\db\conditions;
use yii\db\ExpressionBuilderInterface;
use yii\db\ExpressionInterface;
use yii\db\conditions\SimpleCondition;
use yii\db\conditions\AndCondition;

class AllNotNullConditionBuilder implements ExpressionBuilderInterface{
    use \yii\db\ExpressionBuilderTrait; // Contains constructor and `queryBuilder` property.

    /**
     * @param ExpressionInterface $condition 要构建的查询条件对象
     * @param array $params 绑定的参数
     * @return AllNotNullCondition
     */ 
    public function build(ExpressionInterface $expression, array &$params = []){        
        $conditions = [];
        foreach ($expression->getColumns() as $column) {
            $conditions[] = new SimpleCondition($column, 'is not', null);
        }

        return $this->queryBuilder->buildCondition(new AndCondition($conditions), $params);
    }
}