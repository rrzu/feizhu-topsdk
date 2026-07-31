<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseItemQueryQueryItemRequest;

class AlibabaFliggyLeaseItemQueryRequest {

    /**
        查询商品请求
     **/
    private $queryItemRequest;


    public function getQueryItemRequest() : AlibabaFliggyLeaseItemQueryQueryItemRequest{
        return $this->queryItemRequest;
    }

    public function setQueryItemRequest(AlibabaFliggyLeaseItemQueryQueryItemRequest $queryItemRequest){
        $this->queryItemRequest = $queryItemRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.item.query";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->queryItemRequest)) {
            $requestParam["query_item_request"] = TopUtil::convertStruct($this->queryItemRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

