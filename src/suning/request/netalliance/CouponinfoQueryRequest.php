<?php
namespace Goletter\EasyTBK\suning\request\netalliance;

use Goletter\EasyTBK\suning\SuningRequest;
use Goletter\EasyTBK\suning\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-8-1
 */
class CouponinfoQueryRequest  extends SuningRequest{

	/**
	 *
	 */
	private $quanUrl;

	public function getQuanUrl() {
		return $this->quanUrl;
	}

	public function setQuanUrl($quanUrl) {
		$this->quanUrl = $quanUrl;
		$this->apiParams["quanUrl"] = $quanUrl;
	}

	public function getApiMethodName(){
		return 'suning.netalliance.couponinfo.query';
	}

	public function getApiParams(){
		return $this->apiParams;
	}

	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->quanUrl, 'quanUrl');
	}

	public function getBizName(){
		return "queryCouponinfo";
	}

}

?>