<?php
function zot_info_extra($customizer) {
    /**
     * Customizer Sections
     */
    $customizer->add_section( 'zot_customizer' , array(
        'title'      => __( 'Simples System - Informações', THEMENAME ),
        'priority'   => 30,
    ) );


    /**
     *	Telefone
     */
    $customizer->add_setting('telefone',
        array(
            'default' => ''
        )
    );

    $customizer->add_control('control_telefone',
        array(
            'label' 	=> 'Telefone',
            'type'		=> 'text',
            'section'	=> 'zot_customizer',
            'settings'	=> 'telefone'
        )
    );

    /**
     *	Whatsapp
     */
    $customizer->add_setting('whatsapp',
        array(
            'default' => ''
        )
    );

    $customizer->add_control('control_whatsapp',
        array(
            'label' 	=> 'Whatsapp (somente numeros)',
            'type'		=> 'text',
            'section'	=> 'zot_customizer',
            'settings'	=> 'whatsapp'
        )
    );
    /**
     *	Whatsapp
     */
    $customizer->add_setting('whatsapp_text',
        array(
            'default' => ''
        )
    );

    $customizer->add_control('control_whatsapp_text',
        array(
            'label' 	=> 'Whatsapp Mensagem',
            'type'		=> 'text',
            'section'	=> 'zot_customizer',
            'settings'	=> 'whatsapp_text'
        )
    );


    /**
     *	E-Mail
     */
    $customizer->add_setting('email',
        array(
            'default' => ''
        )
    );

    $customizer->add_control('control_email',
        array(
            'label' 	=> 'E-Mail de Vendas',
            'type'		=> 'text',
            'section'	=> 'zot_customizer',
            'settings'	=> 'email'
        )
    );

    /**
     *	E-Mail
     */
    $customizer->add_setting('assistencia',
        array(
            'default' => ''
        )
    );

    $customizer->add_control('control_assistencia',
        array(
            'label' 	=> 'E-Mail de Assistência',
            'type'		=> 'text',
            'section'	=> 'zot_customizer',
            'settings'	=> 'assistencia'
        )
    );


    /**
     *	IFrame Google Maps
     */
    $customizer->add_setting('iframemaps',
        array(
            'default' => ''
        )
    );

    $customizer->add_control('control_iframemaps',
        array(
            'label' 	=> 'Google Maps Iframe',
            'type'		=> 'textarea',
            'section'	=> 'zot_customizer',
            'settings'	=> 'iframemaps'
        )
    );
    /**
     *	Social Plugin Facebook
     */
    $customizer->add_setting('iframefacepage',
        array(
            'default' => ''
        )
    );

    $customizer->add_control('control_iframefacepage',
        array(
            'label' 	=> 'Facebook Page Iframe',
            'type'		=> 'textarea',
            'section'	=> 'zot_customizer',
            'settings'	=> 'iframefacepage'
        )
    );

    /**
     *	Social Plugin Facebook
     */
    $customizer->add_setting('social',
        array(
            'default' => ''
        )
    );

    $customizer->add_control('control_social',
        array(
            'label' 	=> 'HTML da Social',
            'type'		=> 'textarea',
            'section'	=> 'zot_customizer',
            'settings'	=> 'social'
        )
    );

    /**
     *	Logo Footer
     */

    $customizer->add_setting('footer_logo', array(
        'default' => ''
    ));

    $customizer->add_control( new WP_Customize_Image_Control($customizer, 'control_footer_logo', array(
        'label'    => 'Logo Rodape',
        'section'  => 'zot_customizer',
        'settings' => 'footer_logo',
    )));

}

add_action( 'customize_register', 'zot_info_extra' );