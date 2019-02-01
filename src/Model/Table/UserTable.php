<?php
namespace App\Model\table;
use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UserTable extends Table
{
    public function initialize(array $config) {
        parent::initialize($config);
        $this -> table('usuario');
        $this -> displayField('usu_id');
        $this -> primaryKey('usu_id');
        $this ->addBehavior('Timestamp');
    $this -> hasMany('Bookmarks',['foreignKey' =>'user_id']);
    }
//    public function validationDefault(Validator $validator)
//    {
//    $validator
//            ->add('usu_id','valid',['rule'=>'numeric'])
//            ->allowEmpty('usu_id','create');
//    return $validator;
//    }
//    
//    public function buildRules(RulesChecker $rules)
//    {
//        $rules ->add($rules -> isUnique(['usu_nombre']));
//        return $rules;
//    }
}
