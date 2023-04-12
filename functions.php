<?php
    /* ································································································ THEME SUPPORT ·············*/

    add_theme_support('post-thumbnails');

    /* ································································································ THEME SCRIPTS ·············*/

    /*
     *  Add theme JS, jQuery scripts and style sheets
     *
     */
    function add_theme_scripts() {
        
        wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
        wp_enqueue_style('bootstrap-css');
        
        wp_register_style('carousel', get_template_directory_uri().'/assets/css/plugins/owl-carousel/owl.carousel.css' );
        wp_enqueue_style('carousel');
        
        wp_register_style('countdown', get_template_directory_uri().'/assets/css/plugins/jquery.countdown.css' );
        wp_enqueue_style('countdown');
       
        wp_register_style('popup', get_template_directory_uri().'/assets/css/plugins/magnific-popup/magnific-popup.css' );
        wp_enqueue_style('popup');
        
        wp_register_style('style-css', get_template_directory_uri().'/assets/css/style.css' );
        wp_enqueue_style('style-css');
        
        wp_register_style('skin-demo-24', get_template_directory_uri().'/assets/css/skins/skin-demo-24.css' );
        wp_enqueue_style('skin-demo-24');
        
        wp_register_style('demo-24', get_template_directory_uri().'/assets/css/demos/demo-24.css' );
        wp_enqueue_style('demo-24');
        
        wp_register_style('demo-6', get_template_directory_uri().'/assets/css/demos/demo-6.css' );
        wp_enqueue_style('demo-6');
        
        // Hoja principal del tema -> No hace falta registrarla, solo ponerla en la cola
        wp_enqueue_style('style', get_stylesheet_uri() );

        // Quitamos el jQuery de WP porque vamos a usar el que trae el tema
        wp_deregister_script('jquery');
        wp_register_script('jQuery',  get_template_directory_uri().'/assets/js/jquery.min.js');
        wp_enqueue_script('jQuery');
        
        wp_register_script('bootstrap-bundle',  get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', null, null, true);
        wp_enqueue_script('bootstrap-bundle');
    
        wp_register_script('hoverIntent',  get_template_directory_uri().'/assets/js/jquery.hoverIntent.min.js', null, null, true);
        wp_enqueue_script('hoverIntent');
    
        wp_register_script('waypoints',  get_template_directory_uri().'/assets/js/jquery.waypoints.min.js', null, null, true);
        wp_enqueue_script('waypoints');
        
        wp_register_script('superfish',  get_template_directory_uri().'/assets/js/superfish.min.js', null, null, true);
        wp_enqueue_script('superfish');
  
        wp_register_script('owl',  get_template_directory_uri().'/assets/js/owl.carousel.min.js', null, null, true);
        wp_enqueue_script('owl');
 
        wp_register_script('spinner',  get_template_directory_uri().'/assets/js/bootstrap-input-spinner.js', null, null, true);
        wp_enqueue_script('spinner');
   
        wp_register_script('plugin',  get_template_directory_uri().'/assets/js/jquery.plugin.min.js', array('jQuery'), null, true);
        wp_enqueue_script('plugin');
        
        wp_register_script('countdown-js',  get_template_directory_uri().'/assets/js/jquery.countdown.min.js', array('jQuery'), null, true);
        wp_enqueue_script('countdown-js');
        
        wp_register_script('popup',  get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jQuery'), null, true);
        wp_enqueue_script('popup');
        
        wp_register_script('main',  get_template_directory_uri().'/assets/js/main.js', null, null, true);
        wp_enqueue_script('main');
   
        wp_register_script('demo',  get_template_directory_uri().'/assets/js/demos/demo-24.js', null, null, true);
        wp_enqueue_script('demo');
    }
    add_action('wp_enqueue_scripts','add_theme_scripts');
    
    /* ································································································ POST ·············*/
    
    /**
     * Returns the page object given its name
     * @param $title Title Post
     * @return Object Page
     */
    function get_page_object($title) {
        $query = new WP_Query(
            array(
                'post_type'              => 'page',
                'title'                  =>  $title,
                'post_status'            => 'all',
                'posts_per_page'         => 1,
                'no_found_rows'          => true,
                'ignore_sticky_posts'    => true,
                'update_post_term_cache' => false,
                'update_post_meta_cache' => false,
                'orderby'                => 'post_date ID',
                'order'                  => 'ASC',
            )
        );
 
        if ( ! empty( $query->post ) ) {
            $page = $query->post;
        } else {
            $page  = null;
        }
        return $page;
    }

    /**
     * Retrieve the post tags like a serie of links
     * @param $post_id Integer Post Id
     */
    function my_tags($post_id) {
        $myTags = get_the_tags($post_id);  // Me devuelve una colección de objetos tipo tags con los tags del post
        $result = '';
        if (!empty($myTags)) {
            foreach($myTags as $myTag) {
                $result .= '<a href="'.get_tag_link($myTag->term_id).'">'.$myTag->name.'</a>';
            }
        }
        return $result;
    }
    
    /**
     * Retrieve the post tags like a serie of links separated by commas
     * @param $post_id Integer Post Id
     */
    function my_tags_comma($post_id) {
        $myTags = get_the_tags($post_id);  // Me devuelve una colección de objetos tipo tags con los tags del post
        $result = '';
        if (!empty($myTags)) {
            foreach($myTags as $myTag) {
                $result .= '<a href="'.get_tag_link($myTag->term_id).'">'.$myTag->name.'</a> · ';
            }
        }
        return substr($result, 0, strlen($result)-3); // Quitamos el último chirimbolo y los dos espacios
    }
    
    /**
     * Customize excerpt length
     * @return Integer New excerpt length
     */
    function my_excerpt_length() {
        $newLength = 40;
        if (is_home() && !is_front_page()) {
            // Estoy en el blog
            $newLength = 20;
        }
        return $newLength;
    }
    add_filter('excerpt_length', 'my_excerpt_length');
    
    /* ································································································ SIDEBAR ·············*/
    
    /*
     *  Register Widget Zones
     *
     */
    function register_widget_zones() {
        register_sidebar(
            array(
                'name'          => 'TagCloud Widget',
                'id'            => 'tag-cloud',
                'description'   => 'Sidebar TagCloud Widget Zone',
                'before_widget' => '<div class="tag-cloud">',
                'after_widget'  => '</div>',
            )    
        );
        register_sidebar(
            array(
                'name'          => 'Calendar Widget',
                'id'            => 'calendar',
                'description'   => 'Sidebar Calendar Widget Zone',
                'before_widget' => '<div class="calendar">',
                'after_widget'  => '</div>',
            )    
        );
    }
    add_action('widgets_init', 'register_widget_zones');
    
    /* ································································································ COMMENTS ·············*/
    
    /**
     * Delete url field from comments form
     * @param $fields array List of comment form fields -> nos la proveee el hook comment_form_default_fields
     */
    function delete_url_from_comment_form($fields) {
        unset($fields['url']); // Quitamos el campo url del array con los campos del formulario de comentarios
        return $fields;
    }
    add_action('comment_form_default_fields', 'delete_url_from_comment_form');
    
    /**
     * Re-order comments form field
     * @param $fields array List of comment form fields -> nos la proveee el hook comment_form_fields
     *                                                                            No podemos usar comment_form_default_fields porque no
     *                                                                            nos ordenaría al manejar este hook los campos por defecto
     */
    function reorder_comment_form_fields($fields) {
        // Si el usuario no está logeado tenemos campos nombre y email
        if(!is_user_logged_in()) {
            $aux = array();
            array_push($aux, $fields['author']);
            array_push($aux, $fields['email']);
            array_push($aux, $fields['comment']);
            array_push($aux, $fields['cookies']);
            array_push($aux, $fields['consent']);
            return $aux;
        }
        else {
            return $fields;
        }
    }
    add_action('comment_form_fields', 'reorder_comment_form_fields');
    
    /**
     * Add comment field for privacy policy consent
     * @param $fields array List of comment form fields -> nos la proveee el hook comment_form_default_fields
     */
    function add_comment_consent($fields) {
        $fields['consent'] = '
        <p class="comment-form-public"><input type="checkbox" name="consent" id="consent">
            <label for="consent"> Check this box to give us permission to publicly post your comment
                                  (I accept the <a href="'.get_page_link(get_page_object('Política de Privacidad')->ID).'">Privacy Policy</a>)
            </label>
        </p>';
        return $fields;
    }
    add_action('comment_form_default_fields', 'add_comment_consent');
    
    /**
     * Save privacy policy consent in data base
     * @param $comment_id -> Nos lo da el action hook comment_post
     */
    function save_comment_consent($comment_id) {
        $consent_value = $_POST['consent'];
        if($consent_value) {
            $valor = "Consent checkbox checked. I accept the privacy policy.";
        } else {
            if(is_user_logged_in()) {
            $valor = "Logged user. I accept the privacy policy.";
            } else {
            $valor = "Consent checkbox not checked. I do NOT accept the privacy policy.";
            }
        }
        // Vamos a crear un metadato nuevo para el comentario
        add_comment_meta($comment_id, 'consent', $valor, true);
    }
    add_action('comment_post', 'save_comment_consent');
    
    /**
     * Create a new column Consent in the back-end comments area
     * @param array $columns Comment Area Colums -> Nos lo provee el filter hook manage_edit-comments_columns
     */
    function create_consent_column($columns) {
        // Modificamos el array $columns para incorporar el nuevo campo de consentimiento
        $columns = array(
            'cb'       => '<input type="checkbox">',
            'author'   => 'Author',
            'comment'  => 'Comment',
            'consent'  => 'Consent',
            'response' => 'Response to',
            'date'     => 'Submitted on',
        );
        return $columns;
    }
    add_filter('manage_edit-comments_columns', 'create_consent_column');
    
    /**
     * Display conset in the new comments area column
     * @param string $column      Comment Area column name
     * @param string $comment_id  Comment ID
     */
    function display_column_consent($column, $comment_id) {
        if($column == 'consent') {
            echo get_comment_meta($comment_id, 'consent', true);
        }
    }
    // Las funciones asociadas a un hook tienen por defecto un parámetro, por lo que se le debe añadir dos parámetros, la prioridad y el número de argumentos
    add_action('manage_comments_custom_column', 'display_column_consent', 1, 2);
    