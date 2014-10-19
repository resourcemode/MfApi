<?php
namespace Application\Model;

use DateTime;
use Zend\Form\Annotation;
use ZnZend\Db\AbstractEntity;

/**
 * @Annotation\Name("Bus")
 * @Annotation\Type("ZnZend\Form\Form")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ArraySerializable")
 */
class Bus extends AbstractEntity
{
    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_singularNoun = 'bus';

    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_pluralNoun = 'buses';

    /**
     * @Annotation\Exclude()
     * @var array
     */
    protected static $_mapGettersColumns = array(
        'getId' => 'bus_id',
        'getName' => 'bus_name',
        'getLocationName' => 'location_name',
        'getDistance' => 'location_distance',
        'isDeleted' => false,
        'getNumber' => 'bus_number',
        'getType' => 'bus_type',
        'getInterval' => 'bus_interval',
        'getLocation' => 'bus_location',
        'getSpeed' => 'bus_speed',
        'getCreated' => 'bus_created',
        'getCreator' => 'bus_creator',
        'getUpdated' => 'bus_updated',
        'getUpdator' => 'bus_updator',
        'getIsdeleted' => 'bus_isdeleted'
    );

    /**
     * @Annotation\Exclude()
     */
    protected $bus_id = null;

    /**
     * @Annotation\Name("bus_name")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_name", "placeholder":"Name", "maxlength":100})
     * @Annotation\Options({"label":"Name"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $bus_name = null;

    /**
     * @Annotation\Name("bus_number")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_number", "placeholder":"Number"})
     * @Annotation\Options({"label":"Number"})
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"Digits"})
     */
    protected $bus_number = 0;

    /**
     * @Annotation\Name("bus_type")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_type", "placeholder":"Type"})
     * @Annotation\Options({"label":"Type"})
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"Digits"})
     */
    protected $bus_type = 0;

    /**
     * @Annotation\Name("bus_interval")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_interval", "placeholder":"Interval"})
     * @Annotation\Options({"label":"Interval"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $bus_interval = null;

    /**
     * @Annotation\Name("bus_location")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_location", "placeholder":"Location"})
     * @Annotation\Options({"label":"Location"})
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"Digits"})
     */
    protected $bus_location = 0;
    
    /**
     * left join (added loc_name)
     */
    protected $location_name = null;

    /**
     * left join (added loc_distance)
     */
    protected $location_distance = null;

    /**
     * @Annotation\Name("bus_speed")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_speed", "placeholder":"speed"})
     * @Annotation\Options({"label":"Speed"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $bus_speed = null;

    /**
     * @Annotation\Name("bus_created")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_created", "placeholder":"Created"})
     * @Annotation\Options({"label":"Created"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $bus_created = null;

    /**
     * @Annotation\Name("bus_creator")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_creator", "placeholder":"Creator",
     * "maxlength":100})
     * @Annotation\Options({"label":"Creator"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $bus_creator = 'Application';

    /**
     * @Annotation\Name("bus_updated")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_updated", "placeholder":"Updated"})
     * @Annotation\Options({"label":"Updated"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $bus_updated = null;

    /**
     * @Annotation\Name("bus_updator")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_updator", "placeholder":"Updator",
     * "maxlength":100})
     * @Annotation\Options({"label":"Updator"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $bus_updator = 'Application';

    /**
     * @Annotation\Name("bus_isdeleted")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"bus_isdeleted", "placeholder":"Isdeleted"})
     * @Annotation\Options({"label":"Isdeleted"})
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"Digits"})
     */
    protected $bus_isdeleted = 0;

    /**
     * Set number
     *
     * @param null|int $value
     * @return Bus
     */
    public function setNumber($value)
    {
        return $this->set($value, 'int');
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->get();
    }

    public function getLocationName() 
    {
        return $this->get();
    }

    public function setLocationName($value)
    {
        return $this->set($value);
    }

    public function setDistance($value)
    {
        return $this->set($value);
    }

    public function getDistance()
    {
        return $this->get();
    }

    /**
     * Set type
     *
     * @param null|int $value
     * @return Bus
     */
    public function setType($value)
    {
        return $this->set($value, 'int');
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->get();
    }

    /**
     * Set interval
     *
     * @param null|string $value
     * @return Bus
     */
    public function setInterval($value)
    {
        return $this->set($value);
    }

    /**
     * Get interval
     *
     * @return string
     */
    public function getInterval()
    {
        return $this->get();
    }

    /**
     * Set location
     *
     * @param null|int $value
     * @return Bus
     */
    public function setLocation($value)
    {
        return $this->set($value, 'int');
    }

    /**
     * Get location
     *
     * @return int
     */
    public function getLocation()
    {
        return $this->get();
    }

    /**
     * Set speed
     *
     * @param null|string $value
     * @return Bus
     */
    public function setSpeed($value)
    {
        return $this->set($value);
    }

    /**
     * Get speed
     *
     * @return string
     */
    public function getSpeed()
    {
        return $this->get();
    }

    /**
     * Set created
     *
     * @param null|DateTime $value
     * @return Bus
     */
    public function setCreated($value)
    {
        return $this->set($value, 'DateTime');
    }

    /**
     * Get created
     *
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->get();
    }

    /**
     * Set creator
     *
     * @param null|string $value
     * @return Bus
     */
    public function setCreator($value)
    {
        return $this->set($value);
    }

    /**
     * Get creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->get();
    }

    /**
     * Set updated
     *
     * @param null|DateTime $value
     * @return Bus
     */
    public function setUpdated($value)
    {
        return $this->set($value, 'DateTime');
    }

    /**
     * Get updated
     *
     * @return DateTime
     */
    public function getUpdated()
    {
        return $this->get();
    }

    /**
     * Set updator
     *
     * @param null|string $value
     * @return Bus
     */
    public function setUpdator($value)
    {
        return $this->set($value);
    }

    /**
     * Get updator
     *
     * @return string
     */
    public function getUpdator()
    {
        return $this->get();
    }

    /**
     * Set isdeleted
     *
     * @param null|int $value
     * @return Bus
     */
    public function setIsdeleted($value)
    {
        return $this->set($value, 'int');
    }

    /**
     * Get isdeleted
     *
     * @return int
     */
    public function getIsdeleted()
    {
        return $this->get();
    }
}
