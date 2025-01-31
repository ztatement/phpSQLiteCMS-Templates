<?php
/**
  * Das Haupt Template default wird am häufigsten verwendet, es includiert 
  * alle benötigten Sub-Templates.
  *
  * @version 4.5.0.2025.01.31 
  * @file $Id: static/theme/default/templates/default.template.php 1 2025-01-31 11:23:14Z ztatement $
  * ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
?>
<?php 
// Inkludiert das head-Template, das den <head>-Abschnitt des HTML-Dokuments enthält, einschließlich Meta-Tags, Stylesheets und Skripten.
include(THEME_TEMPLATES . 'head' . TPX); ?>

 <body <?php echo isset($admin) && $admin ? 'class="admin"' : ''; ?>>

  <?php 
  // Wenn der Benutzer ein Administrator ist, 
  if ($admin): ?>
    <?php
    // wird das admin_menu-Subtemplate inkludiert, das das Admin-Menü enthält.
    include (BASE_PATH . 'cms/templates/admin/subtemplates/admin_menu.inc' . TPX); ?>
  <?php endif; ?>

  <div class="container">

<?php
// Inkludiert das header-Template, das den Header-Bereich der Seite enthält, einschließlich Logo und Navigation.
 include(THEME_TEMPLATES . 'header' . TPX); ?>

    <main>

      <!-- Inhalt $sidebar_1 -->
      <?php
      // Überprüft, ob sidebar_1 definiert ist und gibt deren Inhalt aus, wenn aktiviert.
      if ($sidebar_1): ?>
        <?= $sidebar_1; ?>
      <?php endif; ?>
      <!-- ./Inhalt $sidebar_1 -->

<?php
// Inkludiert das breadcrumbs-Template, das die Breadcrumb-Navigation enthält.
 include(THEME_TEMPLATES . 'breadcrumbs' . TPX); ?>

      <div class="body-content album text-muted">
        <div class="container">

        <div class="row<?php if (isset($tv['nocolumns'])): ?> main-content<?php endif; ?>">

          <?php
          // Wenn tv['nocolumns'] nicht gesetzt ist, wird eine <div>-Spalte mit den Klassen col-md-12 und main-content geöffnet.
          if (empty($tv['nocolumns'])): ?>
          <div class="col-md-12 main-content">
          <?php endif; ?>

          <?php
          // Überprüft, ob hide_content nicht gesetzt ist und gibt den Inhalt von content aus.
          if (empty($hide_content)) {echo $content;} ?>
          <?php
          // Wenn subtemplate definiert ist, wird das entsprechende Subtemplate inkludiert.
          if (isset($subtemplate)) { include(THEME_TEMPLATES . 'subtemplates/' . $subtemplate); } ?>
          
          </div>

        <?php
        // Schließt die vorher geöffneten <div>-Tags, abhängig davon, ob tv['nocolumns'] gesetzt ist oder nicht.
        if (empty($tv['nocolumns'])): ?>
        </div>
        <?php endif; ?>

        </div>
      </div>
   
<?php
// Inkludiert das backToTopButton-Subtemplate, das den "Zurück nach oben"-Button enthält und das javascript.
 include(THEME_TEMPLATES . 'subtemplates/backToTopButton.inc' . TPX); ?>

      <?php
      // Überprüft, ob sidebar_2 definiert ist und gibt deren Inhalt aus, wenn vorhanden.
      if ($sidebar_2): ?>
        <?php echo $sidebar_2; ?>
      <?php endif; ?>

    </main>

    <?php
    // Zuvor schließendes <main>-Tag, 
    // überprüft, ob sidebar_3 definiert ist und gibt deren Inhalt aus, wenn vorhanden.
    if ($sidebar_3): ?>
      <?php echo $sidebar_3; ?>
    <?php endif; ?>

    <!--hr class="closure"-->

<?php
// Inkludiert das footer-Template, das den Footer-Bereich der Seite enthält.
 include(THEME_TEMPLATES . 'footer' . TPX); ?>

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
