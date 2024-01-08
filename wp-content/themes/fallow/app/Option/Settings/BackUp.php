<?php

// backup option
CSF::createSection(FALLOW_OPTION_KEY, array(

    'title'  => esc_html__('Backup Options', 'fallow'),
    'icon'   => 'fa fa-share-square-o',
    'fields' => array(
        array(
            'id'    => 'backup_options',
            'type'  => 'backup',
            'title' => esc_html__('Backup Your All Options', 'fallow'),
            'desc'  => esc_html__('If you want to take backup your option you can backup here.', 'fallow'),
        ),
    ),
));
