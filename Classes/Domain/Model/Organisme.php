<?php
namespace HV\AnnuaireHv\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Hugo Uranga <uranga.hugo@orange.fr>
 *           Vincent Ventura <vincent.ventura1@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Organisme
 */
class Organisme extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Raison Sociale
     *
     * @var string
     * @validate NotEmpty
     */
    protected $raisonsociale = '';
    
    /**
     * Adresse
     *
     * @var string
     * @validate NotEmpty
     */
    protected $adresse = '';
    
    /**
     * Code Postal
     *
     * @var string
     * @validate NotEmpty
     */
    protected $cp = '';
    
    /**
     * Ville
     *
     * @var string
     * @validate NotEmpty
     */
    protected $ville = '';
    
    /**
     * Téléphone
     *
     * @var string
     */
    protected $tel = '';
    
    /**
     * Fax
     *
     * @var string
     */
    protected $fax = '';
    
    /**
     * Email
     *
     * @var string
     */
    protected $email = '';
    
    /**
     * Description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * N° Siret
     *
     * @var string
     * @validate NotEmpty
     */
    protected $siret = '';
    
    /**
     * Logo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $logo = null;
    
    /**
     * Horaires
     *
     * @var string
     */
    protected $horaires = '';
    
    /**
     * Returns the raisonsociale
     *
     * @return string $raisonsociale
     */
    public function getRaisonsociale()
    {
        return $this->raisonsociale;
    }
    
    /**
     * Sets the raisonsociale
     *
     * @param string $raisonsociale
     * @return void
     */
    public function setRaisonsociale($raisonsociale)
    {
        $this->raisonsociale = $raisonsociale;
    }
    
    /**
     * Returns the adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    
    /**
     * Sets the adresse
     *
     * @param string $adresse
     * @return void
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
    /**
     * Returns the cp
     *
     * @return string $cp
     */
    public function getCp()
    {
        return $this->cp;
    }
    
    /**
     * Sets the cp
     *
     * @param string $cp
     * @return void
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
    }
    
    /**
     * Returns the ville
     *
     * @return string $ville
     */
    public function getVille()
    {
        return $this->ville;
    }
    
    /**
     * Sets the ville
     *
     * @param string $ville
     * @return void
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
    
    /**
     * Returns the tel
     *
     * @return string $tel
     */
    public function getTel()
    {
        return $this->tel;
    }
    
    /**
     * Sets the tel
     *
     * @param string $tel
     * @return void
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    }
    
    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }
    
    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the siret
     *
     * @return string $siret
     */
    public function getSiret()
    {
        return $this->siret;
    }
    
    /**
     * Sets the siret
     *
     * @param string $siret
     * @return void
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;
    }
    
    /**
     * Returns the logo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     */
    public function getLogo()
    {
        return $this->logo;
    }
    
    /**
     * Sets the logo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
     * @return void
     */
    public function setLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $logo)
    {
        $this->logo = $logo;
    }
    
    /**
     * Returns the horaires
     *
     * @return string $horaires
     */
    public function getHoraires()
    {
        return $this->horaires;
    }
    
    /**
     * Sets the horaires
     *
     * @param string $horaires
     * @return void
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;
    }

}