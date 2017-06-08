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
 * Contact
 */
class Contact extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';
    
    /**
     * Prénom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $prenom = '';
    
    /**
     * Téléphone
     *
     * @var string
     */
    protected $tel = '';
    
    /**
     * Email
     *
     * @var string
     */
    protected $email = '';
    
    /**
     * Adresse
     *
     * @var string
     */
    protected $adresse = '';
    
    /**
     * Code Postal
     *
     * @var string
     */
    protected $cp = '';
    
    /**
     * Ville
     *
     * @var string
     */
    protected $ville = '';
    
    /**
     * Photo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $photo = null;
    
    /**
     * Présentation
     *
     * @var string
     */
    protected $presentation = '';
    
    /**
     * Organisme
     *
     * @var \HV\AnnuaireHv\Domain\Model\Organisme
     */
    protected $organisme = null;
    
    /**
     * Fonction
     *
     * @var \HV\AnnuaireHv\Domain\Model\Fonction
     */
    protected $fonction = null;
    
    /**
     * Service
     *
     * @var \HV\AnnuaireHv\Domain\Model\Service
     */
    protected $service = null;
    
    /**
     * Returns the nom
     *
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }
    
    /**
     * Sets the nom
     *
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    /**
     * Returns the prenom
     *
     * @return string $prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    
    /**
     * Sets the prenom
     *
     * @param string $prenom
     * @return void
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
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
     * Returns the photo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    
    /**
     * Sets the photo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $photo
     * @return void
     */
    public function setPhoto(\TYPO3\CMS\Extbase\Domain\Model\FileReference $photo)
    {
        $this->photo = $photo;
    }
    
    /**
     * Returns the presentation
     *
     * @return string $presentation
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
    
    /**
     * Sets the presentation
     *
     * @param string $presentation
     * @return void
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        
    }
    
    /**
     * Returns the organisme
     *
     * @return \HV\AnnuaireHv\Domain\Model\Organisme $organisme
     */
    public function getOrganisme()
    {
        return $this->organisme;
    }
    
    /**
     * Sets the organisme
     *
     * @param \HV\AnnuaireHv\Domain\Model\Organisme $organisme
     * @return void
     */
    public function setOrganisme(\HV\AnnuaireHv\Domain\Model\Organisme $organisme)
    {
        $this->organisme = $organisme;
    }
    
    /**
     * Returns the fonction
     *
     * @return \HV\AnnuaireHv\Domain\Model\Fonction $fonction
     */
    public function getFonction()
    {
        return $this->fonction;
    }
    
    /**
     * Sets the fonction
     *
     * @param \HV\AnnuaireHv\Domain\Model\Fonction $fonction
     * @return void
     */
    public function setFonction(\HV\AnnuaireHv\Domain\Model\Fonction $fonction)
    {
        $this->fonction = $fonction;
    }
    
    /**
     * Returns the service
     *
     * @return \HV\AnnuaireHv\Domain\Model\Service $service
     */
    public function getService()
    {
        return $this->service;
    }
    
    /**
     * Sets the service
     *
     * @param \HV\AnnuaireHv\Domain\Model\Service $service
     * @return void
     */
    public function setService(\HV\AnnuaireHv\Domain\Model\Service $service)
    {
        $this->service = $service;
    }

}