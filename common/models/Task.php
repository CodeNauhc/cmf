<?php

namespace common\models;

use Yii;


/**
 * This is the model class for table "yii2_task".
 *
 * @property integer $id
 * @property string $creator
 * @property string $executor
 * @property string $date
 * @property string $gxid
 * @property integer $supervisorlevelone
 * @property integer $supervisorleveltwo
 * @property integer $task_type
 * @property string $tower_id
 * @property integer $create_time
 * @property integer $status
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yii2cmf_task';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['creator', 'executor', 'date', 'gxid', 'supervisorlevelone', 'supervisorleveltwo', 'task_type', 'tower_id', 'create_time'], 'required'],
            // [['supervisorlevelone', 'supervisorleveltwo', 'task_type', 'create_time', 'status'], 'integer'],
            // [['creator', 'executor', 'tower_id'], 'string', 'max' => 16],
            // [['date', 'gxid'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'creator' => '创建人',
            'executor' => '执行者',
            'date' => '完成期限',
            'gxid' => '工序id',
            'supervisorlevelone' => '一级审批',
            'supervisorleveltwo' => '二级审批',
            'task_type' => '任务类型',
            'tower_id' => '塔 ID',
            'create_time' => '创建时间',
            'status' => '状态',
        ];
    }
    // public function getTask(){
    //    return  FuncHelper::apiTaskData($this->find()->all());

    // }

}
