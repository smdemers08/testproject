<?php 

define("sensitive_THEME_DIR",dirname(dirname(__FILE__)));
define("sensitive_THEME_URL",get_stylesheet_directory_uri());

global $sensitive_wf_data;

//require(dirname(__FILE__).'/');

### SECTION
// LESS Processing
function enqueue_less_styles($tag, $handle) {
    global $wp_styles;
    $match_pattern = '/\.less$/U';
    if ( preg_match( $match_pattern, $wp_styles->registered[$handle]->src ) ) {
        $handle = $wp_styles->registered[$handle]->handle;
        $media = $wp_styles->registered[$handle]->args;
        $href = $wp_styles->registered[$handle]->src . '?ver=' . $wp_styles->registered[$handle]->ver;
        $rel = isset($wp_styles->registered[$handle]->extra['alt']) && $wp_styles->registered[$handle]->extra['alt'] ? 'alternate stylesheet' : 'stylesheet';
        $title = isset($wp_styles->registered[$handle]->extra['title']) ? "title='" . esc_attr( $wp_styles->registered[$handle]->extra['title'] ) . "'" : '';

        $tag = "<link rel='stylesheet' id='$handle' $title href='$href' type='text/less' media='$media' />";
    }
    return $tag;
}

add_filter( 'style_loader_tag', 'enqueue_less_styles', 5, 2);
// LESS Processing Ends ^^
 
 
### SECTION
//Theme admin css & js
function sensitive_theme_admin_scripts($hook){   
    if($hook!='appearance_page_wpeden-themeopts') return;
    wp_enqueue_style('bootstrap-ui',sensitive_THEME_URL.'/admin/bootstrap/css/bootstrap.css');
    wp_enqueue_style('chosen-ui',sensitive_THEME_URL.'/admin/css/chosen.css');
    wp_enqueue_style('admincss',sensitive_THEME_URL.'/admin/css/base-admin-style.css');
    wp_enqueue_script('bootstrap-js',sensitive_THEME_URL.'/admin/bootstrap/js/bootstrap.min.js',array('jquery'));
    wp_enqueue_script('chosen-js',sensitive_THEME_URL.'/admin/js/chosen.jquery.js',array('jquery'));
    wp_enqueue_script('wpeden-js',sensitive_THEME_URL.'/admin/js/wpeden.js',array('jquery','chosen-js'));
}

add_action( 'admin_enqueue_scripts', 'sensitive_theme_admin_scripts');
//Theme admin css & js ends ^^
 
### SECTION
//Theme option menu function
function sensitive_theme_opt_menu(){                                                                                             /*Theme Option Menu*/
      add_theme_page( "WPEden Theme Options", "Theme Options", 'edit_theme_options', 'wpeden-themeopts', 'sensitive_theme_options');  
}


function sensitive_setting_field($data) {     
    
    switch($data['type']):
            case 'text':
                echo "<div class='controls'><input type='text' name='$data[name]' class='input span5' value='$data[value]' /><div class='hints'>$data[desc]</div></div></div>";
            break;
            case 'textarea':
                echo "<div class='controls'><textarea name='$data[name]' class='input span5'>$data[value]</textarea></div></div>";
            break;
            case 'callback':
                echo "<div class='controls'>".call_user_func($data['dom_callback'], $data['dom_callback_params'])."</div></div>";
            break;
            case 'heading':
                echo "<div class='navbar'><div class='navbar-inner'><a href='#{$data['id']}' class='brand'>".$data['label']."</a></div></div></div>";
            break;
    endswitch;
}

global $wpede_data_fetched;
function sensitive_get_theme_opts($index = null, $default = null){
    global $sensitive_wf_data, $settings_sections, $wpede_data_fetched;
    if(!$wpede_data_fetched){
    $sensitive_wf_data = array();    
    foreach($settings_sections as $section_id => $section_name) {
    $sensitive_wf_data = array_merge($sensitive_wf_data,get_option($section_id,array()));    
    }
    $wpede_data_fetched = 1;}
    
    if(!$index)
    return $sensitive_wf_data;
    else
    return isset($sensitive_wf_data[$index])&&$sensitive_wf_data[$index]!=''?stripcslashes($sensitive_wf_data[$index]):$default;
}

function sensitive_subsection_heading($data){
    return "<h3>{$data}</h3>";
}

$section = isset($_GET['section'])?$_GET['section']:'sensitive_general_settings';
$settings_sections = array(
            'sensitive_general_settings' => 'General Settings',
            'sensitive_homepage_settings' => 'Homepage Settings',
            
);
$settings_fields = array(
            'layout_type' => array('id' => 'layout_type',
                                'section'=>'sensitive_general_settings',
                                'label'=>'Theme Layout',
                                'name' => 'sensitive_general_settings[layout_type]',
                                'type' => 'callback',
                                'value' => sensitive_get_theme_opts('layout_type'),
                                'validate' => 'str',
                                'dom_callback'=> 'sensitive_layout_type',
                                'dom_callback_params' => array('name'=>'sensitive_general_settings[layout_type]','id'=>'layout_type','selected'=>sensitive_get_theme_opts('layout_type'))
                                ),
            'bg_image' => array('id' => 'bg_image',
                                'section'=>'sensitive_general_settings',
                                'label'=>'Image URL',
                                'desc' => 'For Header & Footer',
                                'name' => 'sensitive_general_settings[bg_image]',
                                'type' => 'text',
                                'value' => sensitive_get_theme_opts('bg_image'),
                                'validate' => 'str'                                 
                                ),
            'txt_color' => array('id' => 'txt_color',
                                'section'=>'sensitive_general_settings',
                                'label'=>'Text URL',
                                'desc' => 'For Header & Footer ( use valid color code )',
                                'name' => 'sensitive_general_settings[txt_color]',
                                'type' => 'text',
                                'value' => sensitive_get_theme_opts('txt_color'),
                                'validate' => 'str'                                 
                                ),
            'button_style' => array('id' => 'button_style',
                                'section'=>'sensitive_general_settings',
                                'label'=>'Button Style',
                                'name' => 'sensitive_general_settings[button_style]',
                                'type' => 'callback',
                                'value' => sensitive_get_theme_opts('button_style'),
                                'validate' => 'str',
                                'dom_callback'=> 'sensitive_button_type',
                                'dom_callback_params' => array('name'=>'sensitive_general_settings[button_style]','id'=>'button_style','selected'=>sensitive_get_theme_opts('button_style'))
                                ),
            'footer_text' => array('id' => 'footer_text',
                                'section'=>'sensitive_general_settings',
                                'label'=>'Footer Text',
                                'name' => 'sensitive_general_settings[footer_text]',
                                'type' => 'text',
                                'value' => sensitive_get_theme_opts('footer_text'),
                                'validate' => 'str'                                 
                                ),
            'featured_slider_heading' => array('id' => 'featured_slider_heading',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Homepage Header Settings',
                                'name' => 'featured_slider_heading',
                                'type' => 'heading'                                
                                ),
            'home_featured_image' => array('id' => 'home_featured_image',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Image URL',
                                'name' => 'sensitive_homepage_settings[home_featured_image]',
                                'type' => 'text',
                                'value' => sensitive_get_theme_opts('home_featured_image'),
                                'validate' => 'str'                                
                                ),
             
            'home_featured_title' => array('id' => 'home_featured_title',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Headline',
                                'name' => 'sensitive_homepage_settings[home_featured_title]',
                                'type' => 'text',
                                'value' => sensitive_get_theme_opts('home_featured_title'),
                                'validate' => 'str'                                
                                ),
             
            'home_featured_desc' => array('id' => 'home_featured_desc',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Description',
                                'name' => 'sensitive_homepage_settings[home_featured_desc]',
                                'type' => 'textarea',
                                'value' => sensitive_get_theme_opts('home_featured_desc'),
                                'validate' => 'str'                                
                                ),
             
            'home_featured_btntxt' => array('id' => 'home_featured_btntxt',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Button Text',
                                'name' => 'sensitive_homepage_settings[home_featured_btntxt]',
                                'type' => 'text',
                                'value' => sensitive_get_theme_opts('home_featured_btntxt'),
                                'validate' => 'str'                                
                                ),
             
            'home_featured_btnurl' => array('id' => 'home_featured_btnurl',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Button URL',
                                'name' => 'sensitive_homepage_settings[home_featured_btnurl]',
                                'type' => 'text',
                                'value' => sensitive_get_theme_opts('home_featured_btnurl'),
                                'validate' => 'str'                                
                                ),
             
            'featured_page_heading' => array('id' => 'featured_page_heading',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Featured Pages',
                                'name' => 'featured_page_heading',
                                'type' => 'heading'                                
                                ),
            'home_featured_page_1' => array('id' => 'home_featured_page_1',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Featured Page 1',
                                'name' => 'sensitive_homepage_settings[home_featured_page_1]',
                                'type' => 'callback',
                                'validate' => 'int',
                                'dom_callback'=> 'wp_dropdown_pages',
                                'dom_callback_params' => 'echo=0&name=sensitive_homepage_settings[home_featured_page_1]&id=home_featured_page_1&selected='.sensitive_get_theme_opts('home_featured_page_1')
                                ),
            'home_featured_page_2' => array('id' => 'home_featured_page_2',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Featured Page 2',
                                'name' => 'sensitive_homepage_settings[home_featured_page_2]',
                                'type' => 'callback',
                                'validate' => 'int',
                                'dom_callback'=> 'wp_dropdown_pages',
                                'dom_callback_params' => 'echo=0&name=sensitive_homepage_settings[home_featured_page_2]&id=home_featured_page_2&selected='.sensitive_get_theme_opts('home_featured_page_2')
                                ),
            'home_featured_page_3' => array('id' => 'home_featured_page_3',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Featured Page 3',
                                'name' => 'sensitive_homepage_settings[home_featured_page_3]',
                                'type' => 'callback',
                                'validate' => 'int',
                                'dom_callback'=> 'wp_dropdown_pages',
                                'dom_callback_params' => 'echo=0&name=sensitive_homepage_settings[home_featured_page_3]&id=home_featured_page_3&selected='.sensitive_get_theme_opts('home_featured_page_3')
                                ),
            'home_featured_page_4' => array('id' => 'home_featured_page_4',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Featured Page 4',
                                'name' => 'sensitive_homepage_settings[home_featured_page_4]',
                                'type' => 'callback',
                                'validate' => 'int',
                                'dom_callback'=> 'wp_dropdown_pages',
                                'dom_callback_params' => 'echo=0&name=sensitive_homepage_settings[home_featured_page_4]&id=home_featured_page_4&selected='.sensitive_get_theme_opts('home_featured_page_4')
                                ),
            'homepage_bottom_heading' => array('id' => 'homepage_bottom_heading',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Homepage Bottom',
                                'name' => 'homepage_bottom_heading',
                                'type' => 'heading'                                
                                ),
            'home_cat_4' => array('id' => 'home_cat_4',
                                'section'=>'sensitive_homepage_settings',
                                'label'=>'Homepage Post Category',
                                'name' => 'sensitive_homepage_settings[home_cat_4]',
                                'type' => 'callback',
                                'validate' => 'int',
                                'dom_callback'=> 'wp_dropdown_categories',
                                'dom_callback_params' => 'echo=0&name=sensitive_homepage_settings[home_cat_4]&id=home_cat_4&selected='.sensitive_get_theme_opts('home_cat_4')
                                ),
);  

function sensitive_setup_theme_options(){
    global $settings_fields, $sensitive_wf_data, $section, $settings_sections;   
    foreach($settings_sections as $section_id=>$section_name){                 
        register_setting($section_id,$section_id,'sensitive_validate_optdata');           
    }
    foreach($settings_fields as $id=>$field){         
        if($field['type']=='heading')
        add_settings_field($id, '<div class="control-group">', 'sensitive_setting_field', 'wpeden-themeopts', $field['section'], $field);    
        else
        add_settings_field($id, '<div class="control-group"><label for="ftrcat" class="control-label">'.$field['label'].'</label>', 'sensitive_setting_field', 'wpeden-themeopts', $field['section'], $field);    
    }
}

add_action('admin_init','sensitive_setup_theme_options');

function sensitive_validate_optdata($data){    
    global $settings_fields;  
    $error = array();
    
    foreach($settings_fields as $id=>$field){
         if(!isset($data[$id])) continue;              
         switch($field['validate']){
             case 'int':
                $data[$id] = intval($data[$id]);
             break;
             case 'double':
                $data[$id] = doubleval($data[$id]);
             break;
             case 'str':
                $data[$id] = esc_attr(mysql_escape_string(strval($data[$id])));
             break;
             case 'email':
                $data[$id] = is_email($data[$id])?$data[$id]:'';
                $error[$id] = 'Invalid Email Address';
             break;
         }
    }
    if($error) return $data['__error__'] = $error;
    
    return $data;
}

/**
* Theme Layout Selector ( wide / boxed)
* 
* @param mixed $params
*/
function sensitive_layout_type($params){
    $html = "<select  name='{$params['name']}' id='{$params['id']}'>";
    $html .= "<option value='wide'".($params['selected']=='wide'?'selected=selected':'').">Wide</option>";
    $html .= "<option value='boxed'".($params['selected']=='boxed'?'selected=selected':'').">Boxed</option>";
    $html .= "</select>";
    return $html;
}

/**
* Button Style Selector
* 
* @param mixed $params
*/
function sensitive_button_type($params){
    $html = "<select  name='{$params['name']}' id='{$params['id']}'>";
    $html .= "<option value='btn-info'".($params['selected']=='btn-info'?'selected=selected':'').">Blue Violet</option>";
    $html .= "<option value='btn-success'".($params['selected']=='btn-success'?'selected=selected':'').">Green</option>";
    $html .= "<option value='btn-inverse'".($params['selected']=='btn-inverse'?'selected=selected':'').">Black</option>";
    $html .= "<option value='btn-default'".($params['selected']=='btn-default'?'selected=selected':'').">Gray</option>";
    $html .= "<option value='btn-warning'".($params['selected']=='btn-warning'?'selected=selected':'').">Orange</option>";
    $html .= "<option value='btn-danger'".($params['selected']=='btn-danger'?'selected=selected':'').">Red</option>";
    $html .= "</select>";
    return $html;
}


function sensitive_custom_css(){
    ?>
    
    <style type="text/css">
    .footer,
    .navbar-wrapper{
        <?php if(($bg = sensitive_get_theme_opts('bg_image'))){ ?>
        background: url('<?php echo $bg; ?>');
        <?php } if(($scolor = sensitive_get_theme_opts('txt_color'))){ ?>
        color: <?php echo $scolor; ?>
        <?php } ?>
    }
    .footer p,
    .footer,
    .widget-footer h3,
    .footer a,
    .wpeden-intro h2,
    .wpeden-intro p{
      <?php if(($scolor = sensitive_get_theme_opts('txt_color'))){ ?>
        color: <?php echo $scolor; ?> !important;
        <?php } ?>  
    }
    
    </style>
    
    <?php
    
}
    
//theme option     
function sensitive_theme_options(){
global $settings_sections, $section;                                                                                                  /*Theme Option Function*/      
?>
    <div class="wrap wpeden-theme-options">                      
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12 margin0">
                        <div class="icon32 wpeden-icon"></div>
                        <h2 class="thm_heading">WPEden Theme Options &nbsp;&nbsp;&nbsp;&nbsp;<div class="btn-group">
                <a class="btn" href="http://wpeden.com/forums/" target="_blank">Support Forum</a> 
                <a class="btn btn-success" href="http://wpeden.com/product/sensitive-pro-responsive-multipurpose-wordpress-theme/" target="_blank">Sensitive <sup><em>pro</em></sup></a> 
                <a class="btn btn-info" href="http://wpeden.com/wordpress/themes/" target="_blank">More Themes</a> 
                <a class="btn btn-inverse" href="http://wpeden.com/wordpress/plugins/" target="_blank">Premium Plugins</a> 
                </div></h2> 
                    </div>     

            
                    <div class="span12 tabbable margin0">
                        <!-- Theme Option Sections -->
                        <ul class="nav nav-tabs">
                            <?php foreach($settings_sections as $section_id=>$section_name){ ?>
                            <li class="<?php echo $section==$section_id?'active':''; ?>"><a href="#<?php echo $section_id; ?>" data-toggle='tab'><?php echo $section_name; ?></a></li>    
                            <?php } ?>
                        </ul>
                        <!-- Theme Option Sections Ends -->
                        
                        <!-- Theme Option Fields for section # -->
                        <div class="tab-content">
                          <?php foreach($settings_sections as $section_id=>$section_name){ ?>
                            <div class="tab-pane <?php echo $section_id==$section?'active':''; ?>" id="<?php echo $section_id; ?>">
                            <form id="theme-admin-form" class="form-horizontal" action="options.php" method="post" enctype="multipart/form-data">
                                <?php 
                                  settings_fields( $section_id ); 
                                  do_settings_fields( 'wpeden-themeopts',$section_id );
                                ?>
                                <div class="control-group">            
                                         
                                        <div class="controls">
                                        <?php submit_button(); ?>
                                        <span id="loading" style="display: none;"><img src="images/loading.gif" alt=""> saving...</span>
                                        </div>
                            
                                </div>
                            </form>
                            </div>
                           <?php } ?> 
                           
              
                        </div> 
                        <!-- Theme Option Fields for section # Ends -->
                    </div>
                <div class="span12">
                
                </div>
</div>
</div>
 
</div>
<?php
        
}
  
 
add_action('admin_menu', 'sensitive_theme_opt_menu'); 
add_Action('wp_head','sensitive_custom_css');