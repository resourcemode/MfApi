<?php
namespace Application\Model;

use Application\Model\Location;
use ZnZend\Db\AbstractMapper;

class LocationMapper extends AbstractMapper
{
    protected $table = 'location';

    protected $resultSetClass = '\\Application\\Model\\Location';

    protected $primaryKey = 'loc_id';

    protected $activeRowState = array(
        'loc_isdeleted' => 0
    );

    protected $deletedRowState = array(
        'loc_isdeleted' => 1
    );
}
