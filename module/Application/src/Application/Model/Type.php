<?php
namespace Application\Model;

use DateTime;
use Zend\Form\Annotation;
use ZnZend\Db\AbstractEntity;

/**
 * @Annotation\Name("Type")
 * @Annotation\Type("ZnZend\Form\Form")
 * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ArraySerializable")
 */
class Type extends AbstractEntity
{
    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_singularNoun = 'type';

    /**
     * @Annotation\Exclude()
     * @var string
     */
    protected $_pluralNoun = 'types';

    /**
     * @Annotation\Exclude()
     * @var array
     */
    protected static $_mapGettersColumns = array(
        'getId' => 'type_id',
        'getName' => 'type_name',
        'isDeleted' => false,
        'getCreated' => 'type_created',
        'getCreator' => 'bus_creator',
        'getUpdated' => 'type_updated',
        'getUpdator' => 'type_updator',
        'getIsdeleted' => 'type_isdeleted'
    );

    /**
     * @Annotation\Exclude()
     */
    protected $type_id = null;

    /**
     * @Annotation\Name("type_name")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"type_name", "placeholder":"Name",
     * "maxlength":100})
     * @Annotation\Options({"label":"Name"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $type_name = null;

    /**
     * @Annotation\Name("type_created")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"type_created", "placeholder":"Created"})
     * @Annotation\Options({"label":"Created"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $type_created = null;

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
     * @Annotation\Name("type_updated")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"type_updated", "placeholder":"Updated"})
     * @Annotation\Options({"label":"Updated"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $type_updated = null;

    /**
     * @Annotation\Name("type_updator")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"type_updator", "placeholder":"Updator",
     * "maxlength":100})
     * @Annotation\Options({"label":"Updator"})
     * @Annotation\Filter({"name":"StringTrim"})
     */
    protected $type_updator = 'Application';

    /**
     * @Annotation\Name("type_isdeleted")
     * @Annotation\Required(false)
     * @Annotation\Type("Zend\Form\Element\Text")
     * @Annotation\Attributes({"id":"type_isdeleted", "placeholder":"Isdeleted"})
     * @Annotation\Options({"label":"Isdeleted"})
     * @Annotation\Filter({"name":"StringTrim"})
     * @Annotation\Validator({"name":"Digits"})
     */
    protected $type_isdeleted = 0;

    /**
     * Set created
     *
     * @param null|DateTime $value
     * @return Type
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
     * @return Type
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
     * @return Type
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
     * @return Type
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
     * @return Type
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
