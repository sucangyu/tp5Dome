<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Tage extends Migrator
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
        $table = $this->table('tage',array('comment'=>'文章标签'));
        $table->addColumn('name', 'string',array('limit' => 16,'default'=>'','comment'=>'标签名称'))
            ->save();
    }

    /**
     * Migrate Down.migrate:rollback执行的操作
     */
    public function down()
    {
        //数据表的删除
        $this->dropTable('tage');
    }
}
