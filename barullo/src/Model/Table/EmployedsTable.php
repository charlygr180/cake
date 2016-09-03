<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employeds Model
 *
 * @method \App\Model\Entity\Employed get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employed newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employed[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employed|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employed patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employed[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employed findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployedsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('employeds');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->requirePresence('salary', 'create')
            ->notEmpty('salary');

        $validator
            ->integer('barid')
            ->requirePresence('barid', 'create')
            ->notEmpty('barid');

        return $validator;
    }
}
