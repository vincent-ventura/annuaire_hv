<?php
namespace HV\AnnuaireHv\Controller;

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
 * OrganismeController
 */
class OrganismeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * organismeRepository
     *
     * @var \HV\AnnuaireHv\Domain\Repository\OrganismeRepository
     * @inject
     */
    protected $organismeRepository = NULL;

    /**
     * contactRepository
     *
     * @var \HV\AnnuaireHv\Domain\Repository\ContactRepository
     * @inject
     */
    protected $contactRepository = NULL;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $organismes = $this->organismeRepository->findAll();
        $this->view->assign('organismes', $organismes);
    }
    
    /**
     * action show
     *
     * @param \HV\AnnuaireHv\Domain\Model\Organisme $organisme
     * @return void
     */
    public function showAction(\HV\AnnuaireHv\Domain\Model\Organisme $organisme)
    {
        $this->view->assign('organisme', $organisme);
    }
    
    /**
     * action contactList
     *
     * @return void
     */
    public function contactListAction(\HV\AnnuaireHv\Domain\Model\Organisme $organisme)
    {
        $contacts = $this->contactRepository->findByOrganisme($organisme);
        $this->view->assign('contacts', $contacts);
    }
    
    /**
     * action serviceList
     *
     * @return void
     */
    public function serviceListAction(\HV\AnnuaireHv\Domain\Model\Organisme $organisme) {
        $contacts = $this->contactRepository->findByOrganisme($organisme);
        $services = [];

        foreach($contacts as $contact) {
            $service = $contact->getService();
            array_push($services, $service);
        }

        $this->view->assignMultiple(array('services'=> $services, 'organisme' => $organisme));
    }
    
    /**
     * action serviceShow
     *
     * @return void
     */
    public function serviceShowAction(\HV\AnnuaireHv\Domain\Model\Service $service, \HV\AnnuaireHv\Domain\Model\Organisme $organisme)
    {
        $this->view->assignMultiple(array('service'=> $service, 'organisme' => $organisme));
    }

}