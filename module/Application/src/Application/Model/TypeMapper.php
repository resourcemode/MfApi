<?php
namespace Application\Model;

use Application\Model\Type;
use ZnZend\Db\AbstractMapper;

class TypeMapper extends AbstractMapper
{
    protected $table = 'type';

    protected $resultSetClass = '\\Application\\Model\\Type';

    protected $primaryKey = 'type_id';

    protected $activeRowState = array(
        'type_isdeleted' => 0
    );

    protected $deletedRowState = array(
        'type_isdeleted' => 1
    );
}
