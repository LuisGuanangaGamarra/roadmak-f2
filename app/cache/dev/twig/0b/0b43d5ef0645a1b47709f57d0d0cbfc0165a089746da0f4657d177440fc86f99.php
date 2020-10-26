<?php

/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f4165fd2c0e1066b8a9551652e811ad67bd6651acd443894c392cc02ab670832 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 26);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
            'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75db7e33281b030ec9e1069f880bf2cd1679538ef40537333ff6a74e422e4911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75db7e33281b030ec9e1069f880bf2cd1679538ef40537333ff6a74e422e4911->enter($__internal_75db7e33281b030ec9e1069f880bf2cd1679538ef40537333ff6a74e422e4911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        // line 25
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["categories"] ?? $this->getContext($context, "categories")), array(0 => $this));
        // line 26
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75db7e33281b030ec9e1069f880bf2cd1679538ef40537333ff6a74e422e4911->leave($__internal_75db7e33281b030ec9e1069f880bf2cd1679538ef40537333ff6a74e422e4911_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9d2ae9ab1a4b0f57e4988fe4bcadb9602f5884c2b222bc77536f3c5662e54ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9d2ae9ab1a4b0f57e4988fe4bcadb9602f5884c2b222bc77536f3c5662e54ae->enter($__internal_b9d2ae9ab1a4b0f57e4988fe4bcadb9602f5884c2b222bc77536f3c5662e54ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b9d2ae9ab1a4b0f57e4988fe4bcadb9602f5884c2b222bc77536f3c5662e54ae->leave($__internal_b9d2ae9ab1a4b0f57e4988fe4bcadb9602f5884c2b222bc77536f3c5662e54ae_prof);

    }

    // line 36
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_dbf70262ed7e3d3657b34f74eb1efe7bf4c8318ec9656dd66e3ae925f686d563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf70262ed7e3d3657b34f74eb1efe7bf4c8318ec9656dd66e3ae925f686d563->enter($__internal_dbf70262ed7e3d3657b34f74eb1efe7bf4c8318ec9656dd66e3ae925f686d563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 37
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <ul class=\"category-tree\">";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 40
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</ul>
    </div>";
        
        $__internal_dbf70262ed7e3d3657b34f74eb1efe7bf4c8318ec9656dd66e3ae925f686d563->leave($__internal_dbf70262ed7e3d3657b34f74eb1efe7bf4c8318ec9656dd66e3ae925f686d563_prof);

    }

    // line 46
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_5a681d408bac4d7f619d051308aff34c6b1337eccd38083ce42e4c866c6f7788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a681d408bac4d7f619d051308aff34c6b1337eccd38083ce42e4c866c6f7788->enter($__internal_5a681d408bac4d7f619d051308aff34c6b1337eccd38083ce42e4c866c6f7788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 47
        echo "<li>
        ";
        // line 48
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 49
        echo "
         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
        echo "
                 <input
                   type=\"radio\"
                   name=\"form[";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "][tree]\"
                   value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
        echo "\" ";
        echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
        echo "
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        ";
        // line 61
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 62
            echo "            <ul>
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "                    ";
                $context["child"] = $context["item"];
                // line 65
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "</ul>
        ";
        }
        // line 69
        echo "    </li>";
        
        $__internal_5a681d408bac4d7f619d051308aff34c6b1337eccd38083ce42e4c866c6f7788->leave($__internal_5a681d408bac4d7f619d051308aff34c6b1337eccd38083ce42e4c866c6f7788_prof);

    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        $__internal_13e2ceb327b3716814052eb7192a1989734903f7c555c8225b82c1aecd0b0023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e2ceb327b3716814052eb7192a1989734903f7c555c8225b82c1aecd0b0023->enter($__internal_13e2ceb327b3716814052eb7192a1989734903f7c555c8225b82c1aecd0b0023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 73
        echo "
  <div class=\"products-catalog\">

    ";
        // line 76
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", array("kpi_controller" => "AdminProductsController"));
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 80
        if (twig_length_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")))) {
            // line 81
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              ";
            // line 87
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        // line 93
        echo "
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_export_action");
        echo "\">
              ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), 1 => "cloud_upload"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"";
        // line 100
        echo twig_escape_filter($this->env, ($context["import_link"] ?? $this->getContext($context, "import_link")), "html", null, true);
        echo "\">
              ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), 1 => "cloud_download"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", array(), "Admin.Actions"), 1 => "code"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), 1 => "storage"), "method"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", array("action" => "activate_all"));
        echo "\"
          massediturl=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", array("action" => "sort"));
        echo "\"
          redirecturl=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
          redirecturlnextpage=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "offset" => (($context["offset"] ?? $this->getContext($context, "offset")) + ($context["limit"] ?? $this->getContext($context, "limit"))), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        >
          ";
        // line 134
        $context["buttons_action"] = array(0 => array("onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", array(), "Admin.Actions")), 1 => array("onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", array(), "Admin.Actions")));
        // line 146
        echo "
          ";
        // line 147
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", array(), "Admin.Actions"))));
        // line 157
        echo "

          ";
        // line 159
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", array(), "Admin.Actions"))));
        // line 179
        echo "        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          ";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", array(), "Admin.Actions"), "html", null, true);
        echo "
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              ";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              ";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              ";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <hr>
            ";
        // line 221
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["categories"] ?? $this->getContext($context, "categories")), 'widget');
        echo "
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        orderingurl=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => "name", "sortOrder" => "asc")), "html", null, true);
        echo "\"
        newproducturl=\"";
        // line 232
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter(($context["filter_category"] ?? $this->getContext($context, "filter_category")), "")) : ("")), "html", null, true);
        echo "\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 245
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 246
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 247
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 248
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        // line 249
        echo "\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    ";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 255
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 255)->display(array_merge($context, array("column" => "id_product")));
        // line 258
        echo "                  </th>
                  <th>
                    ";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", array(), "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th>
                    ";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 264
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 264)->display(array_merge($context, array("column" => "name")));
        // line 267
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 270
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 270)->display(array_merge($context, array("column" => "reference")));
        // line 273
        echo "                  </th>
                  <th>
                    ";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 276
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 276)->display(array_merge($context, array("column" => "name_category")));
        // line 279
        echo "                  </th>
                  <th style=\"width: 9%\">
                    ";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 282
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 282)->display(array_merge($context, array("column" => "price")));
        // line 285
        echo "                  </th>

                  ";
        // line 287
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 288
            echo "                  <th style=\"width: 9%\">
                    ";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                    ";
            // line 290
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 290)->display(array_merge($context, array("column" => "sav_quantity")));
            // line 293
            echo "                  </th>
                  ";
        } else {
            // line 295
            echo "                    <th></th>
                  ";
        }
        // line 297
        echo "
                  <th>
                    ";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 300
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 300)->display(array_merge($context, array("column" => "active")));
        // line 303
        echo "                  </th>
                  ";
        // line 304
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 305
            echo "                    <th>
                      ";
            // line 306
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), "html", null, true);
            echo "
                      ";
            // line 307
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 307)->display(array_merge($context, array("column" => "position")));
            // line 310
            echo "                    </th>
                  ";
        }
        // line 312
        echo "                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    ";
        // line 316
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 316)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 322
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")))));
        // line 324
        echo "                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name\"
                      value=\"";
        // line 332
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_reference\"
                      value=\"";
        // line 341
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name_category\"
                      value=\"";
        // line 350
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    ";
        // line 354
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 354)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 360
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")))));
        // line 362
        echo "                  </th>

                  ";
        // line 364
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 365
            echo "                  <th>
                    ";
            // line 366
            $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 366)->display(array_merge($context, array("input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>             // line 372
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")))));
            // line 374
            echo "                  </th>
                  ";
        } else {
            // line 376
            echo "                    <th></th>
                  ";
        }
        // line 378
        echo "
                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" ";
        // line 382
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                      <option value=\"0\" ";
        // line 383
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
                    </select>
                  </th>
                  ";
        // line 386
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 387
            echo "                    <th>
                      ";
            // line 388
            if ( !($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                // line 389
                echo "                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", array(), "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                        ";
            } else {
                // line 391
                echo "                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", array(), "Admin.Actions");
                echo "\" />
                    ";
            }
            // line 393
            echo "
                    </th>
                  ";
        }
        // line 396
        echo "                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">search</i>
                      ";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">clear</i>
                      ";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                  </th>
                </tr>
              </thead>
              ";
        // line 419
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 420
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 421
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 422
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 423
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "products" =>         // line 424
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 425
($context["last_sql"] ?? $this->getContext($context, "last_sql")))));
        // line 426
        echo "
            </table>
          </div>
        </div>

        ";
        // line 431
        if ((($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")) > 20)) {
            // line 432
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 434
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 435
($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "total" => ($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "caller_parameters" => ($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "limit_choices" => ($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices")))));
            // line 436
            echo "
            </div>
          </div>
        ";
        }
        // line 440
        echo "
      </form>

    </div>
  </div>

  ";
        // line 447
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 447, "188437947")->display(array_merge($context, array("id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 466
        echo "

  ";
        // line 469
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 469, "2001530980")->display(array_merge($context, array("id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 488
        echo "

  ";
        // line 491
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 491, "1524500262")->display(array_merge($context, array("id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 510
        echo "

  ";
        // line 513
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 513, "996168339")->display(array_merge($context, array("id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 532
        echo "

  ";
        // line 535
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 535, "392392942")->display(array_merge($context, array("id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", array(), "Admin.Catalog.Feature"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", array(), "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg")))));
        // line 552
        echo "
  ";
        // line 553
        $this->loadTemplate("PrestaShopBundle:Admin\\Product:catalog.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 553, "1439564225")->display(array_merge($context, array("id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg")))));
        // line 573
        echo "
";
        
        $__internal_13e2ceb327b3716814052eb7192a1989734903f7c555c8225b82c1aecd0b0023->leave($__internal_13e2ceb327b3716814052eb7192a1989734903f7c555c8225b82c1aecd0b0023_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  789 => 573,  787 => 553,  784 => 552,  781 => 535,  777 => 532,  774 => 513,  770 => 510,  767 => 491,  763 => 488,  760 => 469,  756 => 466,  753 => 447,  745 => 440,  739 => 436,  737 => 435,  736 => 434,  732 => 432,  730 => 431,  723 => 426,  721 => 425,  720 => 424,  719 => 423,  718 => 422,  717 => 421,  716 => 420,  715 => 419,  707 => 414,  701 => 411,  691 => 404,  685 => 401,  678 => 396,  673 => 393,  667 => 391,  661 => 389,  659 => 388,  656 => 387,  654 => 386,  646 => 383,  640 => 382,  634 => 378,  630 => 376,  626 => 374,  624 => 372,  623 => 366,  620 => 365,  618 => 364,  614 => 362,  612 => 360,  611 => 354,  604 => 350,  599 => 348,  589 => 341,  584 => 339,  574 => 332,  569 => 330,  561 => 324,  559 => 322,  558 => 316,  552 => 312,  548 => 310,  546 => 307,  542 => 306,  539 => 305,  537 => 304,  534 => 303,  532 => 300,  528 => 299,  524 => 297,  520 => 295,  516 => 293,  514 => 290,  510 => 289,  507 => 288,  505 => 287,  501 => 285,  499 => 282,  495 => 281,  491 => 279,  489 => 276,  485 => 275,  481 => 273,  479 => 270,  475 => 269,  471 => 267,  469 => 264,  465 => 263,  459 => 260,  455 => 258,  453 => 255,  449 => 254,  442 => 249,  440 => 248,  439 => 247,  438 => 246,  437 => 245,  436 => 244,  425 => 236,  418 => 232,  414 => 231,  410 => 230,  398 => 221,  392 => 218,  379 => 208,  366 => 198,  351 => 186,  342 => 179,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#** 
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}
{#**  
          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}  *#}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/var/www/roadmakshop/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f4165fd2c0e1066b8a9551652e811ad67bd6651acd443894c392cc02ab670832_188437947 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 447
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 447);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cb209bef0a6674327f3f6a0bb4f2ccf7514c191e3aab6fbeb7e8e15744ff730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb209bef0a6674327f3f6a0bb4f2ccf7514c191e3aab6fbeb7e8e15744ff730->enter($__internal_9cb209bef0a6674327f3f6a0bb4f2ccf7514c191e3aab6fbeb7e8e15744ff730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb209bef0a6674327f3f6a0bb4f2ccf7514c191e3aab6fbeb7e8e15744ff730->leave($__internal_9cb209bef0a6674327f3f6a0bb4f2ccf7514c191e3aab6fbeb7e8e15744ff730_prof);

    }

    // line 457
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0acae190fd2fada727df3d7fa93f83c0345c43c694fd91becee332733fb7e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0acae190fd2fada727df3d7fa93f83c0345c43c694fd91becee332733fb7e34->enter($__internal_c0acae190fd2fada727df3d7fa93f83c0345c43c694fd91becee332733fb7e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 458
        echo "      <div class=\"modal-body\">
        ";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_c0acae190fd2fada727df3d7fa93f83c0345c43c694fd91becee332733fb7e34->leave($__internal_c0acae190fd2fada727df3d7fa93f83c0345c43c694fd91becee332733fb7e34_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1445 => 461,  1440 => 459,  1437 => 458,  1431 => 457,  1408 => 447,  789 => 573,  787 => 553,  784 => 552,  781 => 535,  777 => 532,  774 => 513,  770 => 510,  767 => 491,  763 => 488,  760 => 469,  756 => 466,  753 => 447,  745 => 440,  739 => 436,  737 => 435,  736 => 434,  732 => 432,  730 => 431,  723 => 426,  721 => 425,  720 => 424,  719 => 423,  718 => 422,  717 => 421,  716 => 420,  715 => 419,  707 => 414,  701 => 411,  691 => 404,  685 => 401,  678 => 396,  673 => 393,  667 => 391,  661 => 389,  659 => 388,  656 => 387,  654 => 386,  646 => 383,  640 => 382,  634 => 378,  630 => 376,  626 => 374,  624 => 372,  623 => 366,  620 => 365,  618 => 364,  614 => 362,  612 => 360,  611 => 354,  604 => 350,  599 => 348,  589 => 341,  584 => 339,  574 => 332,  569 => 330,  561 => 324,  559 => 322,  558 => 316,  552 => 312,  548 => 310,  546 => 307,  542 => 306,  539 => 305,  537 => 304,  534 => 303,  532 => 300,  528 => 299,  524 => 297,  520 => 295,  516 => 293,  514 => 290,  510 => 289,  507 => 288,  505 => 287,  501 => 285,  499 => 282,  495 => 281,  491 => 279,  489 => 276,  485 => 275,  481 => 273,  479 => 270,  475 => 269,  471 => 267,  469 => 264,  465 => 263,  459 => 260,  455 => 258,  453 => 255,  449 => 254,  442 => 249,  440 => 248,  439 => 247,  438 => 246,  437 => 245,  436 => 244,  425 => 236,  418 => 232,  414 => 231,  410 => 230,  398 => 221,  392 => 218,  379 => 208,  366 => 198,  351 => 186,  342 => 179,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#** 
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}
{#**  
          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}  *#}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/var/www/roadmakshop/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f4165fd2c0e1066b8a9551652e811ad67bd6651acd443894c392cc02ab670832_2001530980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 469
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 469);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ecbbaae7ed84f8542dfeaf01ef71080a1298926728e12e162e20060e3b90f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ecbbaae7ed84f8542dfeaf01ef71080a1298926728e12e162e20060e3b90f77->enter($__internal_1ecbbaae7ed84f8542dfeaf01ef71080a1298926728e12e162e20060e3b90f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ecbbaae7ed84f8542dfeaf01ef71080a1298926728e12e162e20060e3b90f77->leave($__internal_1ecbbaae7ed84f8542dfeaf01ef71080a1298926728e12e162e20060e3b90f77_prof);

    }

    // line 479
    public function block_content($context, array $blocks = array())
    {
        $__internal_26d4aacada49009f60f41e3f4251d4cf368267ce507ae0024e1c6bba7fcb124b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d4aacada49009f60f41e3f4251d4cf368267ce507ae0024e1c6bba7fcb124b->enter($__internal_26d4aacada49009f60f41e3f4251d4cf368267ce507ae0024e1c6bba7fcb124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 480
        echo "      <div class=\"modal-body\">
        ";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_26d4aacada49009f60f41e3f4251d4cf368267ce507ae0024e1c6bba7fcb124b->leave($__internal_26d4aacada49009f60f41e3f4251d4cf368267ce507ae0024e1c6bba7fcb124b_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2104 => 483,  2099 => 481,  2096 => 480,  2090 => 479,  2067 => 469,  1445 => 461,  1440 => 459,  1437 => 458,  1431 => 457,  1408 => 447,  789 => 573,  787 => 553,  784 => 552,  781 => 535,  777 => 532,  774 => 513,  770 => 510,  767 => 491,  763 => 488,  760 => 469,  756 => 466,  753 => 447,  745 => 440,  739 => 436,  737 => 435,  736 => 434,  732 => 432,  730 => 431,  723 => 426,  721 => 425,  720 => 424,  719 => 423,  718 => 422,  717 => 421,  716 => 420,  715 => 419,  707 => 414,  701 => 411,  691 => 404,  685 => 401,  678 => 396,  673 => 393,  667 => 391,  661 => 389,  659 => 388,  656 => 387,  654 => 386,  646 => 383,  640 => 382,  634 => 378,  630 => 376,  626 => 374,  624 => 372,  623 => 366,  620 => 365,  618 => 364,  614 => 362,  612 => 360,  611 => 354,  604 => 350,  599 => 348,  589 => 341,  584 => 339,  574 => 332,  569 => 330,  561 => 324,  559 => 322,  558 => 316,  552 => 312,  548 => 310,  546 => 307,  542 => 306,  539 => 305,  537 => 304,  534 => 303,  532 => 300,  528 => 299,  524 => 297,  520 => 295,  516 => 293,  514 => 290,  510 => 289,  507 => 288,  505 => 287,  501 => 285,  499 => 282,  495 => 281,  491 => 279,  489 => 276,  485 => 275,  481 => 273,  479 => 270,  475 => 269,  471 => 267,  469 => 264,  465 => 263,  459 => 260,  455 => 258,  453 => 255,  449 => 254,  442 => 249,  440 => 248,  439 => 247,  438 => 246,  437 => 245,  436 => 244,  425 => 236,  418 => 232,  414 => 231,  410 => 230,  398 => 221,  392 => 218,  379 => 208,  366 => 198,  351 => 186,  342 => 179,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#** 
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}
{#**  
          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}  *#}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/var/www/roadmakshop/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f4165fd2c0e1066b8a9551652e811ad67bd6651acd443894c392cc02ab670832_1524500262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 491
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 491);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47d9e33c17da1a50347292ece815962cf4774e5430cc8dd9913d14b59642c2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d9e33c17da1a50347292ece815962cf4774e5430cc8dd9913d14b59642c2b2->enter($__internal_47d9e33c17da1a50347292ece815962cf4774e5430cc8dd9913d14b59642c2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d9e33c17da1a50347292ece815962cf4774e5430cc8dd9913d14b59642c2b2->leave($__internal_47d9e33c17da1a50347292ece815962cf4774e5430cc8dd9913d14b59642c2b2_prof);

    }

    // line 501
    public function block_content($context, array $blocks = array())
    {
        $__internal_9945c53ffbe1dce617d1d74c27fcde7ca89f38e1161cd95e373700e44d710a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9945c53ffbe1dce617d1d74c27fcde7ca89f38e1161cd95e373700e44d710a81->enter($__internal_9945c53ffbe1dce617d1d74c27fcde7ca89f38e1161cd95e373700e44d710a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 502
        echo "      <div class=\"modal-body\">
        ";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_9945c53ffbe1dce617d1d74c27fcde7ca89f38e1161cd95e373700e44d710a81->leave($__internal_9945c53ffbe1dce617d1d74c27fcde7ca89f38e1161cd95e373700e44d710a81_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2763 => 505,  2758 => 503,  2755 => 502,  2749 => 501,  2726 => 491,  2104 => 483,  2099 => 481,  2096 => 480,  2090 => 479,  2067 => 469,  1445 => 461,  1440 => 459,  1437 => 458,  1431 => 457,  1408 => 447,  789 => 573,  787 => 553,  784 => 552,  781 => 535,  777 => 532,  774 => 513,  770 => 510,  767 => 491,  763 => 488,  760 => 469,  756 => 466,  753 => 447,  745 => 440,  739 => 436,  737 => 435,  736 => 434,  732 => 432,  730 => 431,  723 => 426,  721 => 425,  720 => 424,  719 => 423,  718 => 422,  717 => 421,  716 => 420,  715 => 419,  707 => 414,  701 => 411,  691 => 404,  685 => 401,  678 => 396,  673 => 393,  667 => 391,  661 => 389,  659 => 388,  656 => 387,  654 => 386,  646 => 383,  640 => 382,  634 => 378,  630 => 376,  626 => 374,  624 => 372,  623 => 366,  620 => 365,  618 => 364,  614 => 362,  612 => 360,  611 => 354,  604 => 350,  599 => 348,  589 => 341,  584 => 339,  574 => 332,  569 => 330,  561 => 324,  559 => 322,  558 => 316,  552 => 312,  548 => 310,  546 => 307,  542 => 306,  539 => 305,  537 => 304,  534 => 303,  532 => 300,  528 => 299,  524 => 297,  520 => 295,  516 => 293,  514 => 290,  510 => 289,  507 => 288,  505 => 287,  501 => 285,  499 => 282,  495 => 281,  491 => 279,  489 => 276,  485 => 275,  481 => 273,  479 => 270,  475 => 269,  471 => 267,  469 => 264,  465 => 263,  459 => 260,  455 => 258,  453 => 255,  449 => 254,  442 => 249,  440 => 248,  439 => 247,  438 => 246,  437 => 245,  436 => 244,  425 => 236,  418 => 232,  414 => 231,  410 => 230,  398 => 221,  392 => 218,  379 => 208,  366 => 198,  351 => 186,  342 => 179,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#** 
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}
{#**  
          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}  *#}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/var/www/roadmakshop/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f4165fd2c0e1066b8a9551652e811ad67bd6651acd443894c392cc02ab670832_996168339 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 513
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 513);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfc22bc0b9b1054ae17f1356ff181ccb40bbdc8718e6755c115dd772dbe48ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc22bc0b9b1054ae17f1356ff181ccb40bbdc8718e6755c115dd772dbe48ab8->enter($__internal_bfc22bc0b9b1054ae17f1356ff181ccb40bbdc8718e6755c115dd772dbe48ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc22bc0b9b1054ae17f1356ff181ccb40bbdc8718e6755c115dd772dbe48ab8->leave($__internal_bfc22bc0b9b1054ae17f1356ff181ccb40bbdc8718e6755c115dd772dbe48ab8_prof);

    }

    // line 523
    public function block_content($context, array $blocks = array())
    {
        $__internal_51ee804b2d4dfdd6ff133324b7be47edc184de0afc075483a4fbc045056ec3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ee804b2d4dfdd6ff133324b7be47edc184de0afc075483a4fbc045056ec3f5->enter($__internal_51ee804b2d4dfdd6ff133324b7be47edc184de0afc075483a4fbc045056ec3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 524
        echo "      <div class=\"modal-body\">
        ";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_51ee804b2d4dfdd6ff133324b7be47edc184de0afc075483a4fbc045056ec3f5->leave($__internal_51ee804b2d4dfdd6ff133324b7be47edc184de0afc075483a4fbc045056ec3f5_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3422 => 527,  3417 => 525,  3414 => 524,  3408 => 523,  3385 => 513,  2763 => 505,  2758 => 503,  2755 => 502,  2749 => 501,  2726 => 491,  2104 => 483,  2099 => 481,  2096 => 480,  2090 => 479,  2067 => 469,  1445 => 461,  1440 => 459,  1437 => 458,  1431 => 457,  1408 => 447,  789 => 573,  787 => 553,  784 => 552,  781 => 535,  777 => 532,  774 => 513,  770 => 510,  767 => 491,  763 => 488,  760 => 469,  756 => 466,  753 => 447,  745 => 440,  739 => 436,  737 => 435,  736 => 434,  732 => 432,  730 => 431,  723 => 426,  721 => 425,  720 => 424,  719 => 423,  718 => 422,  717 => 421,  716 => 420,  715 => 419,  707 => 414,  701 => 411,  691 => 404,  685 => 401,  678 => 396,  673 => 393,  667 => 391,  661 => 389,  659 => 388,  656 => 387,  654 => 386,  646 => 383,  640 => 382,  634 => 378,  630 => 376,  626 => 374,  624 => 372,  623 => 366,  620 => 365,  618 => 364,  614 => 362,  612 => 360,  611 => 354,  604 => 350,  599 => 348,  589 => 341,  584 => 339,  574 => 332,  569 => 330,  561 => 324,  559 => 322,  558 => 316,  552 => 312,  548 => 310,  546 => 307,  542 => 306,  539 => 305,  537 => 304,  534 => 303,  532 => 300,  528 => 299,  524 => 297,  520 => 295,  516 => 293,  514 => 290,  510 => 289,  507 => 288,  505 => 287,  501 => 285,  499 => 282,  495 => 281,  491 => 279,  489 => 276,  485 => 275,  481 => 273,  479 => 270,  475 => 269,  471 => 267,  469 => 264,  465 => 263,  459 => 260,  455 => 258,  453 => 255,  449 => 254,  442 => 249,  440 => 248,  439 => 247,  438 => 246,  437 => 245,  436 => 244,  425 => 236,  418 => 232,  414 => 231,  410 => 230,  398 => 221,  392 => 218,  379 => 208,  366 => 198,  351 => 186,  342 => 179,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#** 
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}
{#**  
          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}  *#}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/var/www/roadmakshop/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f4165fd2c0e1066b8a9551652e811ad67bd6651acd443894c392cc02ab670832_392392942 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 535
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 535);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_700d1be3193c3c771aa8de3295f1e38852b844bda8971952c6534489642379c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700d1be3193c3c771aa8de3295f1e38852b844bda8971952c6534489642379c0->enter($__internal_700d1be3193c3c771aa8de3295f1e38852b844bda8971952c6534489642379c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_700d1be3193c3c771aa8de3295f1e38852b844bda8971952c6534489642379c0->leave($__internal_700d1be3193c3c771aa8de3295f1e38852b844bda8971952c6534489642379c0_prof);

    }

    // line 546
    public function block_content($context, array $blocks = array())
    {
        $__internal_c501342d3631a163684f3a49e7650866e36a68fb498f1a551d8d15b72e0e0a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c501342d3631a163684f3a49e7650866e36a68fb498f1a551d8d15b72e0e0a72->enter($__internal_c501342d3631a163684f3a49e7650866e36a68fb498f1a551d8d15b72e0e0a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 547
        echo "      <div class=\"modal-body\">
        ";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
        
        $__internal_c501342d3631a163684f3a49e7650866e36a68fb498f1a551d8d15b72e0e0a72->leave($__internal_c501342d3631a163684f3a49e7650866e36a68fb498f1a551d8d15b72e0e0a72_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4076 => 548,  4073 => 547,  4067 => 546,  4044 => 535,  3422 => 527,  3417 => 525,  3414 => 524,  3408 => 523,  3385 => 513,  2763 => 505,  2758 => 503,  2755 => 502,  2749 => 501,  2726 => 491,  2104 => 483,  2099 => 481,  2096 => 480,  2090 => 479,  2067 => 469,  1445 => 461,  1440 => 459,  1437 => 458,  1431 => 457,  1408 => 447,  789 => 573,  787 => 553,  784 => 552,  781 => 535,  777 => 532,  774 => 513,  770 => 510,  767 => 491,  763 => 488,  760 => 469,  756 => 466,  753 => 447,  745 => 440,  739 => 436,  737 => 435,  736 => 434,  732 => 432,  730 => 431,  723 => 426,  721 => 425,  720 => 424,  719 => 423,  718 => 422,  717 => 421,  716 => 420,  715 => 419,  707 => 414,  701 => 411,  691 => 404,  685 => 401,  678 => 396,  673 => 393,  667 => 391,  661 => 389,  659 => 388,  656 => 387,  654 => 386,  646 => 383,  640 => 382,  634 => 378,  630 => 376,  626 => 374,  624 => 372,  623 => 366,  620 => 365,  618 => 364,  614 => 362,  612 => 360,  611 => 354,  604 => 350,  599 => 348,  589 => 341,  584 => 339,  574 => 332,  569 => 330,  561 => 324,  559 => 322,  558 => 316,  552 => 312,  548 => 310,  546 => 307,  542 => 306,  539 => 305,  537 => 304,  534 => 303,  532 => 300,  528 => 299,  524 => 297,  520 => 295,  516 => 293,  514 => 290,  510 => 289,  507 => 288,  505 => 287,  501 => 285,  499 => 282,  495 => 281,  491 => 279,  489 => 276,  485 => 275,  481 => 273,  479 => 270,  475 => 269,  471 => 267,  469 => 264,  465 => 263,  459 => 260,  455 => 258,  453 => 255,  449 => 254,  442 => 249,  440 => 248,  439 => 247,  438 => 246,  437 => 245,  436 => 244,  425 => 236,  418 => 232,  414 => 231,  410 => 230,  398 => 221,  392 => 218,  379 => 208,  366 => 198,  351 => 186,  342 => 179,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#** 
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}
{#**  
          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}  *#}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/var/www/roadmakshop/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* PrestaShopBundle:Admin\Product:catalog.html.twig */
class __TwigTemplate_f4165fd2c0e1066b8a9551652e811ad67bd6651acd443894c392cc02ab670832_1439564225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 553
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "PrestaShopBundle:Admin\\Product:catalog.html.twig", 553);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ef1be1b2b50aed25cec9512291f798ec9b21e92a796526705f01554dea6bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81ef1be1b2b50aed25cec9512291f798ec9b21e92a796526705f01554dea6bed->enter($__internal_81ef1be1b2b50aed25cec9512291f798ec9b21e92a796526705f01554dea6bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin\\Product:catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ef1be1b2b50aed25cec9512291f798ec9b21e92a796526705f01554dea6bed->leave($__internal_81ef1be1b2b50aed25cec9512291f798ec9b21e92a796526705f01554dea6bed_prof);

    }

    // line 564
    public function block_content($context, array $blocks = array())
    {
        $__internal_caba831271930d5a666366b73ec42f9bc86003b01c4152cc678599489fe71411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caba831271930d5a666366b73ec42f9bc86003b01c4152cc678599489fe71411->enter($__internal_caba831271930d5a666366b73ec42f9bc86003b01c4152cc678599489fe71411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 565
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? $this->getContext($context, "sql_manager_add_link")), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
        
        $__internal_caba831271930d5a666366b73ec42f9bc86003b01c4152cc678599489fe71411->leave($__internal_caba831271930d5a666366b73ec42f9bc86003b01c4152cc678599489fe71411_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin\\Product:catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4726 => 565,  4720 => 564,  4697 => 553,  4076 => 548,  4073 => 547,  4067 => 546,  4044 => 535,  3422 => 527,  3417 => 525,  3414 => 524,  3408 => 523,  3385 => 513,  2763 => 505,  2758 => 503,  2755 => 502,  2749 => 501,  2726 => 491,  2104 => 483,  2099 => 481,  2096 => 480,  2090 => 479,  2067 => 469,  1445 => 461,  1440 => 459,  1437 => 458,  1431 => 457,  1408 => 447,  789 => 573,  787 => 553,  784 => 552,  781 => 535,  777 => 532,  774 => 513,  770 => 510,  767 => 491,  763 => 488,  760 => 469,  756 => 466,  753 => 447,  745 => 440,  739 => 436,  737 => 435,  736 => 434,  732 => 432,  730 => 431,  723 => 426,  721 => 425,  720 => 424,  719 => 423,  718 => 422,  717 => 421,  716 => 420,  715 => 419,  707 => 414,  701 => 411,  691 => 404,  685 => 401,  678 => 396,  673 => 393,  667 => 391,  661 => 389,  659 => 388,  656 => 387,  654 => 386,  646 => 383,  640 => 382,  634 => 378,  630 => 376,  626 => 374,  624 => 372,  623 => 366,  620 => 365,  618 => 364,  614 => 362,  612 => 360,  611 => 354,  604 => 350,  599 => 348,  589 => 341,  584 => 339,  574 => 332,  569 => 330,  561 => 324,  559 => 322,  558 => 316,  552 => 312,  548 => 310,  546 => 307,  542 => 306,  539 => 305,  537 => 304,  534 => 303,  532 => 300,  528 => 299,  524 => 297,  520 => 295,  516 => 293,  514 => 290,  510 => 289,  507 => 288,  505 => 287,  501 => 285,  499 => 282,  495 => 281,  491 => 279,  489 => 276,  485 => 275,  481 => 273,  479 => 270,  475 => 269,  471 => 267,  469 => 264,  465 => 263,  459 => 260,  455 => 258,  453 => 255,  449 => 254,  442 => 249,  440 => 248,  439 => 247,  438 => 246,  437 => 245,  436 => 244,  425 => 236,  418 => 232,  414 => 231,  410 => 230,  398 => 221,  392 => 218,  379 => 208,  366 => 198,  351 => 186,  342 => 179,  340 => 159,  336 => 157,  334 => 147,  331 => 146,  329 => 134,  324 => 132,  320 => 131,  316 => 130,  312 => 129,  302 => 122,  284 => 107,  278 => 104,  272 => 101,  268 => 100,  263 => 98,  259 => 97,  253 => 93,  244 => 87,  236 => 81,  234 => 80,  227 => 76,  222 => 73,  216 => 72,  209 => 69,  205 => 67,  188 => 65,  185 => 64,  168 => 63,  165 => 62,  163 => 61,  152 => 55,  148 => 54,  140 => 51,  136 => 49,  134 => 48,  131 => 47,  125 => 46,  117 => 42,  100 => 40,  83 => 39,  78 => 37,  72 => 36,  63 => 33,  59 => 32,  55 => 31,  51 => 30,  46 => 29,  40 => 28,  33 => 26,  31 => 25,  11 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#** 
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% form_theme categories _self %}
{% extends 'PrestaShopBundle:Admin:layout.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }}>
        <ul class=\"category-tree\">
        {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}

         <div class=\"radio\">
             <label class=\"category-label\" for=\"form[{{ form.vars.id }}][tree]\">{{ child.name }}
                 <input
                   type=\"radio\"
                   name=\"form[{{ form.vars.id }}][tree]\"
                   value=\"{{ child.id_category }}\" {{ checked }}
                   class=\"category pull-right\"
                 >
             </label>
         </div>

        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block content %}

  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <i class=\"material-icons\">error_outline</i>
            <p>
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"pull-right\">
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-1\">
          <div class=\"checkbox\">
            <label>
              <input
                type=\"checkbox\"
                id=\"bulk_action_select_all\"
                onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              />
              {{ \"Select all\"|trans({}, 'Admin.Actions') }}
            </label>
          </div>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
          \"onclick\": \"bulkProductAction(this, 'activate_all');\",
          \"icon\": \"radio_button_checked\",
          \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          },
          {
          \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
          \"icon\": \"radio_button_unchecked\",
          \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
          \"icon\": \"content_copy\",
          \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
          \"divider\": true
          },
          {
          \"onclick\": \"bulkProductAction(this, 'delete_all');\",
          \"icon\": \"delete\",
          \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}
{#**  
          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"tertiary-outline\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}  *#}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"pull-right col-md-3\">
          <button
            class=\"btn btn-tertiary-outline\"
            data-toggle=\"collapse\"
            data-target=\"#tree-categories\"
          >
          {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          <i class=\"material-icons\">expand_more</i>
          </button>
          <div id=\"tree-categories\" class=\"collapse p-t-1\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table table-condensed table-striped product m-t-1\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead>
                <tr class=\"column-headers\">
                  <th style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th>
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th>
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th>
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th>
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <select data-toggle=\"select2\" name=\"filter_column_active\">
                      <option value=\"\"></option>
                      <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                      <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                    </select>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-tertiary-outline\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-invisible\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "PrestaShopBundle:Admin\\Product:catalog.html.twig", "/var/www/roadmakshop/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}
