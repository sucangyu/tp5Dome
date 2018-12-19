<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Comments extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        // create the table
        $table = $this->table('comments',array('comment'=>'评论表'));
        $table->addColumn('post_id', 'integer',array('comment'=>'文章ID'))
            ->addColumn('content', 'string',array('limit' => 255,'default'=>'','comment'=>'评论内容'))
            ->addColumn('status', 'boolean',array('limit' => 1,'default'=>0,'comment'=>'评论审核，(0-未审核;1审核通过;2-拒绝)'))
            ->addColumn('create_time', 'datetime',array('default'=>0,'comment'=>'评论时间'))
            ->save();
    }

    /**
     * Migrate Down.migrate:rollback执行的操作
     */
    public function down()
    {
        //数据表的删除
        $this->dropTable('comments');
    }
}
