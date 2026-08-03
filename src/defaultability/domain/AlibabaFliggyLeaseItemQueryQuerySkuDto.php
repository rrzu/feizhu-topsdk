<?php
namespace FeiZhu\TopSdk\Defaultability\Domain;

class AlibabaFliggyLeaseItemQueryQuerySkuDto {

    /**
        飞猪skuId
     **/
    public $sku_id;

    /**
        外部skuId
     **/
    public $out_sku_id;

    /**
        SKU名称
     **/
    public $sku_name;

    /**
        SKU图片
     **/
    public $sku_image;

    /**
        SKU租金价格，单位分（日租金）
     **/
    public $sku_price;

    /**
        商品价值，单位分
     **/
    public $origin_price;

    /**
        租期
     **/
    public $lease_term;

    /**
        发货方式：邮寄/自提/闪送
     **/
    public $shipping_type;

    /**
        租赁方案
     **/
    public $lease_plan;

    /**
        押金，单位分
     **/
    public $deposit;

    /**
        库存数量
     **/
    public $inventory;

    /**
        规格列表，格式[{"key":"","value":""}]
     **/
    public $sku_property;


    public function getSkuId() : int{
        return $this->sku_id;
    }

    public function setSkuId(int $skuId){
        $this->sku_id = $skuId;
    }

    public function getOutSkuId() : string{
        return $this->out_sku_id;
    }

    public function setOutSkuId(string $outSkuId){
        $this->out_sku_id = $outSkuId;
    }

    public function getSkuName() : string{
        return $this->sku_name;
    }

    public function setSkuName(string $skuName){
        $this->sku_name = $skuName;
    }

    public function getSkuImage() : string{
        return $this->sku_image;
    }

    public function setSkuImage(string $skuImage){
        $this->sku_image = $skuImage;
    }

    public function getSkuPrice() : int{
        return $this->sku_price;
    }

    public function setSkuPrice(int $skuPrice){
        $this->sku_price = $skuPrice;
    }

    public function getOriginPrice() : int{
        return $this->origin_price;
    }

    public function setOriginPrice(int $originPrice){
        $this->origin_price = $originPrice;
    }

    public function getLeaseTerm() : int{
        return $this->lease_term;
    }

    public function setLeaseTerm(int $leaseTerm){
        $this->lease_term = $leaseTerm;
    }

    public function getShippingType() : string{
        return $this->shipping_type;
    }

    public function setShippingType(string $shippingType){
        $this->shipping_type = $shippingType;
    }

    public function getLeasePlan() : string{
        return $this->lease_plan;
    }

    public function setLeasePlan(string $leasePlan){
        $this->lease_plan = $leasePlan;
    }

    public function getDeposit() : int{
        return $this->deposit;
    }

    public function setDeposit(int $deposit){
        $this->deposit = $deposit;
    }

    public function getInventory() : int{
        return $this->inventory;
    }

    public function setInventory(int $inventory){
        $this->inventory = $inventory;
    }

    public function getSkuProperty() : string{
        return $this->sku_property;
    }

    public function setSkuProperty(string $skuProperty){
        $this->sku_property = $skuProperty;
    }


}

