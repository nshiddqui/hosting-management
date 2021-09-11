<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Cache\Cache;

/**
 * Pricing Model
 *
 * @property \App\Model\Table\PricingFeaturesTable&\Cake\ORM\Association\HasMany $PricingFeatures
 *
 * @method \App\Model\Entity\Pricing newEmptyEntity()
 * @method \App\Model\Entity\Pricing newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pricing[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pricing get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pricing findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pricing patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pricing[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pricing|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pricing saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pricing[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pricing[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pricing[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pricing[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PricingTable extends Table {
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void {
        parent::initialize($config);

        $this->setTable('pricing');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('PricingFeatures', [
            'foreignKey' => 'pricing_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmptyString('amount');

        $validator
            ->integer('discount')
            ->notEmptyString('discount');

        $validator
            ->integer('total_website')
            ->notEmptyString('total_website');

        $validator
            ->scalar('color')
            ->maxLength('color', 255)
            ->allowEmptyString('color');

        return $validator;
    }

    public function getPricing($reset  = false) {
        $pricing = Cache::read('getPricing');
        if ($pricing === null || $reset) {
            $pricing = $this->find('all', ['contain' => ['PricingFeatures']])->toArray();
            Cache::write('getPricing', $pricing);
        }
        return $pricing;
    }
}
