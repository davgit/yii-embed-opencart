<?php
/**
 * OcCurrency
 *
 * --- BEGIN ModelDoc ---
 *
 * Table {{currency}}
 * @property integer $currency_id
 * @property string $title
 * @property string $code
 * @property string $symbol_left
 * @property string $symbol_right
 * @property string $decimal_place
 * @property double $value
 * @property integer $status
 * @property string $date_modified
 *
 * Relations
 * @property \OcOrder[] $orders
 *
 * @see \CActiveRecord
 * @method \OcCurrency find($condition = '', array $params = array())
 * @method \OcCurrency findByPk($pk, $condition = '', array $params = array())
 * @method \OcCurrency findByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCurrency findBySql($sql, array $params = array())
 * @method \OcCurrency[] findAll($condition = '', array $params = array())
 * @method \OcCurrency[] findAllByPk($pk, $condition = '', array $params = array())
 * @method \OcCurrency[] findAllByAttributes(array $attributes, $condition = '', array $params = array())
 * @method \OcCurrency[] findAllBySql($sql, array $params = array())
 * @method \OcCurrency with()
 * @method \OcCurrency together()
 * @method \OcCurrency cache($duration, $dependency = null, $queryCount = 1)
 * @method \OcCurrency resetScope($resetDefault = true)
 * @method \OcCurrency populateRecord($attributes, $callAfterFind = true)
 * @method \OcCurrency[] populateRecords($data, $callAfterFind = true, $index = null)
 *
 * --- END ModelDoc ---
 */

class OcCurrency extends CActiveRecord
{

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return OcCurrency the static model class
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
        return '{{currency}}';
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        return array(
            'orders' => array(self::HAS_MANY, 'OcOrder', 'currency_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'currency_id' => Yii::t('app', 'Currency'),
            'title' => Yii::t('app', 'Title'),
            'code' => Yii::t('app', 'Code'),
            'symbol_left' => Yii::t('app', 'Symbol Left'),
            'symbol_right' => Yii::t('app', 'Symbol Right'),
            'decimal_place' => Yii::t('app', 'Decimal Place'),
            'value' => Yii::t('app', 'Value'),
            'status' => Yii::t('app', 'Status'),
            'date_modified' => Yii::t('app', 'Date Modified'),
        );
    }

}

