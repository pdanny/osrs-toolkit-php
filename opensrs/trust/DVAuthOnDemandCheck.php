<?php

namespace opensrs\trust;

use opensrs\Base;

class DVAuthOnDemandCheck extends Base
{
    protected $action = 'update_dv_auth';
    protected $object = 'trust_service';

    private $_formatHolder = '';
    public $resultFullRaw;
    public $resultRaw;
    public $resultFullFormatted;
    public $resultFormatted;

    public $requiredFields = array(
        'attributes' => array(
            'order_id',
            'dv_auth_on_demand_check',
          ),
    );

    public function __construct($formatString, $dataObject, $returnFullResponse = null)
    {
        parent::__construct();

        $this->_formatHolder = $formatString;

        $this->_validateObject($dataObject);

        $this->send($dataObject, $returnFullResponse);
    }

    public function __destruct()
    {
        parent::__destruct();
    }
}
