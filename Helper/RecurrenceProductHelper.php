<?php

namespace MundiPagg\MundiPagg\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\ObjectManager;
use Mundipagg\Core\Recurrence\Repositories\RepetitionRepository;
use MundiPagg\MundiPagg\Concrete\Magento2CoreSetup;

class RecurrenceProductHelper extends AbstractHelper
{
    /**
     * @var RepetitionRepository
     */
    protected $repetitionRepository;

    public function __construct()
    {
        Magento2CoreSetup::bootstrap();
        $this->repetitionRepository = new RepetitionRepository();
    }

    public function getRepetitionSelected($item)
    {
        $productOptions = $item->getProduct()
            ->getTypeInstance(true)
            ->getOrderOptions($item->getProduct());

        if (empty($productOptions['options'])) {
            return null;
        }

        $optionValue = $this->getOptionValue($productOptions);

        if (empty($optionValue)) {
            return null;
        }

        $repetitionId = $optionValue->getSortOrder();

        $repetition = $this->repetitionRepository->find($repetitionId);
        if ($repetition) {
            return $repetition;
        }

        return null;
    }

    public function getOptionValue($productOptions)
    {
        $optionValue = null;

        foreach ($productOptions['options'] as $option) {
            $objectManager = ObjectManager::getInstance();
            $productOption = $objectManager
                ->get('Magento\Catalog\Model\Product\Option')
                ->load($option['option_id']);

            if (
                !empty($productOption) &&
                $productOption->getSku() === "recurrence"
            ) {
                $optionValue = $objectManager
                    ->get('Magento\Catalog\Model\Product\Option\Value')
                    ->load($option['option_value']);
            }

        }
        return $optionValue;
    }
}