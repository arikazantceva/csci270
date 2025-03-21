<? 
    // These have to be defined BEFORE the header file is required.
    $page_title = 'Lists | Worksheet';
    // $extra_stylesheets[] = 'extra_styles1.css';
?>

<? require 'site_header.php'; ?>

<style>
    .worksheet {
        margin: 20px;
    }
    .worksheet ul { border: 3px dashed blue; }

    .worksheet li { border: 2px solid red; }

    .worksheet .q {
        margin: 15px 0;
    }
    .worksheet .q .a {
        padding-left: 30px;
        padding-top: 3px;
        color: #3326aa;
    }

    .worksheet .list2 li {
        float: left;
    }

    .worksheet .clear_float { clear: both; }

    .worksheet hr { margin: 40px 0;}

    .worksheet .new ul {
        list-style-type: none;
        padding: 0;
        border: none;
    }

    .worksheet .new li {
        display:block;
        border: none;
    }

    .worksheet .new li a:link, .new li a:visited { 
        text-decoration: none;
        padding: 10px 30px;
        background-color: #0100D4;
        color: #cce4ff;
        border: none;
    }

    .worksheet .new li a:hover, .new li a:active {
        background-color: #05009c;
        color: #ffffff;
    }
</style>



<div class="worksheet">
    <div class="list1">
        A fancy rat (<i>Rattus norvegicus domestica</i>) is made up of:
        <ul>
            <li>a silly snout</li>
            <li>a snotty nose</li>
            <li>a fat body</li>
            <li>two big hind legs</li>
            <li>two stubby front grabbers</li>
            <li>a scaly tail</li>
        </ul>
    </div>

    <div class="q">
        Question 1: Notice the relatively large left indentation of the list 
        (the extra space to the left of the bullets). 
        Precisely which CSS property(s) is creating that indentation: 
        padding/margin of the ul or li blocks?
        <div class="a">
            The <b>padding of the ul block</b>: you can see that from the visible borders.
        </div>
    </div>
    <div class="q">
        Question 2: What CSS property is appropriate to adjust the vertical space 
        between the list items to make the list more or less compact?
        <div class="a">
            The <b>margins of the li items.</b>
        </div>
    </div>
    <div class="q">
        Question 3: What CSS property can you use to change where the bullets are drawn 
        relative to the borders of the li blocks? 
        (Hint: It's not one you already know like padding or margin. So do some research.)    
        <div class="a">
            The <b>The list-style-position</b> property: it can draw the bullets either on the
            outside or on the inside of the li blocks.
        </div>
    </div>

    <hr>

    <div class="list2">
        A fancy rat (<i>Rattus norvegicus domestica</i>) is made up of:
        <ul>
            <li>a silly snout</li>
            <li>a snotty nose</li>
            <li>a fat body</li>
            <li>two big hind legs</li>
            <li>two stubby front grabbers</li>
            <li>a scaly tail</li>
            <div class="clear_float"></div>
        </ul>
    </div>

    <div class="q">
        Question 4: How did you fix the collapsing border of the parent ul block problem?
        <div class="a">
            <b>Cleared the float</b> by applying an empty div with the <i>"clear: both;"</i>
            CSS style.
        </div>
    </div>

    <hr>

    <div class="list2 new">
        A fancy rat (<i>Rattus norvegicus domestica</i>) is made up of:
        <ul>
            <li><a href="#">a silly snout</a></li>
            <li><a href="#">a snotty nose</a></li>
            <li><a href="#">a fat body</a></li>
            <li><a href="#">two big hind legs</a></li>
            <li><a href="#">two stubby front grabbers</a></li>
            <li><a href="#">a scaly tail</a></li>
            <div class="clear_float"></div>
        </ul>
    </div>
</div>



<? require 'site_footer.php'; ?>