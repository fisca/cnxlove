<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- disable iPhone inital scale -->
        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <title>CNXLOVE.com</title>

        <!-- main css -->
        <link href="../themes/adaptive-design/css/style.css" rel="stylesheet" type="text/css">

        <!-- media queries css -->
        <link href="../themes/adaptive-design/css/media-queries.css" rel="stylesheet" type="text/css">

        <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="../themes/adaptive-design/js/html5.js"></script>
        <![endif]-->

        <!-- css3-mediaqueries.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="../themes/adaptive-design/js/css3-mediaqueries.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="pagewrap">

<?php require_once 'header.php'; ?>

            <div id="content">

                <article class="post clearfix">

                    <header>
                        <h1 class="post-title"><a href="#">Hello World.</a></h1>
                        <p class="post-meta"><time class="post-date" datetime="2013-08-12" pubdate>Aug 12, 2013</time> <em>in</em> <a href="#">Category</a></p>
                    </header>
                    <figure class="post-image"> 
                        <img src="../themes/adaptive-design/images/sample-image.jpg" /> 
                    </figure>
                    <p>Fusce ut sem est. In eu sagittis felis. In gravida arcu ut neque ornare vitae rutrum turpis vehicula. Nunc ultrices sem mollis metus rutrum non malesuada metus fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque interdum rutrum quam, a pharetra est pulvinar ac. Vestibulum congue nisl magna. Ut vulputate odio id dui convallis in adipiscing libero condimentum. Nunc et pharetra enim. Praesent pharetra, neque et luctus tempor, leo sapien faucibus leo, a dignissim turpis ipsum sed libero. Sed sed luctus purus. Aliquam faucibus turpis at libero consectetur euismod. Nam nunc lectus, congue non egestas quis, condimentum ut arcu. Nulla placerat, tortor non egestas rutrum, mi turpis adipiscing dui, et mollis turpis tortor vel orci. Cras a fringilla nunc. Suspendisse volutpat, eros congue scelerisque iaculis, magna odio sodales dui, vitae vulputate elit metus ac arcu. Mauris consequat rhoncus dolor id sagittis. Cras tortor elit, aliquet quis tincidunt eget, dignissim non tortor.</p>

                    <h3>Vimeo Video</h3>
                    <div class="video">
                        <iframe src="http://player.vimeo.com/video/6284199" width="550" height="400" frameborder="0"></iframe>
                    </div>
                    <!-- /.video -->

                    <h3>YouTube</h3>
                    <div class="video">
                        <object width="500" height="400">
                            <param name="movie" value="http://www.youtube.com/v/NmRTreaCJXs?version=3">
                            </param>
                            <param name="allowFullScreen" value="true">
                            </param>
                            <param name="allowscriptaccess" value="always">
                            </param>
                            <param name="wmode" value="transparent">
                            </param>
                            <embed wmode="transparent"  src="http://www.youtube.com/v/NmRTreaCJXs?version=3" type="application/x-shockwave-flash" width="600" height="420" allowscriptaccess="always" allowfullscreen="true"></embed>
                        </object>
                    </div>
                    <!-- /.video -->

                </article>
                <!-- /.post -->

            </div>
            <!-- /#content --> 


<?php require_once 'sidebar.php'; ?>

<?php require_once 'footer.php'; ?>

        </div>
        <!-- /#pagewrap -->

    </body>
</html>
