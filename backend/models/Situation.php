<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "situation".
 *
 * @property integer $id
 * @property string $tag
 * @property string $content
 * @property integer $type
 * @property string $created_at
 */
class Situation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'situation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'type'], 'required'],
            [['content'], 'string'],
            [['type'], 'integer'],
            [['created_at'], 'safe'],
            [['tag'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag' => 'Tag',
            'content' => 'Content',
            'type' => 'Type',
            'created_at' => 'Created At',
        ];
    }
}
