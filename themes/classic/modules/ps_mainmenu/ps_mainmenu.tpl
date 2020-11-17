{assign var=_counter value=0}
{function name="menu" nodes=[] depth=0 parent=null}
    {if $nodes|count}
      <ul class="top-menu top-menu-zeynep" {if $depth == 0}id="top-menu"{/if} data-depth="{$depth}">
        {foreach from=$nodes item=node}
            <li class="{$node.type}{if $node.current} current {/if}" id="{$node.page_identifier}">
            {assign var=_counter value=$_counter+1}
              <a
                class="{if $depth >= 0}dropdown-item{/if}{if $depth === 1} dropdown-submenu{/if}"
                href="{$node.url}" data-depth="{$depth}"
                {if $node.open_in_new_window} target="_blank" {/if}
              >
                {if $node.children|count}
                  {* Cannot use page identifier as we can have the same page several times *}
                  {assign var=_expand_id value=10|mt_rand:100000}
                  <span class="float-xs-right hidden-md-up">
                    <span data-target="#top_sub_menu_{$_expand_id}" data-toggle="collapse" class="navbar-toggler collapse-icons">
                      <i class="material-icons add">&#xE313;</i>
                      <i class="material-icons remove">&#xE316;</i>
                    </span>
                  </span>
                {/if}
                {$node.label}
              </a>
              {if $node.children|count}
              <div {if $depth === 0} class="popover sub-menu js-sub-menu collapse"{else} class="collapse"{/if} id="top_sub_menu_{$_expand_id}">
                {menu nodes=$node.children depth=$node.depth parent=$node}
              </div>
              {/if}
            </li>
        {/foreach}
      </ul>
    {/if}
{/function}

<div class="col-lg-3 col-md-3">
  <span style="font-size:30px;cursor:pointer;float:left;line-height: 45px;" class="hidden-sm-down btn-open-zeynep">&#9776;</span>
  <a class="hidden-sm-down ml-2" id="_desktop_logo" href="{$urls.base_url}" style="float: left;width: 158px">
    <img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
  </a>
</div>
<!--div class="menu zeynep col-lg-8 col-md-7 js-top-menu position-static hidden-sm-down" id="_desktop_top_menu"-->
<div class="menu zeynep js-top-menu hidden-sm-down" id="_desktop_top_menu">
    <ul style="margin-top: 0;background-color: #54595f;margin-bottom: 0;padding-top: 1rem;padding-bottom: 1rem;color: #fff;font-weight: bold;">
      <li style="padding-left: 36px;">MENU</li>
    </ul>
    {menu nodes=$menu.children}
    <div class="clearfix"></div>
</div>
<!-- Block search module TOP -->
<div id="search_widget" class="col-lg-4 col-md-4 col-sm-12 search-widget" data-search-controller-url="{$search_controller_url}">
	<form method="get" action="{$search_controller_url}">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="{$search_string}" placeholder="{l s='Search our catalog' d='Shop.Theme.Catalog'}" aria-label="{l s='Search' d='Shop.Theme.Catalog'}">
		<button type="submit">
			<i class="material-icons search">&#xE8B6;</i>
      <span class="hidden-xl-down">{l s='Search' d='Shop.Theme.Catalog'}</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<div class="col-lg-5 col-md-5 right-nav">
    {hook h='displayNav2'}
</div>
