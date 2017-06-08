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
 * Service
 */
class Service extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Libellé
     *
     * @var string
     * @validate NotEmpty
     */
    protected $libelle = '';
    
    /**
     * Bâtiment
     *
     * @var string
     */
    protected $batiment = '';
    
    /**
     * Bureau
     *
     * @var string
     */
    protected $bureau = '';
    
    /**
     * Téléphone
     *
     * @var string
     */
    protected $tel = '';
    
    /**
     * Horaires
     *
     * @var string
     */
    protected $horaires = '';
    
    /**
     * Returns the libelle
     *
     * @return string $libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    /**
     * Sets the libelle
     *
     * @param string $libelle
     * @return void
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
    
    /**
     * Returns the batiment
     *
     * @return string $batiment
     */
    public function getBatiment()
    {
        return $this->batiment;
    }
    
    /**
     * Sets the batiment
     *
     * @param string $batiment
     * @return void
     */
    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;
    }
    
    /**
     * Returns the bureau
     *
     * @return string $bureau
     */
    public function getBureau()
    {
        return $this->bureau;
    }
    
    /**
     * Sets the bureau
     *
     * @param string $bureau
     * @return void
     */
    public function setBureau($bureau)
    {
        $this->bureau = $bureau;
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