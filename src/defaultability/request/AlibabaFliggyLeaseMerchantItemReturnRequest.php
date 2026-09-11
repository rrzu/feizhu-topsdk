<?php
namespace FeiZhu\TopSdk\Defaultability\Request;
use FeiZhu\TopSdk\TopUtil;
use FeiZhu\TopSdk\Defaultability\Domain\AlibabaFliggyLeaseMerchantItemReturnReturnItemRequest;

class AlibabaFliggyLeaseMerchantItemReturnRequest {

    /**
        商家代替用户归还请求
     **/
    private $returnItemRequest;


    public function getReturnItemRequest() : AlibabaFliggyLeaseMerchantItemReturnReturnItemRequest{
        return $this->returnItemRequest;
    }

    public function setReturnItemRequest(AlibabaFliggyLeaseMerchantItemReturnReturnItemRequest $returnItemRequest){
        $this->returnItemRequest = $returnItemRequest;
    }


    public function getApiName() : string {
        return "alibaba.fliggy.lease.merchant.item.return";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->returnItemRequest)) {
            $requestParam["return_item_request"] = TopUtil::convertStruct($this->returnItemRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

