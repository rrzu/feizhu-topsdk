<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbPromoGetRequest {

    /**
        直连侧rpCode
     **/
    private $ratePlanCode;


    public function getRatePlanCode() : string{
        return $this->ratePlanCode;
    }

    public function setRatePlanCode(string $ratePlanCode){
        $this->ratePlanCode = $ratePlanCode;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnb.promo.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->ratePlanCode)) {
            $requestParam["rate_plan_code"] = TopUtil::convertBasic($this->ratePlanCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

