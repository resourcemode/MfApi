<?php
namespace Application\Model;

use DateTime;
use Zend\Form\Annotation;
use ZnZend\Db\AbstractEntity;

/**
 * @Annotation\Name("Location")
 * @Annotation\Type("ZnZend\Form\Form")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ArraySerializable")
 */
class Location extends AbstractEntity
{
    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_singularNoun = 'location';

    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_pluralNoun = 'locations';

    /**
     * @Annotation\Exclude()
     * @var array
     */
    protected static $_mapGettersColumns = array(
        'getId' => 'loc_id',
        'getName' => 'loc_name',
        'getDistance' => 'loc_distance',
        'isDeleted' => false,
        'getCreated' => 'loc_created',
        'getCreator' => 'loc_creator',
        'getUpdated' => 'loc_updated',
        'getUpdator' => 'loc_updator',
        'getIsdeleted' => 'loc_isdeleted'
    );

    /**
     * @Annotation\Exclude()
     */
    protected $loc_id = null;

    /**
     * @Annotation\Name("loc_name")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"loc_name", "placeholder":"Name", "maxlength":255})
     * @Annotation\Options({"label":"Name"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $loc_name = null;

    /**
     * @Annotation\Name("loc_distance")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"loc_distance", "placeholder":"Distance"})
     * @Annotation\Options({"label":"Distance"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $loc_distance = null;

    /**
     * @Annotation\Name("loc_created")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"loc_created", "placeholder":"Created"})
     * @Annotation\Options({"label":"Created"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $loc_created = null;

    /**
     * @Annotation\Name("loc_creator")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"loc_creator", "placeholder":"Creator",
     * "maxlength":100})
     * @Annotation\Options({"label":"Creator"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $loc_creator = 'Application';

    /**
     * @Annotation\Name("loc_updated")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"loc_updated", "placeholder":"Updated"})
     * @Annotation\Options({"label":"Updated"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $loc_updated = null;

    /**
     * @Annotation\Name("loc_updator")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"loc_updator", "placeholder":"Updator",
     * "maxlength":100})
     * @Annotation\Options({"label":"Updator"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $loc_updator = 'Application';

    /**
     * @Annotation\Name("loc_isdeleted")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"loc_isdeleted", "placeholder":"Isdeleted"})
     * @Annotation\Options({"label":"Isdeleted"})
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"Digits"})
     */
    protected $loc_isdeleted = 0;

    public function setDistance($value)
    {
        return $this->set($value);
    }

    public function getDistance()
    {
        return $this->get();
    }

    /**
     * Set created
     *
     * @param null| $value
     * @return Location
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
     * @return Location
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
     * @return Location
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
     * @return Location
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
     * @return Location
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
