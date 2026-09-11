<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbSojournUnbindRequest {

    /**
        民宿卖家房型ID
     **/
    private $bnbRid;

    /**
        民宿标准酒店ID
     **/
    private $bnbShid;

    /**
        旅居标准酒店ID
     **/
    private $sojournShid;

    /**
        旅居卖家房型ID
     **/
    private $sojournRid;


    public function getBnbRid() : int{
        return $this->bnbRid;
    }

    public function setBnbRid(int $bnbRid){
        $this->bnbRid = $bnbRid;
    }

    public function getBnbShid() : int{
        return $this->bnbShid;
    }

    public function setBnbShid(int $bnbShid){
        $this->bnbShid = $bnbShid;
    }

    public function getSojournShid() : int{
        return $this->sojournShid;
    }

    public function setSojournShid(int $sojournShid){
        $this->sojournShid = $sojournShid;
    }

    public function getSojournRid() : int{
        return $this->sojournRid;
    }

    public function setSojournRid(int $sojournRid){
        $this->sojournRid = $sojournRid;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnb.sojourn.unbind";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bnbRid)) {
            $requestParam["bnb_rid"] = TopUtil::convertBasic($this->bnbRid);
        }

        if (!TopUtil::checkEmpty($this->bnbShid)) {
            $requestParam["bnb_shid"] = TopUtil::convertBasic($this->bnbShid);
        }

        if (!TopUtil::checkEmpty($this->sojournShid)) {
            $requestParam["sojourn_shid"] = TopUtil::convertBasic($this->sojournShid);
        }

        if (!TopUtil::checkEmpty($this->sojournRid)) {
            $requestParam["sojourn_rid"] = TopUtil::convertBasic($this->sojournRid);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

