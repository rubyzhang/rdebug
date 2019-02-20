<?php
namespace Midi\Koala\Replayed;

/**
 * Autogenerated by Disf-CodeGen (0.1.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */    

/** 
    * @property string ActionType 
    * @property int OccurredAt 
    * @property string ActionId 
    * @property string OriginalResponse 
    * @property string Response 
*/ 
class ReturnInbound extends \ArrayObject {

    public static $SCHEMA = array( 
        'disfSchemaFormatVersion' => 1003,
        'isUnion' => false,
        'classObject' => ReturnInbound::class,
        'className' => 'Midi\Koala\Replayed\ReturnInbound',
        'annotations' => array(),
        'fields' => array(
            "ActionType" => array(
                "fieldId" => 3, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "OccurredAt" => array(
                "fieldId" => 2, 
                "thriftType" => 'I64',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "ActionId" => array(
                "fieldId" => 1, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "OriginalResponse" => array(
                "fieldId" => 4, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "Response" => array(
                "fieldId" => 5, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
        ),
    );

    public function __construct($array = null) 
    {
        if (!isset($array)) { 
            parent::__construct(array(), \ArrayObject::ARRAY_AS_PROPS);
            return;
        }

        parent::__construct($array, \ArrayObject::ARRAY_AS_PROPS); 

        if(isset($array["ActionType"])) { 
            $this->setActionType($array["ActionType"]);
        }

        if(isset($array["OccurredAt"])) { 
            $this->setOccurredAt($array["OccurredAt"]);
        }

        if(isset($array["ActionId"])) { 
            $this->setActionId($array["ActionId"]);
        }

        if(isset($array["OriginalResponse"])) { 
            $this->setOriginalResponse($array["OriginalResponse"]);
        }

        if(isset($array["Response"])) { 
            $this->setResponse($array["Response"]);
        }

    }

    /** 
     * @return string 
    */ 
    public function getActionType()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["ActionType"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setActionType(/* string */ $val) {
        $this["ActionType"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return int 
    */ 
    public function getOccurredAt()/* : int */ {
        return \Midi\Koala\Common\TypeConverter::to_int($this["OccurredAt"]);
    }

    /** 
     * @param int $val 
    */ 
    public function setOccurredAt(/* int */ $val) {
        $this["OccurredAt"] = \Midi\Koala\Common\TypeConverter::to_int($val);
    }

    /** 
     * @return string 
    */ 
    public function getActionId()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["ActionId"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setActionId(/* string */ $val) {
        $this["ActionId"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return string 
    */ 
    public function getOriginalResponse()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["OriginalResponse"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setOriginalResponse(/* string */ $val) {
        $this["OriginalResponse"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return string 
    */ 
    public function getResponse()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["Response"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setResponse(/* string */ $val) {
        $this["Response"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }
}

/* THRIFT IDL
namespace php koala.replayed

struct ReturnInbound {
    1: string ActionId
    2: i64 OccurredAt
    3: string ActionType
    4: binary OriginalResponse
    5: binary Response
}
*/