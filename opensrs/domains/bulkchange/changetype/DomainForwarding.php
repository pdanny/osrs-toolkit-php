<?php

namespace opensrs\domains\bulkchange\changetype;

use opensrs\Base;
use opensrs\Exception;

class DomainForwarding extends Base
{
    protected $change_type = 'domain_forwarding';
    protected $checkFields = array(
        'op_type',
        );

    public function __construct()
    {
        parent::__construct();
    }

    public function __deconstruct()
    {
        parent::__deconstruct();
    }

    public function validateChangeType($dataObject)
    {
        foreach ($this->checkFields as $field) {
            if (!isset($dataObject->data->$field) || !$dataObject->data->$field) {
                throw new Exception("oSRS Error - change type is {$this->change_type} but $field is not defined.");
            }
        }

        return true;
    }
}
