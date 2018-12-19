<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Posts extends Migrator
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
    /**
     * Migrate Up.migrate:run执行的操作
     */
    public function up()
    {
        // create the table
        $table = $this->table('posts',array('comment'=>'文章表'));
        $table->addColumn('title', 'string',array('limit' => 100,'default'=>'','comment'=>'文章标题'))
            ->addColumn('content', 'text',array('comment'=>'文章内容'))
            ->addColumn('viewed', 'integer',array('comment'=>'浏览次数'))
            ->addTimestamps()
            ->addColumn('is_delete', 'boolean',array('limit' => 1,'default'=>0,'comment'=>'删除状态，1已删除'))
            ->save();
    }

    /**
     * Migrate Down.migrate:rollback执行的操作
     */
    public function down()
    {
        //数据表的删除
        $this->dropTable('posts');
    }
}
