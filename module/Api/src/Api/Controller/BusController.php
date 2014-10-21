<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author resourcemode@yahoo.com
 */

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\Paginator\Paginator;
use Application\Model\BusMapper;

class BusController extends AbstractRestfulController
{
    public function indexAction()
    {
        $mapper = new BusMapper();
        $request = $this->getRequest();
        if ($request->isGet()) {
            $id = $this->params('id');
            if ($id) {
                $record = $mapper->fetch($id);
                $data = $record->getArrayCopy();
            } else {
                $records = $mapper->fetchAll();
                $records->setItemCountPerPage(10);
                $data = $this->populate($records);
            }
            $response = $this->getResponseWithHeader()
                ->setContent(json_encode($data));
            return $response;
        }
    }

    public function populate($values)
    {
        if ($values instanceof Paginator) {
            $records = array();
            foreach ($values as $key => $value) {
                $records[] = $value->getArrayCopy();
            }
            return $records;
        }
    }

    public function getResponseWithHeader()
    {
        $response = $this->getResponse();
        $response->getHeaders()
            ->addHeaderLine('Access-Control-Allow-Origin','*')
            ->addHeaderLine('Access-Control-Allow-Methods','POST PUT DELETE GET');
        return $response;
    }
}
