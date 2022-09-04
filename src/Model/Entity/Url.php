<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Url Entity
 *
 * @property int $id
 * @property string $url_account
 * @property int $keyword_num
 * @property string $site_name
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property \Cake\I18n\FrozenTime $created_at
 * @property bool $deleted
 */
class Url extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'url_account' => true,
        'keyword_num' => true,
        'site_name' => true,
        'updated_at' => true,
        'created_at' => true,
        'deleted' => true,
    ];
}
