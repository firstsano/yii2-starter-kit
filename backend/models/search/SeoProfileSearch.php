<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SeoProfile;

/**
 * SeoProfileSearch represents the model behind the search form about `common\models\SeoProfile`.
 */
class SeoProfileSearch extends SeoProfile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'owner_id'], 'integer'],
            [['owner_type', 'title', 'keywords', 'description'], 'safe'],
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
        $query = SeoProfile::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'owner_id' => $this->owner_id,
        ]);

        $query->andFilterWhere(['like', 'owner_type', $this->owner_type])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
