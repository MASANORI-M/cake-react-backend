<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateUrls extends AbstractMigration
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
        $table = $this->table('urls');
        $table->addColumn('url_account', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => '登録URL'
        ]);
        $table->addColumn('keyword_num', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '登録キーワード数'
        ]);
        $table->addColumn('site_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => 'サイト名'
        ]);
        $table->addColumn('updated_at', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
            'comment' => '更新日時'
        ]);
        $table->addColumn('created_at', 'datetime', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
            'comment' => '作成日時'
        ]);
        $table->addColumn('deleted', 'boolean', [
            'default' => false,
            'null' => false,
            'limit' => 2,
            'comment' => '削除'
        ]);
        $table->create();
    }
}
