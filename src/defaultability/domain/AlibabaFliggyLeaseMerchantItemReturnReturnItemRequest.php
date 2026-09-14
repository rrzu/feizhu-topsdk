<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseMerchantItemReturnReturnItemRequest {

    /**
        飞猪订单id
     **/
    public $order_id;

    /**
        归还类型：normal-正常归还，exception-无法归还
     **/
    public $return_type;

    /**
        归还物流单号，正常归还时必填
     **/
    public $return_logistics_no;

    /**
        归还物流公司编码，正常归还时必填
     **/
    public $return_logistics_company_code;

    /**
        凭证信息，最多8张，格式：[{"type":"image","url":""},{"type":"video","url":""}]
     **/
    public $credential_info;


    public function getOrderId() : string{
        return $this->order_id;
    }

    public function setOrderId(string $orderId){
        $this->order_id = $orderId;
    }

    public function getReturnType() : string{
        return $this->return_type;
    }

    public function setReturnType(string $returnType){
        $this->return_type = $returnType;
    }

    public function getReturnLogisticsNo() : string{
        return $this->return_logistics_no;
    }

    public function setReturnLogisticsNo(string $returnLogisticsNo){
        $this->return_logistics_no = $returnLogisticsNo;
    }

    public function getReturnLogisticsCompanyCode() : string{
        return $this->return_logistics_company_code;
    }

    public function setReturnLogisticsCompanyCode(string $returnLogisticsCompanyCode){
        $this->return_logistics_company_code = $returnLogisticsCompanyCode;
    }

    public function getCredentialInfo() : array{
        return $this->credential_info;
    }

    public function setCredentialInfo(array $credentialInfo){
        $this->credential_info = $credentialInfo;
    }


}

