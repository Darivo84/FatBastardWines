<?php
include '../includes/config.php';
// echo $_POST['img_val'];
// echo $_POST['img_val'];
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);


//unique file name
$current_date = date('Ymdhis');
$user_image = 'user_images/'.$current_date.'_img.png';
$user_image_share = $base_path.'pages/user_images/'.$current_date.'_img.png';
//Save the image
//file_put_contents('user_images/'.$current_date.'_img.png', $unencodedData);
file_put_contents($user_image, $unencodedData);
?>
            <!-- share -->
<!-- 
    <div class="live-large-content share" id="share-mobile">
        <div class="top">
            <h1>Share Your Postcard</h1>
            <div class="left-right">-->


                <div class="left">
                    <div class="postcard-share-mobile" id="postcard-share-mobile">
                        <img src="<?php echo $user_image; ?>" />
                    </div>
                </div>
                <div class="right">
                    <div class="share-box">
                        <h1><i class="highlight">Thank You <br>for <br> Sharing!</i></h1>
                    </div>
            <div class="share-button"><div id="share_button" class="share-icon fb"></div></div>
                <div class="share-button">
                    <a href="http://fatbastardwine.co.za" title="Check out the postcard I just created! @fatbastardwine" class="tweet" target="_blank">
                        <div class="share-icon twitter"></div>
                    </a>
                </div>
                <div class="share-button">
                    <a class="lightbox" href="#lightbox"><div class="share-icon email"></div></a></div>
                    <div class="share-button">
                        <a href="<?php echo $user_image; ?>" download="<?php echo $user_image; ?>"><div class="share-icon download"></div></a>
                    </div>
                </div>
            </div>
    <!--    </div>
        <div class="bottom">
            <p>If you are happy with your personalised postcard, please share.</p>
        </div>
    </div> -->

    
<script type="text/javascript">
    $(document).ready(function(){
    var user_image = "<?php echo $user_image_share; ?>";
    // var word = $( ".word" ).text();
    $('.fb').click(function(e){
    e.preventDefault();
    FB.ui(
    {
    method: 'feed',
    link: 'http://www.demo.designguru.co.za/fatbastard/web/v3',
    picture: user_image,
    caption: 'FAT bastard POSTCARD',
    description: 'Check out the postcard I just created on the South African FAT bastard website!',
    }
    // ,
    //     function(response){
    //       if(response && response.post_id) {
    //         $(location).attr('href','www.demo.designguru.co.za/fatbastard/web/v3');
    //       }
    //       else {
    //         $(location).attr('href','http://www.demo.designguru.co.za/fatbastard/web/v3');
    //       }
    //     }
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





