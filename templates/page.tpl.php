<!--.page -->
<div role="document" class="page">
  <div class="wrap-main">
    <!--.l-header -->
    <header role="banner" class="l-header">
      <div id="header" class="text-center hide-for-small">
        <?php if ( $is_front ): ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
          </h1>
        <?php else: ?>
          <div id="site-name">
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </strong>
          </div>
        <?php endif; ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
        <?php if ($site_slogan): ?>
          <h2 title="<?php print $site_slogan; ?>" id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </div>
      <?php if ($top_bar): ?>
        <!--.top-bar -->
        <?php if ($top_bar_classes): ?>
          <div class="<?php print $top_bar_classes; ?>">
        <?php endif; ?>
        <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name"><h2><a href="/"><i class="fi-home"></i></a></h2></li>
            <li class="toggle-topbar menu-icon">
              <a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>
          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) : ?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) : ?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
        <?php if ($top_bar_classes): ?>
          </div>
        <?php endif; ?>
        <!--/.top-bar -->
      <?php endif; ?>

      <?php if (!empty($page['header'])): ?>
        <!--.l-header-region -->
        <section class="l-header-region row">
          <div class="columns">
            <?php print render($page['header']); ?>
          </div>
        </section>
        <!--/.l-header-region -->
      <?php endif; ?>

    </header>
    <!--/.l-header -->

    <?php if (!empty($page['featured'])): ?>
      <!--.l-featured -->
      <section class="l-featured row">
        <div class="columns">
          <?php print render($page['featured']); ?>
        </div>
      </section>
      <!--/.l-featured -->
    <?php endif; ?>

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
      <!--.l-messages -->
      <section class="l-messages row">
        <div class="columns">
          <?php if ($messages): print $messages; endif; ?>
        </div>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
      <!--.l-help -->
      <section class="l-help row">
        <div class="columns">
          <?php print render($page['help']); ?>
        </div>
      </section>
      <!--/.l-help -->
    <?php endif; ?>

    <!--.l-main -->
    <main role="main" class="row l-main">
      <!-- .l-main region -->
      <div class="<?php print $main_grid; ?> main columns">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php if ($breadcrumb): print $breadcrumb; endif; ?>

        <?php if ($title): ?>
          <?php if ( isset($node) ): ?>
            <?php if ( $node->type == 'product'): ?>
            <?php else: ?>
              <?php print render($title_prefix); ?>
              <h1 id="page-title" class="title"><?php print $title; ?></h1>
              <?php print render($title_suffix); ?>
            <?php endif; ?>
          <?php else: ?>
            <?php print render($title_prefix); ?>
            <h1 id="page-title" class="title"><?php print $title; ?></h1>
            <?php print render($title_suffix); ?>
          <?php endif; ?>
        <?php endif; ?>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>
      </div>
      <!--/.l-main region -->

      <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </main>
    <!--/.l-main -->

    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
      <!--.triptych-->
      <section class="l-triptych row">
        <div class="triptych-first medium-4 columns">
          <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle medium-4 columns">
          <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last medium-4 columns">
          <?php print render($page['triptych_last']); ?>
        </div>
      </section>
      <!--/.triptych -->
    <?php endif; ?>

    <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
      <!--.footer-columns -->
      <section class="row l-footer-columns">
        <?php if (!empty($page['footer_firstcolumn'])): ?>
          <div class="footer-first medium-3 columns">
            <?php print render($page['footer_firstcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_secondcolumn'])): ?>
          <div class="footer-second medium-3 columns">
            <?php print render($page['footer_secondcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_thirdcolumn'])): ?>
          <div class="footer-third medium-3 columns">
            <?php print render($page['footer_thirdcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_fourthcolumn'])): ?>
          <div class="footer-fourth medium-3 columns">
            <?php print render($page['footer_fourthcolumn']); ?>
          </div>
        <?php endif; ?>
      </section>
      <!--/.footer-columns-->
    <?php endif; ?>
  </div>
    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
<!--.l-footer -->
<footer role="contentinfo">
  <?php if (!empty($page['footer'])): ?>
    <div class="footer columns">
      <?php print render($page['footer']); ?>
    </div>
  <?php endif; ?>
  <div class="row l-footer">
    <div class="large-6 columns">
      <div id="hcard-zavod-anisimova" class="vcard">
        <div class="fn n org">Колокололитейный завод Анисимова</div>
        <div class="adr">
          <div class="street-address">ул. Таранченко 29б</div>
          <span class="locality">Воронеж</span>,
          <span class="postal-code">394018</span>,
          <span class="country-name">Россия</span>
        </div>
        <div>
          <span class="tel">+7 (473) 220-78-88</span>,
          <span class="tel">+7 (473) 220-77-99</span>
        </div>
        <div>
          <span class="category">изготовление элитных подарков в единичном экземпляре из бронзы</span>,
          <span class="category">колокола</span>,
          <span class="category">иконы</span>,
          <span class="category">скульптура</span>
        </div>
      </div>
    </div>

    <div class="large-6 columns">
      <div class="sitemap">
        <a href="/sitemap">
          <i class="fi-map"></i>
          Карта сайта
        </a>
      </div>
      <?php if ($site_name) : ?>
        <div class="copyright">
          &copy; 2010 &mdash; <?php print date('Y') . ' ' . $site_name . '.<br />' . t('Все права защищены.'); ?>
        </div>
        <hr />
        <div class="made-by">
          <i class="fi-wrench"></i>
          Разработка сайта:
          <a href="http://kossoff.ru">Kossoff.ru</a>
        </div>
      <?php endif; ?>
    </div>
  </div>

</footer>
<!--/.l-footer -->
