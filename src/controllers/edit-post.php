<?php
require_once '../system/system.php';

if ($_POST) {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $author = htmlspecialchars($_POST['author'], ENT_QUOTES);
    $date = date("Y-m-d ", strtotime($_POST['date'])) . date("H:i:s");
    $content = htmlspecialchars($_POST['post-content'], ENT_QUOTES);
    $category = htmlspecialchars($_POST['category'], ENT_QUOTES);
    $update = date("Y-m-d H:i:s");

    $sql = "INSERT INTO 
                tb_post
            VALUES 
                (0, '$title', '$author', '$date', '$content', '$category', '$update');
            ";

    @mysql_query($sql) or die(mysql_error());

    header("Refresh: 2; url=../views/post.php");
    echo "Adding post Successed...";
    exit;
}

if(isset($_GET['edit_post'])){
    $id = $_GET['edit_post'];
    $sql = "SELECT * FROM tb_post WHERE id = $id;";
    $result = mysql_query($sql);
    $p = mysql_fetch_array($result);    
}
?>
<h2>Edit Post</h2> 
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="post_id" value="<?php echo $p['id']; ?>">
    <table>
        <tr>
            <td>Title</td>
            <td>
                <input type="text" name="title" value="<?php echo $p['title']; ?>">
            </td>
        </tr>
        <tr>
            <td>Author</td>
            <td>
                <input type="text" name="author" value="<?php echo $p['author']; ?>">
            </td>
        </tr>
        <tr>
            <td>Date</td>
            <td>
                <input type="text" id="datepicker" name="date" value="<?php echo $p['date']; ?>">
                <script>
                    $(function() { 
                        $("#datepicker").datepicker();        
                    });            
                </script>
            </td>
        </tr>
        <tr>
            <td>Content</td>
            <td>
                <textarea name="post-content">
                    <?php echo $p['content']; ?>"
                </textarea>
                <script>
                    CKEDITOR.replace('post-content');
                </script>                
            </td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <input type="text" name="category" value="<?php echo $p['category']; ?>">
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td align="center">
                <input type="submit" value="Submit" /> <a href="../views/post.php?post_id=<?php echo $p['id']; ?>" title="Cancel"><strong>Cancel</strong></a>
            </td>
        </tr>
    </table>
</form>
<div class="text-center"><a href="#"><i class="icon-arrow-up-3"></i>Up</a></div>
