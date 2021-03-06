<?php
/**
 * OcReturn
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{return}}
 * @property integer $return_id
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $customer_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $telephone
 * @property string $product
 * @property string $model
 * @property integer $quantity
 * @property integer $opened
 * @property integer $return_reason_id
 * @property integer $return_action_id
 * @property integer $return_status_id
 * @property string $comment
 * @property string $date_ordered
 * @property string $date_added
 * @property string $date_modified
 *
 * Relations
 * @property \OcOrder $order
 * @property \OcProduct $product0
 * @property \OcCustomer $customer
 * @property \OcReturnReason $returnReason
 * @property \OcReturnAction $returnAction
 * @property \OcReturnStatus $returnStatus
 * @property \OcReturnHistory[] $returnHistories
 *
 * @see \CActiveRecord
 * @method \OcReturn find($condition = '', array $params = array())
 * @method \OcReturn findByPk($pk, $condition = '', array $params = array())
 * @method \OcReturn findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcReturn findBySql($sql, array $params = array())
 * @method \OcReturn[] findAll($condition = '', array $params = array())
 * @method \OcReturn[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcReturn[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcReturn[] findAllBySql($sql, array $params = array())
 * @method \OcReturn with()
 * @method \OcReturn together()
 * @method \OcReturn cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcReturn resetScope($resetDefault = true)
 * @method \OcReturn populateRecord($attributes, $callAfterFind = true)
 * @method \OcReturn[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcReturn extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcReturn the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return '{{return}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'order' => array(self::BELONGS_TO, 'OcOrder', 'order_id'),
            'product0' => array(self::BELONGS_TO, 'OcProduct', 'product_id'),
            'customer' => array(self::BELONGS_TO, 'OcCustomer', 'customer_id'),
            'returnReason' => array(self::BELONGS_TO, 'OcReturnReason', 'return_reason_id'),
            'returnAction' => array(self::BELONGS_TO, 'OcReturnAction', 'return_action_id'),
            'returnStatus' => array(self::BELONGS_TO, 'OcReturnStatus', 'return_status_id'),
            'returnHistories' => array(self::HAS_MANY, 'OcReturnHistory', 'return_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'return_id' => Yii::t('app', 'Return'),
            'order_id' => Yii::t('app', 'Order'),
            'product_id' => Yii::t('app', 'Product'),
            'customer_id' => Yii::t('app', 'Customer'),
            'firstname' => Yii::t('app', 'Firstname'),
            'lastname' => Yii::t('app', 'Lastname'),
            'email' => Yii::t('app', 'Email'),
            'telephone' => Yii::t('app', 'Telephone'),
            'product' => Yii::t('app', 'Product'),
            'model' => Yii::t('app', 'Model'),
            'quantity' => Yii::t('app', 'Quantity'),
            'opened' => Yii::t('app', 'Opened'),
            'return_reason_id' => Yii::t('app', 'Return Reason'),
            'return_action_id' => Yii::t('app', 'Return Action'),
            'return_status_id' => Yii::t('app', 'Return Status'),
            'comment' => Yii::t('app', 'Comment'),
            'date_ordered' => Yii::t('app', 'Date Ordered'),
            'date_added' => Yii::t('app', 'Date Added'),
            'date_modified' => Yii::t('app', 'Date Modified'),
        );
    }

}

