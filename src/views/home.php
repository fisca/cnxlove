<?php 
require_once '../system/system.php'; 
doc_head('CNXLOVE.com');
?>       
    </head>

    <body>

        <div id="pagewrap">

<?php get_includes('header'); ?>
            <div id="content">
                <?php get_controll('show-post'); ?>
            </div>
            <!-- /#content -->

<?php get_includes('sidebar'); ?>
<?php get_includes('footer'); ?>

        </div>
        <!-- /#pagewrap -->

    </body>
</html>
