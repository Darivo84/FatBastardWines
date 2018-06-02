<?php
include '../includes/config.php';
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
//Decode the string
$unencodedData=base64_decode($filteredData);
//unique file name
$current_date = date('Ymdhis');
$user_image = '../user_images/'.$current_date.'_img.png';
$user_image_share = $base_path.'pages/user_images/'.$current_date.'_img.png';
//Save the image
file_put_contents('../user_images/'.$current_date.'_img.png', $unencodedData);
// file_put_contents($user_image, $unencodedData);
?>
<div class="left">
    <div class="postcard-share" id="postcard-share">
        
        <img id="saved_user_image" src="<?php echo $user_image; ?>" />
    </div>
</div>
<div class="right">
    <div class="share-button"><div id="share_button" class="share-icon fb"></div></div>
    <div class="share-button">
        <a href="http://fatbastardwine.co.za" title="Check out the postcard I just created! @fatbastardwine" class="tweet" target="_blank">
            <div class="share-icon twitter"></div>
        </a>
    </div>
    <div class="share-button">
        <a class="lightbox" href="#lightbox"><div class="share-icon email"></div></a></div>
        <div class="share-button" id="downloadLink">
            <!-- <a href="<?php echo $user_image; ?>" download="<?php echo $user_image; ?>"> -->
            <a href="download.php?file=<?php echo $user_image; ?>" download="<?php echo $user_image; ?>" target="_top">
                <div class="share-icon download"></div>
            </a>
        </div>
        <div class="clearfix"></div>
        <div class="share-box">
            <h1><i class="highlight">Almost there. Share the <br>FAT bastard <br>love with your friends.</i></h1>

        </div>
    </div>
    <div id="lightbox" style="display:none;">
        <main class="contact-form fancy-lightbox">
        <section>
            <h1 class="highlight">Email Your Postcard.</h1>
            <!-- <form id="contactformshare" method="post" action="../includes/contactengineshare.php"> -->
            <form name="contactformshare" id="contactformshare" method="post">
                <div class="left">
                    <label for="user_name"></label>
                    <input class="text-input" placeholder="NAME" type="text" name="user_name" id="user_name" required/>
                </div>
                <div class="right">
                    <label for="user_surname"></label>
                    <input class="text-input" placeholder="SURNAME" type="text" name="user_surname" id="user_surname"  required/>
                </div>
                <label for="from_email"></label>
                <input class="text-input" placeholder="YOUR EMAIL" type="email" name="from_email" id="from_email" required/>
                <label for="user_tel"></label>
                <label for="user_email"></label>
                <input class="text-input" placeholder="YOUR FRIENDS EMAIL" type="email" name="user_email" id="user_email" required/>
                <textarea class="text-input" rows="8" placeholder="MESSAGE" type="text" name="user_message" id="user_message"  /></textarea>
                <input type="hidden" type="text" name="user_image" id="user_image" value="<?php echo $user_image_share; ?>"/>
                <div class="clearfix"></div>
                <p id="success"></p>
                <div class="submit-contact-button-container email-fancy">
                    <button type="submit" name="submit" value="Submit" id="submit" class="contact-button">SEND</button>
                </div>
                <div class="clearfix"></div>
            </form>
        </section>
        </main>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){


        $('#submit').click(function(e){

            $('#contactformshare').validate({
                rules: {
                    user_name:{
                        required: true,
                        minlength: 2,
                    },
                    user_surname:{
                        required: true,
                        minlength: 2,
                    },
                    from_email:{
                        required: true,
                        email: true,
                    },
                    user_email:{
                        required: true,
                        email: true,
                    },
                    user_message:{
                        required: true,
                        minlength: 10,
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }

            });

            if($('#contactformshare').valid()) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: '../includes/contactengineshare.php',
                    data: $('#contactformshare').serialize(),
                });
                e.preventDefault();
            $('#success').text('Thanks. Your postcard has been sent.');
            setTimeout(function(){ $('#success').text(''); }, 4000);
            e.preventDefault();
            // $("form#contactform").submit();
            setTimeout(function(){ $.fancybox.close(); }, 4000);

            }else{

            }

        });
    });
    </script>
    
    <script type="text/javascript">
    $(document).ready(function(){
    var user_image = "<?php echo $user_image_share; ?>";
    // var word = $( ".word" ).text();
    $('.fb').click(function(e){
    e.preventDefault();
    FB.ui(
    {
    method: 'feed',
    link: 'http://www.fatbastardwine.co.za/pages/live_large.php',
    picture: user_image,
    caption: 'FAT bastard POSTCARD',
    description: 'Check out the postcard I just created on the South African FAT bastard website!',
    }
    );
    });
    $('a.tweet').click(function(e) {
    //We tell our browser not to follow that link
    e.preventDefault();
    //We get the URL of the link
    var loc = $(this).attr('href');
    //We get the title of the link
    var title = encodeURIComponent($(this).attr('title'));
    //We trigger a new window with the Twitter dialog, in the middle of the page
    window.open('http://twitter.com/share?url=' + loc + '&text=' + title + '&', 'twitterwindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 225) + ', left=' + $(window).width() / 2 + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
    });
    
    });
    </script>
<script src="<?= $base_path;?>scripts/html2canvas.js"></script>
