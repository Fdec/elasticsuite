<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Smile Searchandising Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile_ElasticSuiteTracker
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\ElasticSuiteTracker\Block\Variables;

/**
 * Abstract block for tracker, inherited by all other blocks
 *
 * @category Smile
 * @package  Smile_ElasticSuiteTracker
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
class AbstractBlock extends \Magento\Framework\View\Element\Template
{
    /**
     * JSON Helper
     *
     * @var \Magento\Framework\Json\Helper\Data
     */
    protected $jsonHelper;

    /**
     * Generic tracker helper
     *
     * @var \Smile\ElasticSuiteTracker\Helper\Data
     */
    protected $trackerHelper;

    /**
     * Magento Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $registry;

    /**
     * PHP Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context $context       App context
     * @param \Magento\Framework\Json\Helper\Data              $jsonHelper    The Magento's JSON Helper
     * @param \Smile\ElasticSuiteTracker\Helper\Data           $trackerHelper The Smile Tracker helper
     * @param \Magento\Framework\Registry                      $registry      The Magento registry
     * @param array                                            $data          additional datas
     *
     * @return AbstractBlock
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Json\Helper\Data $jsonHelper,
        \Smile\ElasticSuiteTracker\Helper\Data $trackerHelper,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $data);

        $this->jsonHelper    = $jsonHelper;
        $this->trackerHelper = $trackerHelper;
        $this->registry      = $registry;
    }


    /**
     * Retrieve the Json Helper
     *
     * @return \Magento\Framework\Json\Helper\Data
     */
    protected function getJsonHelper()
    {
        return $this->jsonHelper;
    }
}
