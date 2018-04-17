<?php
namespace coderius\geoIp;

use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

class Postal extends BaseObject{
    
    private $_code;
    private $_geoname_id;
    private $_names = [];
    
    public function __construct($postal)
    {
        $this->_code = ArrayHelper::getValue($postal, 'code');
    }
    
    public function getCode() {
        return $this->_code;
    }
    
    
}



