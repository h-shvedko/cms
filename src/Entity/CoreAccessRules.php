<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoreAccessRulesRepository")
 */
class CoreAccessRules
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CoreUsers", inversedBy="accesses")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $users;

    /**
     * @ORM\Column(name="rule_name", type="string", length=255, nullable=false)
     **/
    protected $ruleName;

    /**
     * @ORM\Column(name="rule_value", type="string", length=255, nullable=false)
     **/
    protected $ruleValue;

    /**
     * @return mixed
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param mixed $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    /**
     * @return mixed
     */
    public function getRuleName()
    {
        return $this->ruleName;
    }

    /**
     * @param mixed $ruleName
     */
    public function setRuleName($ruleName)
    {
        $this->ruleName = $ruleName;
    }

    /**
     * @return mixed
     */
    public function getRuleValue()
    {
        return $this->ruleValue;
    }

    /**
     * @param mixed $ruleValue
     */
    public function setRuleValue($ruleValue)
    {
        $this->ruleValue = $ruleValue;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
