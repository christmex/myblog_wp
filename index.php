<?php get_header(); ?>
    <ul class="circles">
        <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
    </ul>

    <?php locate_template('sections/menu-web.php', true);?>
        
    <!-- HEADER -->
    <?php locate_template('sections/header.php', true);?>

    <!-- SKILLS -->
    <?php locate_template('sections/skills.php', true);?>

    <!-- CAREER -->
    <?php locate_template('sections/careers.php', true);?>

    <!-- PROJECTS -->
    <?php locate_template('sections/projects.php', true);?>

    <!-- PARTNERS -->
    <?php locate_template('sections/partners.php', true);?>

    <!-- WHY ME -->
    <?php locate_template('sections/whyme.php', true);?>

<?php get_footer(); ?>