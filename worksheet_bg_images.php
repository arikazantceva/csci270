<? 
    // These have to be defined BEFORE the header file is required.
    $page_title = 'Backgrounds | Worksheet';
    // $extra_stylesheets[] = 'extra_styles1.css';
?>

<? require 'site_header.php'; ?>

    <style type="text/css">
      /***********************************************************************
      These styles are just to format the worksheet.
      You shouldn't need to modify these.
      ***********************************************************************/

      #worksheet_wrapper {
        min-height:400px;
        background-color: #ffffff;
      }

      #worksheet_wrapper div {
        margin: 25px 25px 25px 25px;  /*T R B L*/
        padding:7px;
        border: 1px #000 solid;
        min-height:200px;
      }


      /***********************************************************************
      The empty selectors below are for you to add styles necessary to complete the worksheet.
      ***********************************************************************/

      #bg_repeat_both {
        background-image: url(images/flower_tile_flipflip.png);
      }

      #bg_repeat_none {
        background-image: url(images/flower_tile_flipflip.png);
        background-repeat: no-repeat;
        background-position: 20% 50%;
      }

      #bg_multiple_and_resize {
        background-image: url(images/flower_tile_flipflip.png), url(images/flower_tile_flipflip.png);
        background-position: 10% 40%, right top;
        background-repeat: no-repeat, no-repeat;
        background-size: 100px 80px, 170px 170px;
      }

      #bg_repeat_one_direction {
        background-image: url(images/gradient_img.png);
        background-repeat: repeat-x;
      }

      #pure_css_gradient {
        background: linear-gradient(180deg, #91DDEC 0%, #FFFFFF 40%);
      }
    </style>


    <div id="worksheet_wrapper">
      Put all the styles for this worksheet into the internal style sheet in this page so you don't clutter up your main style sheet.

      <br><br>

      Create your own background image that will tile seamlessely (hopefully) using the "Flip-Flip" technique  as I explained in class and in my "Flip-Flip" example.  Ideally, you'll make one that compliments the aesthetic of your course page because you might want to use it there, but that's not required.  Here are some tips:

      <ul>
      	<li>Start with a fairly small graphic (50x50 or whatever). Remember, when you use the "Flip-Flip" technique, a 50x50 graphic will end up as 100x100.</li>
      	<li>Don't start with something you find that already tiles since that defeats the purpose. Get creative.  Students have make some really cool textures.</li>
      	<li>Aim to create something actually usable as a background texture - reasonably subtle and won't overpower content.</li>
      </ul>

      <b>Save the different states (during the "Flip-Flip" process) of your graphic. Show them below using the HTML <i>img</i> element (not through CSS).</b>

      <br><br>

      Put the original graphic here: <img src="images/flower_tile.png" height="50px" width="50px">

      <br><br>

      Put the graphic after one Flip (reflection) here: <img src="images/flower_tile_flip.png" height="50px" width="100px">

      <br><br>

      Put the final graphic here (non-tiled of course): <img src="images/flower_tile_flipflip.png" height="100px" width="100px">

      <br><br>

      <div id="bg_repeat_both">
        Tile the custom background image you created above in both the X and Y directions (that's the default behavior) inside this block. If you constructed it properly, it should tile (repeat) seamlessly.
      </div>

      <div id="bg_repeat_none">
        Put the custom background image you created above inside this block, but as no-repeat so it won't tile. Center it vertically within this block, and place it 20% away from the right border.  You can tell that it's a background graphic (instead of HTML img tag) because the lorem ipsum text will be on top of the graphic.
        <br><br>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
      </div>

      <div id="bg_multiple_and_resize">
        Now put the custom background image you created above inside this block <b>twice at different locations and as two different sizes</b>. Again, use no-repeat so they won't tile.  You can choose the locations, and sizes but just make sure they are not on top of each other I can see them both.  You will find the relatively new <a href="http://www.w3schools.com/css/css3_backgrounds.asp" target="_blank">CSS3 Background Properties</a> useful in this endeavor.
        <br><br>
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
      </div>

      <div id="bg_repeat_one_direction">
        Put a tall, thin gradient background image (around 10px in width give or take) that tiles only in the X direction.  (You can use a thin, wide gradient image that tiles only in the Y direction if you would prefer.)  Either way, make sure it fades away to nothing (from a solid color to white) in about 1/3 of the height of the block (or width if you did repeat-y) so that 2/3 of the height is white.
        <br><br>

        Here are a couple free gradient image generators:
        <a href="http://www.generateit.net/gradient/index.php" target="_blank">www.generateit.net</a>
        &nbsp;&nbsp;
      	<a href="http://angrytools.com/gradient/image.php" target="_blank">angrytools.com</a>
      </div>

      <div id="pure_css_gradient">
        Use the <a href="https://www.w3schools.com/css/css3_gradients.asp" target="_blank">pure CSS gradient capability</a> that recently became available in CSS3 to try to replicate the above experiment with gradient graphics.  In particular, none of the examples in the W3Schools page quickly fade to white in about 1/3 of the block like you are supposed to to do using a gradient graphic above. See if you can figure out how that can be done with pure CSS gradients.
      </div>


    </div>


<? require 'site_footer.php'; ?>