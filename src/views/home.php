<?php
require_once '../system/system.php';
doc_head('CNXLOVE.com');
?>       
</head>

<body>

    <div id="pagewrap">

        <?php get_includes('header'); ?>
        <div id="content">
            <?php
            $sql = "SELECT * FROM tb_post ORDER BY date DESC;";
            $result = mysql_query($sql);
            if (!empty($result)) {

                while ($p = mysql_fetch_array($result)) {
                    echo '
                <article class="post clearfix">                    
                    <header>
                        <h1 class="post-title"><a style="cursor: pointer;" id="post-' . $p['id'] . '">' . htmlspecialchars_decode($p['title']) . '</a></h1>
                        <p class="post-meta">
                            <time class="post-date" title="' . date("H:i:s", strtotime($p['date'])) . '" datetime="' . date("Y-m-d", strtotime($p['date'])) . '" pubdate>' . thai_date($p['date']) . '</time> 
                            <em>in</em> <a href="#">' . htmlspecialchars_decode($p['category']) . '</a>
                            <em>by</em> <a href="#">' . $p['author'] . '</a>
                        </p>
                    </header>
                    <script>
                        $(function(){
                            $("#post-' . $p['id'] . '").click(function(){
                                $(document).ajaxStart(function(){
                                    $(".bs-example").html("<div class=\"span12 text-center\" ><img src="../images/demo_wait.gif"></div>");
                                });
                                $.get("show-post.php", {show_post: "' . $p['id'] . '"}, 
                                function(data){ $("#content").html(data); }
                                );
                             });
                        });
                    </script>
                    ' . htmlspecialchars_decode($p['content'])
                    . '                    
                    <hr>
          ';

                    if (isset($_SESSION['login'])) {
                        echo '
                    <div id="edit-' . $p['id'] . '" style="cursor: pointer;">Edit Post</div>
            ';
                    }
                    echo '
                </article>
                <!-- /.post -->                
    ';
                } // END while
            } // END if
            ?>
        </div>
        <!-- /#content -->

        <?php get_includes('sidebar'); ?>
        <?php get_includes('footer'); ?>

    </div>
    <!-- /#pagewrap -->

</body>
</html>
