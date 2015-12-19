<!DOCTYPE html>
<html>
    <head></head>
    <body>
        
        <div id="upload">
            <?php
            echo form_open_multipart('gallerycontroller/upload');
            echo form_upload('userfile');
            echo form_submit('upload','Upload');
            echo form_close();
            ?>
        </div>
    </body>
</html>

