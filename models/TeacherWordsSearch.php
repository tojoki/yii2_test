<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TeacherWords;

/**
 * TeacherWordsSearch represents the model behind the search form of `app\models\TeacherWords`.
 */
class TeacherWordsSearch extends TeacherWords
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sortorder', 'ctime'], 'integer'],
            [['name', 'cover', 'position', 'intro', 'is_del'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TeacherWords::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'sortorder' => $this->sortorder,
            'ctime' => $this->ctime,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'cover', $this->cover])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'intro', $this->intro])
            ->andFilterWhere(['like', 'is_del', $this->is_del]);

        return $dataProvider;
    }
}
