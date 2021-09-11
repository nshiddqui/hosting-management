<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Cache\Cache;

/**
 * Faqs Model
 *
 * @method \App\Model\Entity\Faq newEmptyEntity()
 * @method \App\Model\Entity\Faq newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Faq[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Faq get($primaryKey, $options = [])
 * @method \App\Model\Entity\Faq findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Faq patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Faq[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Faq|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faq saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Faq[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class FaqsTable extends Table {
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void {
        parent::initialize($config);

        $this->setTable('faqs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('question')
            ->requirePresence('question', 'create')
            ->notEmptyString('question');

        $validator
            ->scalar('answer')
            ->requirePresence('answer', 'create')
            ->notEmptyString('answer');

        return $validator;
    }

    public function getTopFiveFaq($reset  = false) {
        $topFiveFaq = Cache::read('getTopFiveFaq');
        if ($topFiveFaq === null || $reset) {
            $topFiveFaq = $this->find('all')->select(['question', 'answer'])->limit(5)->toArray();
            Cache::write('getTopFiveFaq', $topFiveFaq);
        }
        return $topFiveFaq;
    }
}
