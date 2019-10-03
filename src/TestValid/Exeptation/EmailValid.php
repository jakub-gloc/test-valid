<?php
/**
 * Created by PhpStorm.
 * User: glocj
 * Date: 03.10.2019
 * Time: 11:29
 */

namespace TestValid\Exeptation;


use TestValid\Service;
use Zend\Validator\AbstractValidator;

class EmailValid extends AbstractValidator
{


    protected $service;


    public function __construct(array $config = null)
    {
        parent::__construct();
        $this->service = new Service($config);

    }

    public function isValid($value)
    {
        return true;
    }

}