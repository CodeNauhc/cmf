<?php

use yii\db\Migration;

/**
 * Handles the creation of table `task`.
 */
class m170112_065712_create_task_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        // $this->createTable('{{%task}}', [
        //     'id' => $this->primaryKey(),
        //     'creator'=>'char(16) NOT NULL COMMENT \'创建人\'',
        //     'executor'=>'char(16) NOT NULL COMMENT \'执行者\'',
        //     'date'=>'varchar(255) NOT NULL COMMENT \'期限\'',
        //     'gxid'=>'varchar(255) NOT NULL COMMENT \'工序号\'',
        //     'supervisorlevelone'=>'int(11) NOT NULL COMMENT \'一级审核人\'',
        //     'supervisorleveltwo'=>'int(11) NOT NULL COMMENT \'二级级审核人\'',
        //     'task_type'=>'int(11) NOT NULL COMMENT \'任务类型\'',
        //     'tower_id'=>'char(16) NOT NULL COMMENT \'塔号\'',
        //     'create_time' => 'int(10) NOT NULL COMMENT \'创建时间\'',
        //     'status' => 'tinyint(1) NOT NULL DEFAULT \'1\' COMMENT \'状态\'',
        // ]);
        $this->createTable('{{%task}}', [
            'id' => $this->primaryKey(),
            'creator'=>'varchar(255) NOT NULL COMMENT \'创建人\'',
            'executor'=>'varchar(255) NOT NULL COMMENT \'执行者\'',
            'date'=>'varchar(255) NOT NULL COMMENT \'期限\'',
            'gxid'=>'varchar(255) NOT NULL COMMENT \'工序号\'',
            'supervisorlevelone'=>'varchar(255) NOT NULL COMMENT \'一级审核人\'',
            'supervisorleveltwo'=>'varchar(255) NOT NULL COMMENT \'二级级审核人\'',
            'task_type'=>'varchar(255) NOT NULL COMMENT \'任务类型\'',
            'tower_id'=>'varchar(255) NOT NULL COMMENT \'塔号\'',
            'create_time' => 'varchar(255) NOT NULL COMMENT \'创建时间\'',
            'status' => 'varchar(255) NOT NULL DEFAULT \'1\' COMMENT \'状态\'',
        ]);

        // 插入测试数据
        for ($i=0; $i < 21; $i++) {
            # code...
            $this->insert('{{%task}}',[
            'creator'=>'张三'.rand(1,9),
            'executor'=>'李四'.rand(1,9),
            'date'=> time(),
            'gxid'=>rand(1,9),
            'supervisorlevelone'=>'1',
            'supervisorleveltwo'=>'2',
            'task_type'=>rand(1,3),
            'tower_id'=>'12'.rand(1,9),
            'create_time' => time(),
            'status' => 1,
        ]);
        }
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%task}}');
    }
}
