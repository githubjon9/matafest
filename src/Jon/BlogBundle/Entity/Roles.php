<?php

namespace Jon\BlogBundle\Entity;

/**
 * Roles
 */
class Roles
{
    /**
     * @var string
     */
    private $roleName;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $default = '0';

    /**
     * @var boolean
     */
    private $canDelete = '1';

    /**
     * @var string
     */
    private $loginDestination = '/';

    /**
     * @var string
     */
    private $defaultContext = 'content';

    /**
     * @var integer
     */
    private $deleted = '0';

    /**
     * @var integer
     */
    private $roleId;


    /**
     * Set roleName
     *
     * @param string $roleName
     *
     * @return Roles
     */
    public function setRoleName($roleName)
    {
        $this->roleName = $roleName;

        return $this;
    }

    /**
     * Get roleName
     *
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Roles
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set default
     *
     * @param boolean $default
     *
     * @return Roles
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return boolean
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Set canDelete
     *
     * @param boolean $canDelete
     *
     * @return Roles
     */
    public function setCanDelete($canDelete)
    {
        $this->canDelete = $canDelete;

        return $this;
    }

    /**
     * Get canDelete
     *
     * @return boolean
     */
    public function getCanDelete()
    {
        return $this->canDelete;
    }

    /**
     * Set loginDestination
     *
     * @param string $loginDestination
     *
     * @return Roles
     */
    public function setLoginDestination($loginDestination)
    {
        $this->loginDestination = $loginDestination;

        return $this;
    }

    /**
     * Get loginDestination
     *
     * @return string
     */
    public function getLoginDestination()
    {
        return $this->loginDestination;
    }

    /**
     * Set defaultContext
     *
     * @param string $defaultContext
     *
     * @return Roles
     */
    public function setDefaultContext($defaultContext)
    {
        $this->defaultContext = $defaultContext;

        return $this;
    }

    /**
     * Get defaultContext
     *
     * @return string
     */
    public function getDefaultContext()
    {
        return $this->defaultContext;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return Roles
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }
}

