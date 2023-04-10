<?php

namespace iyzicotaksit\ProductTabs\Model\Config;

use Magento\Config\Model\Config\CommentInterface;
use Magento\Framework\Phrase;

/**
 * Class IyzicowebhhokUrlComment
 *
 * @package iyzicotaksit\ProductTabs\Model\Config
 */
class comment implements CommentInterface
{

    /**
     * @param  string $elementValue
     * @return Phrase|string
     */
    public function getCommentText($elementValue)
    {
      $htmlReturn = '<a href="https://www.webydu.com/">Contact -> https://www.webydu.com/</a>';
        return $htmlReturn;
    }
}
