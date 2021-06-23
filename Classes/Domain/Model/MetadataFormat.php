<?php

/**
 * (c) Kitodo. Key to digital objects e.V. <contact@kitodo.org>
 *
 * This file is part of the Kitodo and TYPO3 projects.
 *
 * @license GNU General Public License version 3 or later.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Kitodo\Dlf\Domain\Model;

use Kitodo\Dlf\Domain\Model\Format;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Metadata format entity class for the 'dlf' extension
 *
 * @author Beatrycze Volk <beatrycze.volk@slub-dresden.de>
 * @package TYPO3
 * @subpackage dlf
 * @access public
 */
class MetadataFormat extends AbstractEntity
{
    /**
     * The metadata format parent id
     *
     * @var int
     * @access protected
     */
    protected $parentId;

    /**
     * The metadata format encoded property
     *
     * @var Format
     * @access protected
     */
    protected $encoded;

    /**
     * The metadata format xpath
     *
     * @var string
     * @access protected
     */
    protected $xpath = '';

    /**
     * The metadata format xpath for sorting
     *
     * @var string
     * @access protected
     */
    protected $xpathSorting = '';

    /**
     * The information if metadata format is mandatory field
     *
     * @var int
     * @access protected
     */
    protected $mandatory = 0;

    /**
     * Initializes the metadata format entity.
     *
     * @access public
     * 
     * @param int $$parentId: The metadata format parent id
     * @param int $encoded: The metadata format encoded property
     * @param string $xpath: The metadata format xpath
     * @param string $xpathSorting: The metadata format xpath for sorting
     * @param int $mandatory: The information if metadata format is mandatory field
     *
     * @return void
     */
    //TODO: check which values actually are needed as constructor parameters
    public function __construct(
        int $parentId = null,
        int $encoded = null,
        string $xpath = '',
        string $xpathSorting = '',
        int $mandatory = 0)
    {
        $this->setParentId($parentId);
        $this->setEncoded($encoded);
        $this->setXpath($xpath);
        $this->setXpathSorting($xpathSorting);
        $this->setMandatory($mandatory);
    }

    /**
     * Get the metadata format parent id
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set the metadata format parent id
     *
     * @param int $parentId The metadata format parent id
     *
     * @return void
     */
    public function setParentId(int $parentId)
    {
        $this->parentId = $parentId;
    }

    /**
     * Get the metadata format encoded property
     *
     * @return Format
     */
    public function getEncoded()
    {
        return $this->encoded;
    }

    /**
     * Set the metadata format encoded property
     *
     * @param Format $encoded The metadata format encoded property
     *
     * @return void
     */
    public function setEncoded(Format $encoded)
    {
        $this->encoded = $encoded;
    }

    /**
     * Get the metadata format xpath
     *
     * @return string
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * Set the metadata format xpath
     *
     * @param string $xpath The metadata format xpath
     *
     * @return void
     */
    public function setXpath(string $xpath)
    {
        $this->xpath = $xpath;
    }

    /**
     * Get the metadata format xpath for sorting
     *
     * @return string
     */
    public function getXpathSorting()
    {
        return $this->xpathSorting;
    }

    /**
     * Set the metadata format xpath for sorting
     *
     * @param string $xpathSorting The metadata format xpath for sorting
     *
     * @return void
     */
    public function setXpathSorting(string $xpathSorting)
    {
        $this->xpathSorting = $xpathSorting;
    }

    /**
     * Get the information if metadata format is mandatory field
     *
     * @return int
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Set the information if metadata format is mandatory field
     *
     * @param int $mandatory The information if metadata format is mandatory field
     *
     * @return void
     */
    public function setMandatory(int $mandatory)
    {
        $this->mandatory = $mandatory;
    }
}
