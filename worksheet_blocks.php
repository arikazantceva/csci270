<? 
    // These have to be defined BEFORE the header file is required.
    $page_title = 'Blocks | Worksheet';
    // $extra_stylesheets[] = 'extra_styles1.css';
?>

<? require 'site_header.php'; ?>
  
<style>

    /****************************************************************************************************
    Styles for the structure of this worksheet
    ****************************************************************************************************/

    #page_wrapper {
      font-size:11pt;
      text-align:left;
    }

    #page_wrapper fieldset {
      margin: 0px 5px 15px 0px;  /*TRBL*/
      border-color:#009;
    }
    #page_wrapper legend {
      font-weight:bold;
      color:#009;
    }

    #page_wrapper code {
      font-size:.8em;
    }

    span.section_title {
      font-weight:bold;
    }
    div.section {
      margin: 5px 5px 5px 5px;  /*TRBL*/
      border-top: 1px dotted #000 ;
    }

    div.answer {
      margin: 0px 5px 10px 10px;  /*TRBL*/
      color:#339;
    }

    /****************************************************************************************************
    Styles for the Box Sizing Examples
    ****************************************************************************************************/
    div.red_block {
      /* when box-sizing is not set, the default is content-box */
  	  margin: 5px 10px 15px 20px;  /*TRBL*/
  	  border: 2px solid #000;
  	  padding: 5px;
  	  width: 500px;
  	  background-color: #FEE;  /* red */
  	}

    div.green_block {
  	  box-sizing: border-box;
  	  margin: 5px 10px 15px 20px;  /*TRBL*/
  	  border: 2px solid #000;
  	  padding: 5px;
  	  width: 500px;
  	  background-color: #EFE; /* green */
  	}

  	div.blue_block {
  	  margin: 10px 5px 20px 15px;  /*TRBL*/
  	  border: 10px solid #FFF;
  	  padding: 5px 7px;   /*TB & LR*/
  	  width: 500px;
  	  background-color: #EEF; /* blue */
  	}

  	/*
  	It's not considered good practice to use style class names like above.  If you later change the
  	actual colors, the class names would no longer be accurate unless you change them too.
  	A professional developer might instead use names like box_sizing1, box_sizing2, ...
  	where the names are still accurate even if the styles inside change.
  	*/

    /****************************************************************************************************
    Styles for the Child Expansion Example
    ****************************************************************************************************/

    #parent {
  	  margin: 5px 10px 5px 10px;  /*TRBL*/
  	  border: 1px solid #000;
  	  padding: 5px;
  	  width:300px;
  	  background-color:#DDD;
  	}
  	#child {
  	  margin: 5px 10px 5px 10px;  /*TRBL*/
  	  border: 1px solid #000;
  	  padding: 5px;
  	  background-color:#EEE;
  	}

    /****************************************************************************************************
    Styles for the Child Inheritance from Parent question
    ****************************************************************************************************/

    .parentblock {
      background-color: #112333; 
      color: #d5f0ff; 
      border: 5px dashed #680ce8; 
      cursor: grab; 
      text-align: center; 
      font-family:'Trebuchet MS', Arial, sans-serif; 
      font-style: italic; 
      font-weight: bold; 
      margin: 10px; 
      padding: 30px 10px; 
      width: 500px;
    }

    .childblock { border: 2px solid #856aff; }

</style>



  <div id="page_wrapper">
    <h3>Blocks Worksheet: Box Sizing and Inheritance</h3>

    <b>Important:</b> Make sure you examine the
    <a href="http://www.w3schools.com/css/css_boxmodel.asp" target="_blank">W3Schools Box Model Overview</a>
    before doing this Worksheet.
    <br><br>

    <span class="section_title">Some (unofficial) Terminology:</span>
    <div class="section" style="font-size:.75em;">
      <b>Content Width</b>  - The content-box width of the block -- the default for the CSS width property.
      <br>
      <b>Full Width</b>  - The complete width the block takes up in the page, including any left/right margins.
      <br>
      &nbsp;&nbsp;&nbsp; The full width can be larger than the width set by the CSS width property.
      <br>
      <b>Visible Width</b> - The extent of the block that is visible to the human eye. (May be less than full width.)
      <br>
      &nbsp;&nbsp;&nbsp; If you can see it (background color, border) it contributes to the visible width.
      <br>
      &nbsp;&nbsp;&nbsp; A block could have no visible width if no parts of it have color contrast with it's surroundings.
    </div>

    <br>

    <!--************************************************************************************-->
    <fieldset>
      <legend>Box Sizing</legend>

      <div class="red_block">
        <code>
          /* when box-sizing is not set, the default is content-box */<br>
          margin: 5px 10px 15px 20px;  /*TRBL*/<br>
          border: 2px solid #000;<br>
          width: 500px;<br>
          padding: 5px;<br>
        </code>
      </div>

      <div class="green_block">
        <code>
          box-sizing: border-box;<br>
          margin: 5px 10px 15px 20px  /*TRBL*/<br>
          border: 2px solid #000;<br>
          width: 500px;<br>
          padding: 5px;<br>
        </code>
      </div>

      <div class="blue_block">
        <code>
          margin: 10px 5px 20px 15px;  /*TRBL*/<br>
          border: 10px solid #FFF;<br>
          width: 500px;<br>
          padding: 5px 7px; /*TB & LR*/<br>
        </code>
      </div>


      <span class="section_title">Question 1:</span>
      <div class="section">
        Calculate the different widths for each block and enter them into the table below:
        <div class="answer">
          <table cellspacing="5" cellpadding="5">
              <tr>
                <td>&nbsp;</td>
                <td>Content Width</td>
                <td>Full Width</td>
                <td>Visible Width</td>
              </tr>
              <tr>
                <td>Red Block</td>
                <td>500px</td>
                <td>544px</td>
                <td>514px</td>
              </tr>
              <tr>
                <td>Green Block</td>
                <td>486px</td>
                <td>530px</td>
                <td>500px</td>
              </tr>
              <tr>
                <td>Blue Block</td>
                <td>500px</td>
                <td>554px</td>
                <td>514px</td>
              </tr>
          </table>
       </div>
      </div>

      <br>

      <span class="section_title">Question 2:</span>
      <div class="section">
        Notice the style class names for the three blocks above.  Are those good style class names to use in practice?  Why or why not?
        <div class="answer">
          These are <i>not</i> good style class names because they use the color of the block in the class name.
          If you were to change the background color of the blocks, the class name would not match up with how the block actually looks,
          so this way of naming classes is bad for potential future changes.
        </div>
      </div>
    </fieldset>

    <br>

    <!--************************************************************************************-->
    <fieldset>
      <legend>Child Expansion within Parent Block</legend>

      <div id="parent">
          <code>
            border: 1px solid #000;<br>
            padding:5px;<br>
            width:300px;
          </code>
          <div id="child">
            <code>
              margin: 5px 10px 5px 10px; /*TRBL*/<br>
              border: 1px solid #000;<br>
              padding: 5px;<br>
            </code>
          </div>
      </div>

      <br>

      <span class="section_title">Question 3:</span>
      <div class="section">
        Calculate the <i>content width</i> of the child block and list it below. Briefly explain your calculation.
        <div class="answer">
          Answer: 268px.<br>
          Calculations: 300 (content width of parent block) - (10+10 + 1+1 + 5+5 (margins, border, and padding of child block)) = 268.<br>
          The child block expands as much as it can within the content area of the parent block, minus the child's non-content widths. 
        </div>
      </div>

      <br>

      <span class="section_title">Question 4:</span>
      <div class="section">
        Suppose you apply <i>box-sizing:border-box;</i> to both the parent and child blocks above.  Calculate the <i>content width</i> of the child block and list it below.
        <div class="answer">
          Answer: 256px.<br>
          Calculations: (300-2-10 (parent content width)) - (20+2+10 (child non-content widths)) = 288 - 32 = 256.
        </div>
      </div>

      <br>

      <span class="section_title">Question 5:</span>
      <div class="section">
        The grey blocks in this section use CSS ID selectors but the 3 colored blocks in the first section use class selectors.
        There was no compelling reason to choose one type over the other for this worksheet, other than to contrast the difference.
        In general, you can always use a class selector instead of an ID selector, but not vise-versa (the other way around).
        Briefly explain why.
        <div class="answer">
          ID selectors are unique and can only be used for one element per each page (for example, you can't create a second block with a "parent" ID in this worksheet).
          If you want to style multiple elements with the same class, you'd have to use a class and not an ID selector, since you could tag multiple elements with the same class.<br>
          Additionally, ID selectors are often used for distingushing elements when scripting or creating interactivity, for example with JavaScript or PHP. 
        </div>
      </div>
    </fieldset>

    <br>

    <!--************************************************************************************-->
    <fieldset>
      <legend>Child Inheritance from Parent</legend>

      <span class="section_title">Task to Complete:</span>
      <div class="section">
        Make your own example. Create a <b>parent</b> div with the following style properties set:
        <br>
        <code>background-color, color, border, cursor, text-align, font-family, font-style, font-weight, margin, padding, width</code>
        <br>
        Set each value to something other than the default so that you can easily see the effect of your CSS in your blocks.
        For example, set text-align to something other than left so that you can see it's doing something,
        set large margins and padding (like 30px or more) so that they are obvious, use a strange font, etc.
        Put the following sentence in the parent block:
        This task is to determine what properties from a parent block (like me) are inherited by a child block.

        <br><br>

        Put a <b>child</b> div inside the parent below that sentence.
        The <b>ONLY</b> style property the child block should have set is border so that you can see its outline.
        <br><br>
        <b>Inside the child block, answer the following questions:</b>
        <br>
        Which style properties did the child inherit from from the parent and which ones it did not?
        Can you categorize the general types of properties that are inherited and what general types are not?
        Note that border is one property that will <b>not</b> inherit, which is why the child needs it's own border set so its outline is apparent.
      </div>

      <!-- Put the HTML code for your Task here -->
      <div class="parentblock">
        This task is to determine what properties from a parent block (like me) are inherited by a child block.
        <div class="childblock">
          The child block did not inherit size-related properties, like margins/padding/width. The width is calculated automatically, as by default the child block will expand to take up as much width as possible within the parent block.<br>
          The block did inherit all other styles, like colors, cursor, fonts and such.
        </div>
      </div>
      <!-- Put the CSS for this in a new structured CSS comment block below the other styles in the head section -->


    </fieldset>
    
    <br><br><br>

  </div> <!-- end of wrapper -->


<? require 'site_footer.php'; ?>
