<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Urls Model
 *
 * @method \App\Model\Entity\Url newEmptyEntity()
 * @method \App\Model\Entity\Url newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Url[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Url get($primaryKey, $options = [])
 * @method \App\Model\Entity\Url findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Url patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Url[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Url|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Url saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Url[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Url[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Url[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Url[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UrlsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('urls');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('url_account')
            ->maxLength('url_account', 255)
            ->requirePresence('url_account', 'create')
            ->notEmptyString('url_account');

        $validator
            ->integer('keyword_num')
            ->requirePresence('keyword_num', 'create')
            ->notEmptyString('keyword_num');

        $validator
            ->scalar('site_name')
            ->maxLength('site_name', 255)
            ->requirePresence('site_name', 'create')
            ->notEmptyString('site_name');

        $validator
            ->dateTime('updated_at')
            ->notEmptyDateTime('updated_at');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->boolean('deleted')
            ->notEmptyString('deleted');

        return $validator;
    }
}
