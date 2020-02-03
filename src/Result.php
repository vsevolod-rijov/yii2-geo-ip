<?php
/**
 * @copyright Copyright (C) 2018 Sergio coderius <coderius>
 * @license This program is free software: GNU General Public License
 */
namespace coderius\geoIp;

use yii\base\BaseObject;

class Result extends BaseObject {
    
    
    private $_result;


    public function __construct($result, $config = [])
    {
        $this->_result = $result;
        parent::__construct($config);
    }
    
    public function hasResult() {
        return $this->_result ? true : false;
    }
    
    /*
     * @param array $data
     * @return object or null
     */
    protected function getCity() {
//        return $this->_result;
        return (isset($this->_result['city'])) ? new City($this->_result['city']) : null;
    }

    /*
     * @param array $data
     * @return object|null
     */
    protected function getContinent() {
        return new Continent($this->_result['continent']);
    }
    
    /*
     * @param array $data
     * @return object|null
     */
    protected function getCountry() {
        return new Country($this->_result['country']);
    }

    /*
     * @param array $data
     * @return object|null
     */
    protected function getLocation() {
        return new Location($this->_result['location']);
    }

    /*
     * @param array $data
     * @return object|null
     */
    protected function getPostal() {
        return new Postal($this->_result['postal']);
    }
    
    /*
     * @param array $data
     * @return object|null
     */
    protected function getRegisteredCountry() {
        return new RegisteredCountry($this->_result['registered_country']);
    }

    
    protected function getSubdivisions() {
        $result = [];
        foreach($this->_result['subdivisions'] as $subdivision){
            $result[] = new Subdivision($subdivision);
        }
        return $result;
    }
    
}
