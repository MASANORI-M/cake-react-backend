<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $table = $this->table('users');

        $data = [
            [
                'id' => 1,
                'name_last' => '松村',
                'name_first' => '昌典',
                'job' => 'ITエンジニア',
                'created' => '2022-08-23 20:00:00',
                'modified' => '2022-08-23 20:00:00',
                'deleted' => 0,
            ],
            [
                'id' => 2,
                'name_last' => '山田',
                'name_first' => 'しんすけ',
                'job' => 'ニート',
                'created' => '2022-08-23 20:00:00',
                'modified' => '2022-08-23 20:00:00',
                'deleted' => 0,
            ],
            [
                'id' => 3,
                'name_last' => '桑田',
                'name_first' => '啓介',
                'job' => 'クラッシャー',
                'created' => '2022-08-23 20:00:00',
                'modified' => '2022-08-23 20:00:00',
                'deleted' => 0,
            ],
        ];

        $table->insert($data)->save();
    }
}
