<?php
namespace Midi\Koala\Replaying;

/**
 * Autogenerated by Disf-CodeGen (0.1.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */    

/** 
    * @property string IP 
    * @property int Port 
*/ 
class Peer extends \ArrayObject {

    public static $SCHEMA = array( 
        'disfSchemaFormatVersion' => 1003,
        'isUnion' => false,
        'classObject' => Peer::class,
        'className' => 'Midi\Koala\Replaying\Peer',
        'annotations' => array(),
        'fields' => array(
            "IP" => array(
                "fieldId" => 1, 
                "thriftType" => 'STRING',
                "isRequired" => False,
                "annotations" => array(),
            ),
            "Port" => array(
                "fieldId" => 2, 
                "thriftType" => 'I16',
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

        if(isset($array["IP"])) { 
            $this->setIP($array["IP"]);
        }

        if(isset($array["Port"])) { 
            $this->setPort($array["Port"]);
        }

    }

    /** 
     * @return string 
    */ 
    public function getIP()/* : string */ {
        return \Midi\Koala\Common\TypeConverter::to_string($this["IP"]);
    }

    /** 
     * @param string $val 
    */ 
    public function setIP(/* string */ $val) {
        $this["IP"] = \Midi\Koala\Common\TypeConverter::to_string($val);
    }

    /** 
     * @return int 
    */ 
    public function getPort()/* : int */ {
        return \Midi\Koala\Common\TypeConverter::to_int($this["Port"]);
    }

    /** 
     * @param int $val 
    */ 
    public function setPort(/* int */ $val) {
        $this["Port"] = \Midi\Koala\Common\TypeConverter::to_int($val);
    }
}

/* THRIFT IDL
namespace php koala

struct Peer {
    1: string IP
    2: i16    Port
}
*/