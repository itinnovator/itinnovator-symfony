<?php

namespace Projects\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="projects")
*/
class Project
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $project_title;

    /**
     * @ORM\Column(type="string")
     */
    protected $project_description;

    /**
     * @ORM\Column(type="string")
     */
    protected $project_duration;

    /**
     * @ORM\Column(type="string")
     */
    protected $min_budget_price;

    /**
     * @ORM\Column(type="string")
     */
    protected $max_budget_price;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_user;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_website;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_lang;

    /**
     * @ORM\Column(type="string")
     */
    protected $ip;

    /**
     * @ORM\Column(type="string")
     */
    protected $browser;

    /**
     * @ORM\Column(type="string")
     */
    protected $created_at = '0000-00-00';


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set projectTitle
     *
     * @param string $projectTitle
     *
     * @return Project
     */
    public function setProjectTitle($projectTitle)
    {
        $this->project_title = $projectTitle;

        return $this;
    }

    /**
     * Get projectTitle
     *
     * @return string
     */
    public function getProjectTitle()
    {
        return $this->project_title;
    }

    /**
     * Set projectDescription
     *
     * @param string $projectDescription
     *
     * @return Project
     */
    public function setProjectDescription($projectDescription)
    {
        $this->project_description = $projectDescription;

        return $this;
    }

    /**
     * Get projectDescription
     *
     * @return string
     */
    public function getProjectDescription()
    {
        return $this->project_description;
    }

    /**
     * Set projectDuration
     *
     * @param string $projectDuration
     *
     * @return Project
     */
    public function setProjectDuration($projectDuration)
    {
        $this->project_duration = $projectDuration;

        return $this;
    }

    /**
     * Get projectDuration
     *
     * @return string
     */
    public function getProjectDuration()
    {
        return $this->project_duration;
    }

    /**
     * Set minBudgetPrice
     *
     * @param string $minBudgetPrice
     *
     * @return Project
     */
    public function setMinBudgetPrice($minBudgetPrice)
    {
        $this->min_budget_price = $minBudgetPrice;

        return $this;
    }

    /**
     * Get minBudgetPrice
     *
     * @return string
     */
    public function getMinBudgetPrice()
    {
        return $this->min_budget_price;
    }

    /**
     * Set maxBudgetPrice
     *
     * @param string $maxBudgetPrice
     *
     * @return Project
     */
    public function setMaxBudgetPrice($maxBudgetPrice)
    {
        $this->max_budget_price = $maxBudgetPrice;

        return $this;
    }

    /**
     * Get maxBudgetPrice
     *
     * @return string
     */
    public function getMaxBudgetPrice()
    {
        return $this->max_budget_price;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Project
     */
    public function setIdUser($idUser)
    {
        $this->id_user = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set idWebsite
     *
     * @param integer $idWebsite
     *
     * @return Project
     */
    public function setIdWebsite($idWebsite)
    {
        $this->id_website = $idWebsite;

        return $this;
    }

    /**
     * Get idWebsite
     *
     * @return integer
     */
    public function getIdWebsite()
    {
        return $this->id_website;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     *
     * @return Project
     */
    public function setIdLang($idLang)
    {
        $this->id_lang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return integer
     */
    public function getIdLang()
    {
        return $this->id_lang;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Project
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set browser
     *
     * @param string $browser
     *
     * @return Project
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get browser
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set createdAt
     *
     * @param string $createdAt
     *
     * @return Project
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}
