<?php

use Phinx\Migration\AbstractMigration;

class CatMigration extends AbstractMigration
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
     * Migrate up
     */

    public function up()
    {
        $cat = $this->table('category');

        $cat->addColumn('name', 'string', array('limit' => 255))
            ->addColumn('slug', 'string', array('limit' => 255))
            ->addIndex(array('name', 'slug'), array('unique' => true))
            ->save();
    }

    /**
     *  Migrate down
     */

    public function down()
    {

    }

}
