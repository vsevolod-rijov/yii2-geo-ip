<?php
namespace coderius\geoIp;

use yii\base\BaseObject;
use yii\helpers\ArrayHelper;

class Location extends BaseObject{
    
    private $_accuracy_radius;
    private $_latitude;
    private $_longitude;
    private $_metro_code;
    private $_time_zone;
    
    public function __construct($location)
    {
        $this->_accuracy_radius= ArrayHelper::getValue($location, 'accuracy_radius');
        $this->_latitude = ArrayHelper::getValue($location, 'latitude');
        $this->_longitude = ArrayHelper::getValue($location, 'longitude');
        $this->_metro_code = ArrayHelper::getValue($location, 'metro_code');
        $this->_time_zone = ArrayHelper::getValue($location, 'time_zone');
    }
    
    public function getAccuracyRadius() {
        return $this->_accuracy_radius;
    }

    public function getLatitude() {
        return $this->_latitude;
    }

    public function getLongitude() {
        return $this->_longitude;
    }

    public function getMetroCode() {
        return $this->_metro_code;
    }

    public function getTimeZone() {
        return $this->_time_zone;
    }


    
}



