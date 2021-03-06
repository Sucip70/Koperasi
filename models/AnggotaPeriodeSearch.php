<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AnggotaPeriode;

/**
 * AnggotaPeriodeSearch represents the model behind the search form of `app\models\AnggotaPeriode`.
 */
class AnggotaPeriodeSearch extends AnggotaPeriode
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_anggota', 'id_periode', 'no_telp'], 'integer'],
            [['nama_anggota', 'alamat'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = AnggotaPeriode::find();

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
            'id_anggota' => $this->id_anggota,
            'id_periode' => $this->id_periode,
            'no_telp' => $this->no_telp,
        ]);

        $query->andFilterWhere(['like', 'nama_anggota', $this->nama_anggota])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}
