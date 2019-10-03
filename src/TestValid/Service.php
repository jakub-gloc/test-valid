<?php
/**
 * Created by PhpStorm.
 * User: glocj
 * Date: 03.10.2019
 * Time: 10:53
 */

namespace TestValid;


use TestValid\Exeptation\ConfigException;

class Service
{


    static $configArray = [];

    public function __construct(array $config = null)
    {
        if(!empty($config['LabValidator']) && is_array($config['LabValidator'])) {
            try{
                $this->setConfig($config['LabValidator']);
            }catch (ConfigException $exception){
                echo 'Error: '. $exception->getMessage();
            }
        }
    }


    public function setConfig($config)
    {
        if(!empty($config['apiKey'])){
            self::$configArray['apiKey'] = $config['apiKey'];
        }
        if(!empty($config['host'])){
            self::$configArray['host'] = $config['host'];
        }
        $this->isValidConfig();

    }

    public function isValidConfig()
    {
        if(empty(self::$configArray['apiKey'])){
            throw new ConfigException();
        }
        if(empty(self::$configArray['host'])){
            throw new ConfigException();
        }

    }







}