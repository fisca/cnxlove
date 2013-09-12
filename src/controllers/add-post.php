<?php
require_once '../system/system.php';

if ($_POST) {
    $type = htmlspecialchars($_POST['type'], ENT_QUOTES);
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $date = date("Y-m-d", strtotime($_POST['date']));
    $content_short = htmlspecialchars($_POST['content_short'], ENT_QUOTES);
    $content_long = htmlspecialchars($_POST['content_long'], ENT_QUOTES);
    if (isset($_POST['new'])) {
        $new = $_POST['new'];
    } else {
        $new = 'n';
    }
    $picture = htmlspecialchars($_POST['picture'], ENT_QUOTES);
    $gallery_id = $_POST['gallery_id'];
    $update = date("Y-m-d H:i:s");

    $sql = "INSERT INTO 
                tb_news 
            VALUES 
                (0, '$type', '$title', '$date', '$content_short', '$content_long', '$new', '$picture', '$gallery_id', '$update');
            ";

    @mysql_query($sql) or die(mysql_error());

    header("Refresh: 2; url=../views/news.php?news=$type");
    echo "Adding News Successed...";
    exit;
}

$news = $_GET['add_news'];
?>
<div class="page-region">
    <div class="page-region-content">

        <h2 class="text-center">เพิ่ม Post</h2>                   

        <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input name="type" type="hidden" value="<?php echo $news; ?>">
            <table>
                <tr>
                    <td>
                        Title
                    </td>
                    <td>
                        <div class="input-control text">
                            <input type="text" name="title">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        วันที่
                    </td>

                    <td>
                        <input type="text" id="datepicker" name="date">
                    </td>
                </tr>
                <tr>
                    <td>
                        เนื้อหา
                    </td>
                    <td>
                        <div class="input-control textarea">
                            <textarea name="content_long">

                            </textarea>
                            <script>
                                CKEDITOR.replace('content_long');
                            </script>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td align="center">
                        <input type="submit" value="Submit" /> <a href="../views/news.php?news=<?php echo $news; ?>" title="Cancel"><strong>Cancel</strong></a>
                    </td>
                </tr>
            </table>
        </form>

    </div>

    <div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>
<script>
    $(function() {
                
        $( "#datepicker" ).datepicker();   // Date Picker
                
        /* AJAX for Gallery list */
        $("#ch-gal").click(function(){
            $('#select-gallery').load("<?php echo path_controll('show-gal-option'); ?>");
            $('#select-gallery').show();                      
        });
                
        $('#add-gal').click(function(){
            $('#select-gallery').hide();
        });
                               
    }); /* END jQuery */
            
</script>
</div>

