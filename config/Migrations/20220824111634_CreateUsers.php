<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('name_last', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => '名前（姓）'
        ]);
        $table->addColumn('name_first', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => '名前（名）'
        ]);
        $table->addColumn('job', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => '職業'
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'limit' => null,
            'null' => true,
            'comment' => '登録日時'
        ]);
        $table->addColumn('modified', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'update' => 'CURRENT_TIMESTAMP',
            'limit' => null,
            'null' => true,
            'comment' => '変更日時'
        ]);
        $table->addColumn('deleted', 'boolean', [
            'default' => null,
            'null' => false,
            'limit' => 2,
        ]);
        $table->create();
    }
}
