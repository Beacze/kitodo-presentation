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

use Kitodo\Dlf\Domain\Model\Document;
use Kitodo\Dlf\Domain\Model\Library;
use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;
use TYPO3\CMS\Extbase\Domain\Model\FrontendUserGroup;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Collection entity class for the 'dlf' extension
 *
 * @author Beatrycze Volk <beatrycze.volk@slub-dresden.de>
 * @package TYPO3
 * @subpackage dlf
 * @access public
 */
class Collection extends AbstractEntity
{
    /**
     * The uid of the system language
     *
     * @var int
     * @access protected
     */
    protected $sysLanguageUid = 0;

    /**
     * The language parent
     *
     * @var string
     * @access protected
     */
    protected $l18nParent = 0;

    /**
     * The language diff source
     *
     * @var string
     * @access protected
     */
    protected $l18nDiffSource = 0;

    /**
     * The information if collection is hidden
     *
     * @var int
     * @access protected
     */
    protected $hidden = 0;

    /**
     * The collection frontend groups
     *
     * @var ObjectStorage<FrontendUserGroup>
     * @access protected
     */
    protected $frontendUserGroups;

    /**
     * The collection label
     *
     * @var string
     * @access protected
     */
    protected $label = '';

    /**
     * The index name
     *
     * @var string
     * @access protected
     */
    protected $indexName = '';

    /**
     * The index search
     *
     * @var string
     * @access protected
     */
    protected $indexSearch = '';

    /**
     * The collection OAI name
     *
     * @var string
     * @access protected
     */
    protected $oaiName = '';

    /**
     * The collection description
     *
     * @var string
     * @access protected
     */
    protected $description = '';

    /**
     * The collection thumbnail
     *
     * @var string
     * @access protected
     */
    protected $thumbnail = '';

    /**
     * The collection priority
     *
     * @var int
     * @access protected
     */
    protected $priority = 3;

    /**
     * List? of documents
     *
     * @var ObjectStorage<Document>
     * @access protected
     */
    protected $documents;

    /**
     * The collection owner
     *
     * @var Library
     * @access protected
     */
    protected $owner;

    /**
     * The collection frontend user
     *
     * @var FrontendUser
     * @access protected
     */
    protected $feCruserId;

    /**
     * The collection frontend admin lock
     *
     * @var int
     * @access protected
     */
    protected $feAdminLock = 0;

    /**
     * The collection status
     *
     * @var int
     * @access protected
     */
    protected $status = 0;

    /**
     * Initializes the collection entity.
     *
     * @access public
     * 
     * @param int $sysLanguageUid: The uid of system language
     * @param int $l18nParent: The language parent
     * @param int $l18nDiffSource: The language diff source
     * @param int $hidden: The information if the collection is hidden
     * @param string $label: The collection label
     * @param string $indexName: The index name
     * @param string $indexSearch: The index search
     * @param string $oaiName: The collection OAI name
     * @param string $description: The collection description
     * @param string $thumbnail: The collection thumbnail
     * @param int $priority: The collection priority
     * @param Library $owner: The collection owner
     * @param FrontendUser $feCruserId: The collection frontend user
     * @param int $feAdminLock: The collection admin lock
     * @param int $status: The collection status
     *
     * @return void
     */
    //TODO: check which values actually are needed as constructor parameters
    public function __construct(
        int $sysLanguageUid = 0,
        int $l18nParent = 0,
        int $l18nDiffSource = 0,
        int $hidden = 0,
        string $label = '',
        string $indexName = '',
        string $indexSearch = '',
        string $oaiName = '',
        string $description = '',
        string $thumbnail = '',
        int $priority = 3,
        Library $owner = null,
        FrontendUser $feCruserId = null,
        int $feAdminLock = 0,
        int $status = 0
        )
    {
        $this->setSysLanguageUid($sysLanguageUid);
        $this->setL18nParent($l18nParent);
        $this->setL18nDiffSource($l18nDiffSource);
        $this->setHidden($hidden);
        $this->setFrontendUserGroup(new ObjectStorage());
        $this->setLabel($label);
        $this->setIndexName($indexName);
        $this->setIndexSearch($indexSearch);
        $this->setOaiName($oaiName);
        $this->setDescription($description);
        $this->setThumbnail($thumbnail);
        $this->setPriority($priority);
        $this->setDocuments(new ObjectStorage());
        $this->setOwner($owner);
        $this->setFeCruserId($feCruserId);
        $this->setFeAdminLock($feAdminLock);
        $this->setStatus($status);
    }

    /**
     * Get the uid of the system language
     *
     * @return int
     */
    public function getSysLanguageUid()
    {
        return $this->sysLanguageUid;
    }

    /**
     * Set the uid of the system language
     *
     * @param int $sysLanguageUid The uid of the system language
     *
     * @return void
     */
    public function setSysLanguageUid(int $sysLanguageUid)
    {
        $this->sysLanguageUid = $sysLanguageUid;
    }

    /**
     * Get the language parent
     *
     * @return string
     */
    public function getL18nParent()
    {
        return $this->l18nParent;
    }

    /**
     * Set the language parent
     *
     * @param string $l18nParent The language parent
     *
     * @return void
     */
    public function setL18nParent(string $l18nParent)
    {
        $this->l18nParent = $l18nParent;
    }

    /**
     * Get the language diff source
     *
     * @return string
     */
    public function getL18nDiffSource()
    {
        return $this->l18nDiffSource;
    }

    /**
     * Set the language diff source
     *
     * @param string $l18nDiffSource The language diff source
     *
     * @return void
     */
    public function setL18nDiffSource(string $l18nDiffSource)
    {
        $this->l18nDiffSource = $l18nDiffSource;
    }

    /**
     * Get the information if collection is hidden
     *
     * @return int
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set the information if collection is hidden
     *
     * @param int $hidden The information if collection is hidden
     *
     * @return void
     */
    public function setHidden(int $hidden)
    {
        $this->hidden = $hidden;
    }

    /**
     * Get the collection frontend groups
     *
     * @return ObjectStorage<FrontendUserGroup>
     */
    public function getFrontendUserGroups()
    {
        return $this->frontendUserGroups;
    }

    /**
     * Set the collection frontend groups
     *
     * @param ObjectStorage<FrontendUserGroup> $frontendUserGroups The collection frontend groups
     *
     * @return void
     */
    public function setFrontendUserGroups(ObjectStorage $frontendUserGroups)
    {
        $this->frontendUserGroups = $frontendUserGroups;
    }

    /**
     * Add a frontend group to the collection
     *
     * @param FrontendUserGroup $frontendGroup
     */
    public function addFrontendUserGroup(FrontendUserGroup $frontendUserGroup)
    {
        $this->frontendUserGroup->attach($frontendUserGroup);
    }

    /**
     * Remove a frontend group from the collection
     *
     * @param FrontendUserGroup $frontendUserGroup
     */
    public function removeFrontendUserGroup(FrontendUserGroup $frontendUserGroup)
    {
        $this->frontendUserGroups->detach($frontendUserGroup);
    }

    /**
     * Get the collection label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the collection label
     *
     * @param string $label The collection label
     *
     * @return void
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * Get the index name
     *
     * @return string
     */
    public function getIndexName()
    {
        return $this->indexName;
    }

    /**
     * Set the index name
     *
     * @param string $indexName The index name
     *
     * @return void
     */
    public function setIndexName(string $indexName)
    {
        $this->indexName = $indexName;
    }

    /**
     * Get the index search
     *
     * @return string
     */
    public function getIndexSearch()
    {
        return $this->indexSearch;
    }

    /**
     * Set the index search
     *
     * @param string $indexSearch The index search
     *
     * @return void
     */
    public function setIndexSearch(string $indexSearch)
    {
        $this->indexSearch = $indexSearch;
    }

    /**
     * Get the collection OAI name
     *
     * @return string
     */
    public function getOaiName()
    {
        return $this->oaiName;
    }

    /**
     * Set the collection OAI name
     *
     * @param string $oaiName The collection OAI name
     *
     * @return void
     */
    public function setOaiName(string $oaiName)
    {
        $this->oaiName = $oaiName;
    }

    /**
     * Get the collection description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the collection description
     *
     * @param string $description The collection description
     *
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Get the collection thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set the collection thumbnail
     *
     * @param string $thumbnail The collection thumbnail
     *
     * @return void
     */
    public function setThumbnail(string $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * Get the collection priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the collection priority
     *
     * @param int $priority The collection priority
     *
     * @return void
     */
    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    /**
     * Get list? of documents
     *
     * @return ObjectStorage<Document>
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Set list? of documents
     *
     * @param ObjectStorage<Document> $documents List? of documents
     *
     * @return void
     */
    public function setDocuments(ObjectStorage $documents)
    {
        $this->documents = $documents;
    }

    /**
     * Add a document to the collection
     *
     * @param Document $document
     */
    public function addDocument(Document $document)
    {
        $this->documents->attach($document);
    }

    /**
     * Remove a document from the collection
     *
     * @param Document $document
     */
    public function removeDocument(Document $document)
    {
        $this->documents->detach($document);
    }

    /**
     * Get the collection owner
     *
     * @return Library
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the collection owner
     *
     * @param Library $owner The collection owner
     *
     * @return void
     */
    public function setOwner(Library $owner)
    {
        $this->owner = $owner;
    }

    /**
     * Get the collection frontend user
     *
     * @return FrontendUser
     */
    public function getFeCruserId()
    {
        return $this->feCruserId;
    }

    /**
     * Set the collection frontend user
     *
     * @param FrontendUser $feCruserId The collection frontend user
     *
     * @return void
     */
    public function setFeCruserId(FrontendUser $feCruserId)
    {
        $this->feCruserId = $feCruserId;
    }

    /**
     * Get the collection frontend admin lock
     *
     * @return int
     */
    public function getFeAdminLock()
    {
        return $this->feAdminLock;
    }

    /**
     * Set the collection frontend admin lock
     *
     * @param int $feAdminLock The collection frontend admin lock
     *
     * @return void
     */
    public function setFeAdminLock(int $feAdminLock)
    {
        $this->feAdminLock = $feAdminLock;
    }

    /**
     * Get the collection status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the collection status
     *
     * @param int $status The collection status
     *
     * @return void
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
    }
}
