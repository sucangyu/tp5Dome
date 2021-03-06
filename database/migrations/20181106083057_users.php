<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{

    /**
     * Migrate Up.migrate:run执行的操作
     */
    public function up()
    {
        // create the table
        $table = $this->table('users',array('comment'=>'用户表','engine'=>'MyISAM'));
        $table->addColumn('username', 'string',array('limit' => 15,'default'=>'','comment'=>'用户名，登陆使用'))
            ->addColumn('password', 'string',array('limit' => 32,'default'=>md5('123456'),'comment'=>'用户密码'))
            ->addColumn('login_status', 'boolean',array('limit' => 1,'default'=>0,'comment'=>'登陆状态'))
            ->addColumn('login_code', 'string',array('limit' => 32,'default'=>0,'comment'=>'排他性登陆标识'))
            ->addColumn('last_login_ip', 'integer',array('limit' => 11,'default'=>0,'comment'=>'最后登录IP'))
            ->addColumn('last_login_time', 'datetime',array('default'=>0,'comment'=>'最后登录时间'))
            ->addColumn('is_delete', 'boolean',array('limit' => 1,'default'=>0,'comment'=>'删除状态，1已删除'))
            ->addIndex(array('username'), array('unique' => true))
            ->save();
    }

    /**
     * Migrate Down.migrate:rollback执行的操作
     */
    public function down()
    {
        //数据表的删除
        $this->dropTable('users');
    }
}
