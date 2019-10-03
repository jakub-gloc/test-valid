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
    public function __construct(array $config = null)
    {

        if(!empty($config['LabValidator']) && is_array($config['LabValidator'])) {
            $this->config = $config['LabValidator'];
            $this->isValid();
        }
    }


    protected $config;

    public function isValid()
    {
        if(empty($this->config['apiKey'])){
            throw new ConfigException();
        }
        if(empty($this->config['host'])){
            throw new ConfigException();
        }

    }





}