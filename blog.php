<!DOCTYPE html>
<html>
<head>
    <title>OCE SpaceSim</title>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content=
    "OCESS is a non-profit organization dedicated to informing and involving students from across Ontario about space and science." name=
    "description">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
    <script src="js/main.js">
    </script>
</head>

<body>
    <div id="menu-container">
    </div>


    <header class="header">
    </header>


    <div class="container">
        <div class="page-header">
            <h1>Blog</h1>
        </div>
        <!-- Content goes in this div -->


        <div class="col-md-10 col-md-offset-1 well">
            <div id="blogContainer">
            </div>
        </div>
    </div>


    <footer class="footer">
    </footer>
    <script>
        
        <?php
        
        // Include Parsedown library
        include 'php/Parsedown.php';
        
        // Create Parsedown object
        $Parsedown = new Parsedown();
        
        // Make a list of all files in blogPosts
                $dir = "blogPosts/*";
                $posts = [];
                foreach(glob($dir) as $file) {
                    if(!is_dir($file)) {
                        array_push($posts, basename($file));
                    }
                }
                
         // Put each blog post into the page
                foreach($posts as $val) {
                    $myfile = fopen("blogPosts/" . $val, "r") or die("Unable to open file!");
                    $postText = fread($myfile,filesize("blogPosts/" . $val));
                    $postText = $Parsedown->text($postText);
                    $postText = preg_replace("/\r\n|\r|\n/",'<br/>',$postText);
                    echo "$('#blogContainer').append('" .  $postText . "');";
                    echo "$('#blogContainer').append('<br><hr><br>');";
                    fclose($myfile);
                }
                
                ?>
                
        // Remove the last <hr> in the blog container
        $("#blogContainer hr:last-of-type").remove();
    </script>
</body>
</html>