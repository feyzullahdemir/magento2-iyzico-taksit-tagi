<?php

namespace Iyzipay\Model;

use Iyzipay\IyzipayResource;
use Iyzipay\Model\Mapper\IyzipayResourceMapper;
use Iyzipay\Options;

class Apiiyzicotaksit extends IyzipayResource
{
    public static function retrieve(Options $options)
    {
        $rawResult = parent::httpClient()->get($options->getBaseUrl() . "/payment/iyzicotaksit");
        return IyzipayResourceMapper::create($rawResult)->jsonDecode()->mapResource(new IyzipayResource());
    }
}
