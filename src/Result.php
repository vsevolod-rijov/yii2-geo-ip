<?php
namespace coderius\geoIp;

use yii\base\BaseObject;

/**
 * Class Result
 * @package coderius\geoIp
 * @author coderius <coder3000web@gmail.com>
 *
 * @property object|null city
 * @property object|null continent
 * @property object|null country
 * @property object|null location
 * @property object|null postal
 * @property object|null registered_country
 * @property object|null subdivisions
 */
class Result extends BaseObject {
    
    
    private $_result;


    public function __construct($result, $config = [])
    {
        $this->_result = $result;
        parent::__construct($config);
    }
    
    /*
     * @param array $data
     * @return object or null
     */
    protected function getCity() {
        return $this->_result;
//        return new City($this->_result['city']);
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
