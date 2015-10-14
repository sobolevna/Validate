<?php

namespace PHPixie\Validate;

class Result
{
    protected $builder;
    
    public function __construct($builder)
    {
        $this->builder = $builder;
    }
    
    public function errors()
    {
        return $this->errors;
    }
    
    public function fieldResults()
    {
        return $this->fieldResults;f
    }
    
    public function invalidFieldResults()
    {
        $invalidFields = array();
        
        foreach($this->fieldResults() as $field => $result) {
            if(!$result->isValid()) {
                $invalidFields[$field] => $result;
            }
        }
        
        return $invalidFields;
    }
    
    public function isValid()
    {
        if(!empty($this->errors)) {
            return false;
        }
        
        return count($this->invalidFields()) === 0;
    }
    
    public function addFilterError($filterName)
    {
    
    }
    
    public function addMessageError()
    {
    
    }
    
    public function addError()
    {
    
    }
    
    public function addEmptyError()
    {
        
    }
    
    public function addArrayTypeError()
    {
        
    }
    
    public function addScalarTypeError()
    {
        
    }
}