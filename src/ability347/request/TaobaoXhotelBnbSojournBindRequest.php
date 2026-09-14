<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbSojournBindRequest {

    /**
        民宿卖家房型ID
     **/
    private $bnbRid;

    /**
        民宿标准酒店ID
     **/
    private $bnbShid;

    /**
        旅居房源标准酒店ID
     **/
    private $sojournShid;

    /**
        旅居房源卖家房型ID
     **/
    private $sojournRid;

    /**
        旅居房源卖家门店ID
     **/
    private $sojournHid;

    /**
        旅居房源标准房型ID
     **/
    private $sojournSrid;

    /**
        民宿卖家房型ID
     **/
    private $bnbSrid;

    /**
        民宿卖家门店ID
     **/
    private $bnbHid;

    /**
        小猪门店ID
     **/
    private $luId;


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

    public function getSojournHid() : int{
        return $this->sojournHid;
    }

    public function setSojournHid(int $sojournHid){
        $this->sojournHid = $sojournHid;
    }

    public function getSojournSrid() : int{
        return $this->sojournSrid;
    }

    public function setSojournSrid(int $sojournSrid){
        $this->sojournSrid = $sojournSrid;
    }

    public function getBnbSrid() : int{
        return $this->bnbSrid;
    }

    public function setBnbSrid(int $bnbSrid){
        $this->bnbSrid = $bnbSrid;
    }

    public function getBnbHid() : int{
        return $this->bnbHid;
    }

    public function setBnbHid(int $bnbHid){
        $this->bnbHid = $bnbHid;
    }

    public function getLuId() : int{
        return $this->luId;
    }

    public function setLuId(int $luId){
        $this->luId = $luId;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnb.sojourn.bind";
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

        if (!TopUtil::checkEmpty($this->sojournHid)) {
            $requestParam["sojourn_hid"] = TopUtil::convertBasic($this->sojournHid);
        }

        if (!TopUtil::checkEmpty($this->sojournSrid)) {
            $requestParam["sojourn_srid"] = TopUtil::convertBasic($this->sojournSrid);
        }

        if (!TopUtil::checkEmpty($this->bnbSrid)) {
            $requestParam["bnb_srid"] = TopUtil::convertBasic($this->bnbSrid);
        }

        if (!TopUtil::checkEmpty($this->bnbHid)) {
            $requestParam["bnb_hid"] = TopUtil::convertBasic($this->bnbHid);
        }

        if (!TopUtil::checkEmpty($this->luId)) {
            $requestParam["lu_id"] = TopUtil::convertBasic($this->luId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

