<?php
namespace FeiZhu\TopSdk\Ability347\Request;
use FeiZhu\TopSdk\TopUtil;

class TaobaoXhotelBnbpriceAppealRequest {

    /**
        页码
     **/
    private $pageNo;

    /**
        页大小
     **/
    private $pageSize;

    /**
        唯一值
     **/
    private $tableCode;


    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getTableCode() : string{
        return $this->tableCode;
    }

    public function setTableCode(string $tableCode){
        $this->tableCode = $tableCode;
    }


    public function getApiName() : string {
        return "taobao.xhotel.bnbprice.appeal";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->tableCode)) {
            $requestParam["table_code"] = TopUtil::convertBasic($this->tableCode);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

