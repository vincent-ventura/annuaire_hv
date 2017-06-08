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
 * Fonction
 */
class Fonction extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Libellé
     *
     * @var string
     * @validate NotEmpty
     */
    protected $libelle = '';
    
    /**
     * Responsable ?
     *
     * @var bool
     */
    protected $responsable = false;
    
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
     * Returns the responsable
     *
     * @return bool $responsable
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
    
    /**
     * Sets the responsable
     *
     * @param bool $responsable
     * @return void
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }
    
    /**
     * Returns the boolean state of responsable
     *
     * @return bool
     */
    public function isResponsable()
    {
        return $this->responsable;
    }

}