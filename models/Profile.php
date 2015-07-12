<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property integer $user_id
 * @property string $avatar
 * @property string $first_name
 * @property string $second_name
 * @property string $middle_name
 * @property integer $birthday
 * @property integer $gender
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['birthday', 'gender'], 'integer'],
            [['avatar'], 'string', 'max' => 255],
            [['first_name', 'second_name', 'middle_name'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'avatar' => 'Avatar',
            'first_name' => 'First Name',
            'second_name' => 'Second Name',
            'middle_name' => 'Middle Name',
            'birthday' => 'Birthday',
            'gender' => 'Gender',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
