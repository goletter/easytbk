<?php
namespace Goletter\EasyTBK\SuNing\Request\Netalliance;

use Goletter\EasyTBK\SuNing\SelectSuningRequest;
use Goletter\EasyTBK\SuNing\RequestCheckUtil;

/**
 * 苏宁开放平台接口 -
 *
 * @author suning
 * @date   2019-5-29
 */
class CustnumandcommdityQueryRequest extends SelectSuningRequest
{


    public function getApiMethodName()
    {
        return 'suning.netalliance.custnumandcommdity.query';
    }

    public function getApiParams()
    {
        return $this->apiParams;
    }

    public function check($pageNoMin = 1, $pageNoMax = 99999, $pageSizeMin = 10, $pageSizeMax = 50)
    {
        RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
        RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
    }

    public function getBizName()
    {
        return "queryCustnumandcommdity";
    }

}

?>
