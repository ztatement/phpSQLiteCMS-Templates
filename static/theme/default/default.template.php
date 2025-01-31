<?php
/**
  * default.template
  */
?>
<?php include(THEME_TEMPLATES . 'head' . TPX); ?>

 <body <?php echo isset($admin) && $admin ? 'class="admin"' : ''; ?>>

  <?php if ($admin): ?>
    <?php include (BASE_PATH . 'cms/templates/admin/subtemplates/admin_menu.inc' . TPX); ?>
  <?php endif; ?>

  <div class="container">

    <?php include(THEME_TEMPLATES . 'header' . TPX); ?>

    <main>

      <!-- Inhalt $sidebar_1 -->
      <?php if ($sidebar_1): ?>
        <?= $sidebar_1; ?>
      <?php endif; ?>
      <!-- ./Inhalt $sidebar_1 -->

      <!-- Breadcrumb -->
      <?php include(THEME_TEMPLATES . 'breadcrumbs' . TPX); ?>
      <!-- ./Breadcrumb -->

      <div class="body-content album text-muted">
        <div class="container">

        <div class="row<?php if (isset($tv['nocolumns'])): ?> main-content<?php endif; ?>">

          <?php if (empty($tv['nocolumns'])): ?>
          <div class="col-md-12 main-content">
          <?php endif; ?>

          <?php if (empty($hide_content)) {echo $content;} ?>
          <?php if (isset($subtemplate)) { include(THEME_TEMPLATES . 'subtemplates/' . $subtemplate); } ?>
          
          <!--pre><#?php include (BASE_PATH . 'README.md'); ?></pre-->
          </div>

        <?php if (empty($tv['nocolumns'])): ?>
        </div>
        <?php endif; ?>

        </div>
      </div>
   
      <?php include(THEME_TEMPLATES . 'subtemplates/backToTopButton.inc' . TPX); ?>

      <?php if ($sidebar_2): ?>
        <?php echo $sidebar_2; ?>
      <?php endif; ?>

      <?php if ($sidebar_3): ?>
        <?php echo $sidebar_3; ?>
      <?php endif; ?>

      <!--hr class="closure"-->

<?php include(THEME_TEMPLATES . 'footer' . TPX); ?>

 </body>
</html>
<?php
/**
  * Änderungen:
  *
  * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ *
  * @LastModified: 2025-01-31 $
  * @date $ $LastChangedDate: 2025-01-31 11:23:14 +0100 $
  * @editor: $LastChangedBy: ztatement $
  * -------------
  * @see change.log
  *
  * $Date$     : $Revision$          : $LastChangedBy$   - Description
  * 2025-01-31 : 4.5.0.2025.01.31    : @ztatement        - neu angelegt
  * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ *
  * Local variables:
  * tab-width: 2
  * c-basic-offset: 2
  * c-hanging-comment-ender-p: nil
  * End:
  */
