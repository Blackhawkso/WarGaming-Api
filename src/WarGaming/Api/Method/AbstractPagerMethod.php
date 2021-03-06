<?php

/**
 * This file is part of the WarGaming API package
 *
 * (c) Vitaliy Zhuk
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code
 */

namespace WarGaming\Api\Method;

use Symfony\Component\Validator\Constraints as Assert;
use WarGaming\Api\Annotation\FormData;

/**
 * Abstract class for control pager method
 *
 * @author Vitaliy Zhuk <zhuk2205@gmail.com>
 */
abstract class AbstractPagerMethod extends AbstractMethod implements PagerMethodInterface
{
    /**
     * @var int
     *
     * @Assert\NotBlank
     * @Assert\Range(
     *      min = 1,
     *      max = 100
     * )
     *
     * @FormData(name="limit")
     */
    public $limit = 100;

    /**
     * @var int
     *
     * @Assert\NotBlank
     * @Assert\Range(
     *      min = 1
     * )
     *
     * @FormData(name="page_no")
     */
    public $page = 1;

    /**
     * {@inheritDoc}
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * {@inheritDoc}
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getPage()
    {
        return $this->page;
    }
}
