<?php

namespace CoreBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

/**
 * Class: CityAdmin.php
 *
 * @author    Odessa Team (odessateam@ab-soft.net)
 * @category  Ringcentral
 * @copyright Copyright (c) 2012-2016, RingCentral, Inc (http://www.ringcentral.com)
 *
 * @version $Id:$
 */
class CityAdmin extends  Admin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->add('title', 'text', [
                'label' => 'имя',
            ])
            ->add('latlng', 'oh_google_maps', [
                'map_width'      => 600,     // the width of the map
                'map_height'     => 600,     // the height of the map
                'default_lat'    => 46.47725095861305,    // the starting position on the map
                'default_lng'    => 30.746666193008423, // the starting position on the map
            ])
            ->add('quest', 'sonata_type_collection', [
                'required' => false,
                'compound' => true,
                'by_reference' => true,
                'label' => 'квесты',
            ],[
                    'allow_delete' => true,
                    'btn_del' => true,
                    'multiple' => true,
                    'expanded' => true,
                    'edit' => 'inline',
                    'inline' => 'table',
                ]
            );
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title');
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('title');
    }
}