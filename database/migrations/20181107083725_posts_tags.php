<?php

use think\migration\Migrator;
use think\migration\db\Column;

class PostsTags extends Migrator
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
        $table = $this->table('posts_tags',array('comment'=>'文章标签关联表'));
        $table->addColumn('post_id', 'integer',array('limit' => 11,'default'=>0,'comment'=>'文章ID'))
            ->addColumn('tag_id', 'integer',array('limit' => 11,'default'=>0,'comment'=>'标签ID'))
            ->save();
    }

    /**
     * Migrate Down.migrate:rollback执行的操作
     */
    public function down()
    {
        //数据表的删除
        $this->dropTable('posts_tags');
    }
}
