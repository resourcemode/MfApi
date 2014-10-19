<?php
namespace Application\Model;

use Application\Model\Bus;
use ZnZend\Db\AbstractMapper;

class BusMapper extends AbstractMapper
{
    protected $table = 'bus';

    protected $resultSetClass = '\\Application\\Model\\Bus';

    protected $primaryKey = 'bus_id';

    protected $activeRowState = array(
        'bus_isdeleted' => 0
    );

    protected $deletedRowState = array(
        'bus_isdeleted' => 1
    );

    public function getBaseSelect() 
    {
        $select = parent::getBaseSelect();
         $select->join( 
                 'location',
                 'location.loc_id = bus.bus_location',
                 array('location_name' => 'loc_name', 'location_distance' => 'loc_distance'),
                 $select::JOIN_LEFT
            )
            ->order(array('bus_id DESC'));
			
        return $select;
    }
}
