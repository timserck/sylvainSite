<nav id="nav">


    <a data-mobile="false" href="#" class="icon-mobile">
        <span class="icon-mobile__link">Menu </span>
        <span class="icon-mobile__round"></span>
    </a>
        <div class="container__menu--primary">

            <div class="mobileContainer">

        <a id="menu--logo" class="menu--logo" href="http://localhost/projets/sylv/"><h1>Sylvain</h1></a>

    <?php wp_nav_menu(array(
        'theme_location'  => 'primary',
        'menu'            => 'Menu Principal',
        'container'       => false,
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => 'navigation',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    )) ;?>


            </div>
    </div>





</nav>


