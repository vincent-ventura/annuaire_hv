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
 * ContactController
 */
class ContactController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

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
    public function listAction(\HV\AnnuaireHv\Search $search=null)
    {
        //var_dump($search->getKeyword());
        if ($search == NULL)
            $contacts = $this->contactRepository->findAll();
        else
            $contacts = $this->contactRepository->findByKeyword($search->getKeyword());

        $this->view->assign('contacts', $contacts);
    }
    
    /**
     * action show
     *
     * @param \HV\AnnuaireHv\Domain\Model\Contact $contact
     * @return void
     */
    public function showAction(\HV\AnnuaireHv\Domain\Model\Contact $contact)
    {
        $this->view->assign('contact', $contact);
    }
    
    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }

}