<?php

/* __string_template__25bcc866810793128961057457ac85e3e85d2062784b573845e5940255d6ff39 */
class __TwigTemplate_7ec8b6668bd843a3c8957c5a2d0f767bff383eae9ee33fdb5c0e4d23bcf6c0e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48a61776f66d7b1e47763e6de0ff5f4cadacf0943c09f114a44b087b8b71fa83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a61776f66d7b1e47763e6de0ff5f4cadacf0943c09f114a44b087b8b71fa83->enter($__internal_48a61776f66d7b1e47763e6de0ff5f4cadacf0943c09f114a44b087b8b71fa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__25bcc866810793128961057457ac85e3e85d2062784b573845e5940255d6ff39"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Productos • roadmakshop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'es';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '1.7.2.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = 'd2cc670ba176be67f6014cdf39cb3361';
    var token_admin_orders = '3b332dc1c9ef6407fc71311610def45b';
    var token_admin_customers = '9696fd9dd67d7ad3a80ef08ba64c16b4';
    var token_admin_customer_threads = '163065fb43d85401c96c9d01a6e43e9c';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'e9158048035a06b6027319465f893b5d';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/admin723ek0usy/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin723ek0usy/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin723ek0usy/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin723ek0usy\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"d\\u00f3lar estadounidense\",\"format\":\"\\u00a4\\u00a0#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin723ek0usy/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/admin723ek0usy/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin723ek0usy/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://159.89.183.216/admin723ek0usy/index.php?controller=AdminGamification&token=429ba6310ede2eeee57520b49483ffc0';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminDashboard&amp;token=fef099f5735e24b0f27615d9176f7cef\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Acceso rápido</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php/module/manage?token=2fa5b37fca77bb81c820bcf78cafeffc\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCategories&amp;addcategory&amp;token=f6642d40a996ba4651531135ed72d8a2\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c8cd40f1c3a7f39620f2382ddf1deb94\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php/product/new?token=2fa5b37fca77bb81c820bcf78cafeffc\"
                 data-item=\"Nuevo producto\"
      >Nuevo producto</a>
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrders&amp;token=3b332dc1c9ef6407fc71311610def45b\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"113\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog\"
        data-post-link=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminQuickAccesses&token=1a6947c9aae2ebd3005beb6a5a64ad3a\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Productos - Lista\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminQuickAccesses&token=1a6947c9aae2ebd3005beb6a5a64ad3a\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin723ek0usy/index.php?controller=AdminSearch&amp;token=74e0e277a35ad5ccd769bc27af274e03\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          toda la tienda
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> toda la tienda</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catálogo
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clientes por nombre
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clientes por dirección IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Pedidos
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Facturas
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Carritos
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Módulos
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">BÚSQUEDA<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/aalviac%40uees.edu.ec.jpg\" /><br>
      <span>Software Factory</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminEmployees&amp;token=e9158048035a06b6027319465f893b5d&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Tu perfil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLogin&amp;token=7a6ac17f682b7be92f4503ae781ab199&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Cerrar sesión
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Ha enviado algún correo electrónico de adquisición últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://159.89.183.216/\" target= \"_blank\">roadmakshop</a>
  </div>
</div>
              <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\">Modo depuración</span>
        </div>
      </div>
        

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminDashboard&amp;token=fef099f5735e24b0f27615d9176f7cef\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrders&amp;token=3b332dc1c9ef6407fc71311610def45b\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Pedidos
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrders&amp;token=3b332dc1c9ef6407fc71311610def45b\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminInvoices&amp;token=a05873227c119df7b1469b7335705b51\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminSlip&amp;token=32c2eeeaba37d839be6eb1b52392cfd8\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminDeliverySlip&amp;token=41160ca1ac382595c3a7ecb0182789b3\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCarts&amp;token=675621da58bb536839a0230ddef2f577\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin723ek0usy/index.php/product/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catálogo
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin723ek0usy/index.php/product/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCategories&amp;token=f6642d40a996ba4651531135ed72d8a2\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminTracking&amp;token=88401b6a4a867743a12e6d65fc8900d4\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAttributesGroups&amp;token=7c65f2c686c4d4077e35c0b2e8dbc044\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminManufacturers&amp;token=4138ce60bd5a6499645ce64388c8574c\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAttachments&amp;token=ab677fd4fccc128d84220207df385c66\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCartRules&amp;token=c8cd40f1c3a7f39620f2382ddf1deb94\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/admin723ek0usy/index.php/stock/?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomers&amp;token=9696fd9dd67d7ad3a80ef08ba64c16b4\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clientes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomers&amp;token=9696fd9dd67d7ad3a80ef08ba64c16b4\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAddresses&amp;token=f180b070b381dd0ac4b842f907ad8132\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomerThreads&amp;token=163065fb43d85401c96c9d01a6e43e9c\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Servicio al Cliente
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomerThreads&amp;token=163065fb43d85401c96c9d01a6e43e9c\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrderMessage&amp;token=09e0ca16717e6b4c48c918f0579f0f08\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminReturn&amp;token=6417c9eca55e43e3386ee10edf7e9a62\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminStats&amp;token=7c05411bc417eaefa0c5f42778e27b6e\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Estadísticas
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/admin723ek0usy/index.php/module/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Módulos
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin723ek0usy/index.php/module/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\"> Módulos y Servicios
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAddonsCatalog&amp;token=a2979395561b7a4662b8775f0b6ffa23\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminThemes&amp;token=0aa44454452b52d55202198149d1c2a2\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Diseño
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminThemes&amp;token=0aa44454452b52d55202198149d1c2a2\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminThemesCatalog&amp;token=46dedb1d72cd183cdc08e2accb05f0d4\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCmsContent&amp;token=bbb32ee7fe57c146cd7ec680ede56f37\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminModulesPositions&amp;token=0b735f07eae844f441e4c9a39166a13f\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminImages&amp;token=fa7a034043081efae9255c15b27f40d6\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLinkWidget&amp;token=3c7fa8410ff9a671f05f4c1f008f3fbb\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCarriers&amp;token=adac07169fbe8d0c70ece30fd44255e8\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Transporte
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCarriers&amp;token=adac07169fbe8d0c70ece30fd44255e8\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminShipping&amp;token=7cf28d006181fac074f007369456e50a\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPayment&amp;token=ae64f4b6510f581ae6c468122c8c15d5\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pago
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPayment&amp;token=ae64f4b6510f581ae6c468122c8c15d5\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPaymentPreferences&amp;token=76202fcf822485a0d83cfacf05b1b2d0\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLocalization&amp;token=ed63eb84fbf85ce5db0ec6279f3310f6\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internacional
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLocalization&amp;token=ed63eb84fbf85ce5db0ec6279f3310f6\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCountries&amp;token=e876eedb307c88b940e1abd552149056\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminTaxes&amp;token=32b74089afdffa4fdc69ea94c117e9ba\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminTranslations&amp;token=f50e13485353a6d5c49b1d50bf9e3646\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPreferences&amp;token=acaac619661d972bfbc547627f4713f2\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parámetros de la tienda
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPreferences&amp;token=acaac619661d972bfbc547627f4713f2\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrderPreferences&amp;token=2b2b4cfa75b183923871a08967cc997e\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPPreferences&amp;token=be182ed2f1b5c26eefea3aea1ffb44ec\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomerPreferences&amp;token=53432a94f8e87838543a473a87210969\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminContacts&amp;token=ccfae3bb765c9dac15e6defec10fe6d9\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminMeta&amp;token=a3bd854a81c9b125591768e36d9ac0db\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminSearchConf&amp;token=749816b240a33cfe3182f21f58fff854\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminGamification&amp;token=429ba6310ede2eeee57520b49483ffc0\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminInformation&amp;token=8bf85f30ce87fbe8c05fbc3e40595a2b\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminInformation&amp;token=8bf85f30ce87fbe8c05fbc3e40595a2b\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPerformance&amp;token=78ac1c9489eb829304d1618e29946509\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAdminPreferences&amp;token=a517812534f8512ae3d616c692613af3\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminEmails&amp;token=e901665ee031d0356049c4cde53009ce\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminImport&amp;token=ab165ff16d7bf4bad897c5bb28931a63\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminEmployees&amp;token=e9158048035a06b6027319465f893b5d\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminRequestSql&amp;token=8936d12e3faadd9c50d6c2a87d89a7ed\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLogs&amp;token=385fc3fb2913cb0d3d9e50bc2c9e891b\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminWebservice&amp;token=ea89ec281e244e7708ce1ea4c2de64a4\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCatalog&amp;token=03d7c8974b6d3ed2e443518de7c8e82a\">Catálogo</a>
                  </li>
      
              <li>
                      <a href=\"/admin723ek0usy/index.php/product/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\">Productos</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Productos    </h2>
  

  
    <div class=\"toolbar-icons\">
                                  
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/admin723ek0usy/index.php/module/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\"          title=\"Módulos y Servicios recomendados\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Módulos y Servicios recomendados</span>
        </a>
            
                  <a class=\"toolbar-button\" href=\"http://help.prestashop.com/es/doc/AdminProducts?version=1.7.2.4&amp;country=es\" title=\"Ayuda\">
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Ayuda</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=aalviac%40uees.edu.ec&amp;firstname=Software&amp;lastname=Factory&amp;website=http%3A%2F%2F159.89.183.216%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin723ek0usy/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=aalviac%40uees.edu.ec&amp;firstname=Software&amp;lastname=Factory&amp;website=http%3A%2F%2F159.89.183.216%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1129
        $this->displayBlock('content_header', $context, $blocks);
        // line 1130
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1131
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1132
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1133
        echo "
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"m-t-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"m-t-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"m-t-2\">
    Gracias.
  </p>
  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminDashboard&amp;token=fef099f5735e24b0f27615d9176f7cef\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Tiempo de carga: \"></i> 2.199s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contacto
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Foro
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formación
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=aalviac%40uees.edu.ec&amp;firstname=Software&amp;lastname=Factory&amp;website=http%3A%2F%2F159.89.183.216%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin723ek0usy/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=aalviac%40uees.edu.ec&amp;firstname=Software&amp;lastname=Factory&amp;website=http%3A%2F%2F159.89.183.216%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1298
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_48a61776f66d7b1e47763e6de0ff5f4cadacf0943c09f114a44b087b8b71fa83->leave($__internal_48a61776f66d7b1e47763e6de0ff5f4cadacf0943c09f114a44b087b8b71fa83_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebfe827e650a3ce5abf1f1de03cb87b398baa01c61fb8059c3bb9891ddcc9521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfe827e650a3ce5abf1f1de03cb87b398baa01c61fb8059c3bb9891ddcc9521->enter($__internal_ebfe827e650a3ce5abf1f1de03cb87b398baa01c61fb8059c3bb9891ddcc9521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ebfe827e650a3ce5abf1f1de03cb87b398baa01c61fb8059c3bb9891ddcc9521->leave($__internal_ebfe827e650a3ce5abf1f1de03cb87b398baa01c61fb8059c3bb9891ddcc9521_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_a1f4ce7bfd74da47f490f7bdba5e1f66ce714f52652e32ce9ba1e78ce01c58b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f4ce7bfd74da47f490f7bdba5e1f66ce714f52652e32ce9ba1e78ce01c58b3->enter($__internal_a1f4ce7bfd74da47f490f7bdba5e1f66ce714f52652e32ce9ba1e78ce01c58b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_a1f4ce7bfd74da47f490f7bdba5e1f66ce714f52652e32ce9ba1e78ce01c58b3->leave($__internal_a1f4ce7bfd74da47f490f7bdba5e1f66ce714f52652e32ce9ba1e78ce01c58b3_prof);

    }

    // line 1129
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_682585272ebc6952497b6729c989d24d91280095bd9656f9e1b6cd54f0b77591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682585272ebc6952497b6729c989d24d91280095bd9656f9e1b6cd54f0b77591->enter($__internal_682585272ebc6952497b6729c989d24d91280095bd9656f9e1b6cd54f0b77591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_682585272ebc6952497b6729c989d24d91280095bd9656f9e1b6cd54f0b77591->leave($__internal_682585272ebc6952497b6729c989d24d91280095bd9656f9e1b6cd54f0b77591_prof);

    }

    // line 1130
    public function block_content($context, array $blocks = array())
    {
        $__internal_ebbfbf95f0b135f0de7dca0f3f5cf0eae9b0f221a0cf362fa0903d5cbfb76870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbfbf95f0b135f0de7dca0f3f5cf0eae9b0f221a0cf362fa0903d5cbfb76870->enter($__internal_ebbfbf95f0b135f0de7dca0f3f5cf0eae9b0f221a0cf362fa0903d5cbfb76870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ebbfbf95f0b135f0de7dca0f3f5cf0eae9b0f221a0cf362fa0903d5cbfb76870->leave($__internal_ebbfbf95f0b135f0de7dca0f3f5cf0eae9b0f221a0cf362fa0903d5cbfb76870_prof);

    }

    // line 1131
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_669b7850e198fd7ea21d08e7f1874271b06584a715eccb917a8b2d1dc1540c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669b7850e198fd7ea21d08e7f1874271b06584a715eccb917a8b2d1dc1540c8e->enter($__internal_669b7850e198fd7ea21d08e7f1874271b06584a715eccb917a8b2d1dc1540c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_669b7850e198fd7ea21d08e7f1874271b06584a715eccb917a8b2d1dc1540c8e->leave($__internal_669b7850e198fd7ea21d08e7f1874271b06584a715eccb917a8b2d1dc1540c8e_prof);

    }

    // line 1132
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_cd333a104da922903f5da1854a64a6497f9a68b8fed7a2326e92d243ad5d3a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd333a104da922903f5da1854a64a6497f9a68b8fed7a2326e92d243ad5d3a28->enter($__internal_cd333a104da922903f5da1854a64a6497f9a68b8fed7a2326e92d243ad5d3a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_cd333a104da922903f5da1854a64a6497f9a68b8fed7a2326e92d243ad5d3a28->leave($__internal_cd333a104da922903f5da1854a64a6497f9a68b8fed7a2326e92d243ad5d3a28_prof);

    }

    // line 1298
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3548714631c957ee20c8cfdf88208fb1983d285904281b55859e5843277b27d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3548714631c957ee20c8cfdf88208fb1983d285904281b55859e5843277b27d2->enter($__internal_3548714631c957ee20c8cfdf88208fb1983d285904281b55859e5843277b27d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3548714631c957ee20c8cfdf88208fb1983d285904281b55859e5843277b27d2->leave($__internal_3548714631c957ee20c8cfdf88208fb1983d285904281b55859e5843277b27d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_1fbad861f4b1bb9fafa50f17fa7cd7a42a9fae2dd960491af0948368c56eedad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fbad861f4b1bb9fafa50f17fa7cd7a42a9fae2dd960491af0948368c56eedad->enter($__internal_1fbad861f4b1bb9fafa50f17fa7cd7a42a9fae2dd960491af0948368c56eedad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_1fbad861f4b1bb9fafa50f17fa7cd7a42a9fae2dd960491af0948368c56eedad->leave($__internal_1fbad861f4b1bb9fafa50f17fa7cd7a42a9fae2dd960491af0948368c56eedad_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_d022c1b5b0f18ffd19487b63987dac305b33d00c3268c340d7014353d137c333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d022c1b5b0f18ffd19487b63987dac305b33d00c3268c340d7014353d137c333->enter($__internal_d022c1b5b0f18ffd19487b63987dac305b33d00c3268c340d7014353d137c333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_d022c1b5b0f18ffd19487b63987dac305b33d00c3268c340d7014353d137c333->leave($__internal_d022c1b5b0f18ffd19487b63987dac305b33d00c3268c340d7014353d137c333_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__25bcc866810793128961057457ac85e3e85d2062784b573845e5940255d6ff39";
    }

    public function getDebugInfo()
    {
        return array (  1419 => 1298,  1408 => 1132,  1397 => 1131,  1386 => 1130,  1375 => 1129,  1354 => 82,  1343 => 1298,  1176 => 1133,  1173 => 1132,  1170 => 1131,  1167 => 1130,  1165 => 1129,  114 => 82,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Productos • roadmakshop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'es';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '1.7.2.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = 'd2cc670ba176be67f6014cdf39cb3361';
    var token_admin_orders = '3b332dc1c9ef6407fc71311610def45b';
    var token_admin_customers = '9696fd9dd67d7ad3a80ef08ba64c16b4';
    var token_admin_customer_threads = '163065fb43d85401c96c9d01a6e43e9c';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'e9158048035a06b6027319465f893b5d';
    var choose_language_translate = 'Selecciona el idioma';
    var default_language = '1';
    var admin_modules_link = '/admin723ek0usy/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin723ek0usy/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin723ek0usy/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin723ek0usy\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"d\\u00f3lar estadounidense\",\"format\":\"\\u00a4\\u00a0#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin723ek0usy/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.2.4\"></script>
<script type=\"text/javascript\" src=\"/admin723ek0usy/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin723ek0usy/themes/default/js/vendor/nv.d3.min.js\"></script>


  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://159.89.183.216/admin723ek0usy/index.php?controller=AdminGamification&token=429ba6310ede2eeee57520b49483ffc0';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

    
    

    
    <i class=\"material-icons pull-left p-x-1 js-mobile-menu hidden-md-up\">menu</i>
    <a class=\"logo pull-left\" href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminDashboard&amp;token=fef099f5735e24b0f27615d9176f7cef\"></a>

    <div class=\"component pull-left hidden-md-down\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Acceso rápido</span> 
    <i class=\"material-icons arrow-down pull-right\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php/module/manage?token=2fa5b37fca77bb81c820bcf78cafeffc\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCategories&amp;addcategory&amp;token=f6642d40a996ba4651531135ed72d8a2\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c8cd40f1c3a7f39620f2382ddf1deb94\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php/product/new?token=2fa5b37fca77bb81c820bcf78cafeffc\"
                 data-item=\"Nuevo producto\"
      >Nuevo producto</a>
          <a class=\"dropdown-item\"
         href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrders&amp;token=3b332dc1c9ef6407fc71311610def45b\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <hr>
          <a
        class=\"dropdown-item js-quick-link\"
        data-rand=\"113\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog\"
        data-post-link=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminQuickAccesses&token=1a6947c9aae2ebd3005beb6a5a64ad3a\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Productos - Lista\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        Añadir esta página a Acceso rápido
      </a>
        <a class=\"dropdown-item\" href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminQuickAccesses&token=1a6947c9aae2ebd3005beb6a5a64ad3a\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
</div>
    <div class=\"component hidden-md-down\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/admin723ek0usy/index.php?controller=AdminSearch&amp;token=74e0e277a35ad5ccd769bc27af274e03\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          toda la tienda
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> toda la tienda</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, SKU, referencia...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catálogo
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, nombre...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clientes por nombre
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clientes por dirección IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Pedidos
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número de factura\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Facturas
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Carritos
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Módulos
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">BÚSQUEDA<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin hidden-md-down\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center employee_avatar\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/aalviac%40uees.edu.ec.jpg\" /><br>
      <span>Software Factory</span>
    </div>
    <hr>
    <a class=\"employee-link profile-link\" href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminEmployees&amp;token=e9158048035a06b6027319465f893b5d&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i> Tu perfil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLogin&amp;token=7a6ac17f682b7be92f4503ae781ab199&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Cerrar sesión
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-xs-right\"><div id=\"notif\" class=\"notification-center dropdown\">
  <div class=\"notification js-notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has comprobado recientemente la tasa de conversión?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Ha enviado algún correo electrónico de adquisición últimamente?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right hidden-md-down\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://159.89.183.216/\" target= \"_blank\">roadmakshop</a>
  </div>
</div>
              <div class=\"component pull-right hidden-md-down\">
        <div class=\"shop-state\" id=\"debug-mode\">
          <i class=\"material-icons\">bug_report</i>
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
            title=\"<p class='text-left text-nowrap'><strong>Tu tienda está en modo debug.</strong></p><p class='text-left'>Se muestran todos los errores y mensajes PHP. Cuando ya no los necesites, <strong>desactiva</strong> este modo.</p>\">Modo depuración</span>
        </div>
      </div>
        

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminDashboard&amp;token=fef099f5735e24b0f27615d9176f7cef\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down -active\" data-submenu=\"2\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrders&amp;token=3b332dc1c9ef6407fc71311610def45b\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i>
                    <span>
                    Pedidos
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrders&amp;token=3b332dc1c9ef6407fc71311610def45b\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminInvoices&amp;token=a05873227c119df7b1469b7335705b51\" class=\"link\"> Facturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminSlip&amp;token=32c2eeeaba37d839be6eb1b52392cfd8\" class=\"link\"> Facturas por abono
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminDeliverySlip&amp;token=41160ca1ac382595c3a7ecb0182789b3\" class=\"link\"> Albaranes de entrega
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCarts&amp;token=675621da58bb536839a0230ddef2f577\" class=\"link\"> Carritos de compra
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/admin723ek0usy/index.php/product/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\">
                    <i class=\"material-icons\">store</i>
                    <span>
                    Catálogo
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/admin723ek0usy/index.php/product/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\"> Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCategories&amp;token=f6642d40a996ba4651531135ed72d8a2\" class=\"link\"> Categorías
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminTracking&amp;token=88401b6a4a867743a12e6d65fc8900d4\" class=\"link\"> Monitoreo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAttributesGroups&amp;token=7c65f2c686c4d4077e35c0b2e8dbc044\" class=\"link\"> Atributos y Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminManufacturers&amp;token=4138ce60bd5a6499645ce64388c8574c\" class=\"link\"> Marcas y Proveedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAttachments&amp;token=ab677fd4fccc128d84220207df385c66\" class=\"link\"> Archivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCartRules&amp;token=c8cd40f1c3a7f39620f2382ddf1deb94\" class=\"link\"> Descuentos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\">
                              <a href=\"/admin723ek0usy/index.php/stock/?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"24\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomers&amp;token=9696fd9dd67d7ad3a80ef08ba64c16b4\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i>
                    <span>
                    Clientes
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomers&amp;token=9696fd9dd67d7ad3a80ef08ba64c16b4\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAddresses&amp;token=f180b070b381dd0ac4b842f907ad8132\" class=\"link\"> Direcciones
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"28\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomerThreads&amp;token=163065fb43d85401c96c9d01a6e43e9c\" class=\"link\">
                    <i class=\"material-icons\">chat</i>
                    <span>
                    Servicio al Cliente
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomerThreads&amp;token=163065fb43d85401c96c9d01a6e43e9c\" class=\"link\"> Servicio al Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrderMessage&amp;token=09e0ca16717e6b4c48c918f0579f0f08\" class=\"link\"> Mensajes de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminReturn&amp;token=6417c9eca55e43e3386ee10edf7e9a62\" class=\"link\"> Devoluciones de mercancía
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"32\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminStats&amp;token=7c05411bc417eaefa0c5f42778e27b6e\" class=\"link\">
                    <i class=\"material-icons\">assessment</i>
                    <span>
                    Estadísticas
                                        </span>

                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"42\">
              <span class=\"title\">Personalizar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"43\">
                  <a href=\"/admin723ek0usy/index.php/module/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\">
                    <i class=\"material-icons\">extension</i>
                    <span>
                    Módulos
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\">
                              <a href=\"/admin723ek0usy/index.php/module/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\" class=\"link\"> Módulos y Servicios
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAddonsCatalog&amp;token=a2979395561b7a4662b8775f0b6ffa23\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"47\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminThemes&amp;token=0aa44454452b52d55202198149d1c2a2\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i>
                    <span>
                    Diseño
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminThemes&amp;token=0aa44454452b52d55202198149d1c2a2\" class=\"link\"> Tema y logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminThemesCatalog&amp;token=46dedb1d72cd183cdc08e2accb05f0d4\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCmsContent&amp;token=bbb32ee7fe57c146cd7ec680ede56f37\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminModulesPositions&amp;token=0b735f07eae844f441e4c9a39166a13f\" class=\"link\"> Posiciones
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminImages&amp;token=fa7a034043081efae9255c15b27f40d6\" class=\"link\"> Ajustes de imágenes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLinkWidget&amp;token=3c7fa8410ff9a671f05f4c1f008f3fbb\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"53\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCarriers&amp;token=adac07169fbe8d0c70ece30fd44255e8\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i>
                    <span>
                    Transporte
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCarriers&amp;token=adac07169fbe8d0c70ece30fd44255e8\" class=\"link\"> Transportistas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminShipping&amp;token=7cf28d006181fac074f007369456e50a\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"56\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPayment&amp;token=ae64f4b6510f581ae6c468122c8c15d5\" class=\"link\">
                    <i class=\"material-icons\">payment</i>
                    <span>
                    Pago
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPayment&amp;token=ae64f4b6510f581ae6c468122c8c15d5\" class=\"link\"> Métodos de pago
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPaymentPreferences&amp;token=76202fcf822485a0d83cfacf05b1b2d0\" class=\"link\"> Preferencias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"59\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLocalization&amp;token=ed63eb84fbf85ce5db0ec6279f3310f6\" class=\"link\">
                    <i class=\"material-icons\">language</i>
                    <span>
                    Internacional
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLocalization&amp;token=ed63eb84fbf85ce5db0ec6279f3310f6\" class=\"link\"> Localización
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCountries&amp;token=e876eedb307c88b940e1abd552149056\" class=\"link\"> Ubicaciones Geográficas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminTaxes&amp;token=32b74089afdffa4fdc69ea94c117e9ba\" class=\"link\"> Impuestos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminTranslations&amp;token=f50e13485353a6d5c49b1d50bf9e3646\" class=\"link\"> Traducciones
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title hidden-sm-down \" data-submenu=\"73\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"74\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPreferences&amp;token=acaac619661d972bfbc547627f4713f2\" class=\"link\">
                    <i class=\"material-icons\">settings</i>
                    <span>
                    Parámetros de la tienda
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPreferences&amp;token=acaac619661d972bfbc547627f4713f2\" class=\"link\"> Configuración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminOrderPreferences&amp;token=2b2b4cfa75b183923871a08967cc997e\" class=\"link\"> Configuración de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPPreferences&amp;token=be182ed2f1b5c26eefea3aea1ffb44ec\" class=\"link\"> Configuración de Productos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCustomerPreferences&amp;token=53432a94f8e87838543a473a87210969\" class=\"link\"> Ajustes sobre clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminContacts&amp;token=ccfae3bb765c9dac15e6defec10fe6d9\" class=\"link\"> Contacto
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminMeta&amp;token=a3bd854a81c9b125591768e36d9ac0db\" class=\"link\"> Tráfico &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminSearchConf&amp;token=749816b240a33cfe3182f21f58fff854\" class=\"link\"> Buscar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminGamification&amp;token=429ba6310ede2eeee57520b49483ffc0\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"96\">
                  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminInformation&amp;token=8bf85f30ce87fbe8c05fbc3e40595a2b\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i>
                    <span>
                    Parámetros Avanzados
                                          <i class=\"material-icons pull-right hidden-md-up\">keyboard_arrow_down</i>
                                        </span>

                  </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminInformation&amp;token=8bf85f30ce87fbe8c05fbc3e40595a2b\" class=\"link\"> Información
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminPerformance&amp;token=78ac1c9489eb829304d1618e29946509\" class=\"link\"> Rendimiento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminAdminPreferences&amp;token=a517812534f8512ae3d616c692613af3\" class=\"link\"> Administración
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminEmails&amp;token=e901665ee031d0356049c4cde53009ce\" class=\"link\"> Dirección de correo electrónico
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminImport&amp;token=ab165ff16d7bf4bad897c5bb28931a63\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminEmployees&amp;token=e9158048035a06b6027319465f893b5d\" class=\"link\"> Equipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminRequestSql&amp;token=8936d12e3faadd9c50d6c2a87d89a7ed\" class=\"link\"> Base de datos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminLogs&amp;token=385fc3fb2913cb0d3d9e50bc2c9e891b\" class=\"link\"> Registros/Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\">
                              <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminWebservice&amp;token=ea89ec281e244e7708ce1ea4c2de64a4\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse hidden-md-down\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminCatalog&amp;token=03d7c8974b6d3ed2e443518de7c8e82a\">Catálogo</a>
                  </li>
      
              <li>
                      <a href=\"/admin723ek0usy/index.php/product/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\">Productos</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Productos    </h2>
  

  
    <div class=\"toolbar-icons\">
                                  
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/admin723ek0usy/index.php/module/catalog?_token=fTFrOdyS3BeBY5w17BcEz8hMxzIK8nAWxudKgR7VuEY\"          title=\"Módulos y Servicios recomendados\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Módulos y Servicios recomendados</span>
        </a>
            
                  <a class=\"toolbar-button\" href=\"http://help.prestashop.com/es/doc/AdminProducts?version=1.7.2.4&amp;country=es\" title=\"Ayuda\">
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Ayuda</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=aalviac%40uees.edu.ec&amp;firstname=Software&amp;lastname=Factory&amp;website=http%3A%2F%2F159.89.183.216%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin723ek0usy/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=aalviac%40uees.edu.ec&amp;firstname=Software&amp;lastname=Factory&amp;website=http%3A%2F%2F159.89.183.216%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div \">

      

      

      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"m-t-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"m-t-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"m-t-2\">
    Gracias.
  </p>
  <a href=\"http://159.89.183.216/admin723ek0usy/index.php?controller=AdminDashboard&amp;token=fef099f5735e24b0f27615d9176f7cef\" class=\"btn btn-primary p-y-1 m-t-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
<div class=\"mobile-layer\"></div>



  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Tiempo de carga: \"></i> 2.199s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contacto
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Foro
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ES&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formación
      </a>
                </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ES&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/es/login?email=aalviac%40uees.edu.ec&amp;firstname=Software&amp;lastname=Factory&amp;website=http%3A%2F%2F159.89.183.216%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin723ek0usy/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tienes una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/es/forgot-your-password\">He olvidado mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/es/login?email=aalviac%40uees.edu.ec&amp;firstname=Software&amp;lastname=Factory&amp;website=http%3A%2F%2F159.89.183.216%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ES&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una Cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__25bcc866810793128961057457ac85e3e85d2062784b573845e5940255d6ff39", "");
    }
}
