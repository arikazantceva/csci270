<? 
    // These have to be defined BEFORE the header file is required.
    $page_title = 'Contact Me';
    // $extra_stylesheets[] = 'extra_styles1.css';
?>
<? require 'site_header.php'; ?>



<!-- CONTENT --> 
<div class="main">
    <div class="bg_yellow">
        <div class="form_wrapper">
            <form method="post" action="contact_engine.php">
                <label for="Name">Name:</label>
                <input type="text" name="Name" id="Name">
                <br><br>

                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email">
                <br><br>

                <label for="Phone">Phone:</label>
                <input type="text" name="Phone" id="Phone">
                <br><br>

                <label for="Message">Message:</label>
                <textarea name="Message" id="Message" rows="10"></textarea>
                <br><br>

                <button type="submit"> Contact Me </button>
            </form>
        </div>
    </div>
</div>



<? require 'site_footer.php'; ?>