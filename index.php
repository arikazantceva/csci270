<? 
    // These have to be defined BEFORE the header file is required.
    $page_title = 'Home';
    // $extra_stylesheets[] = 'extra_styles1.css';
?>

<? require 'site_header.php'; ?>



<!-- CONTENT -->
<div class="main">
    <div class="bg_yellow bg_doodle">
        <div class="content">
            <h1>CSCI 270 - Web Development</h1>

            <h2>Course Description</h2>
            <p>This course builds upon Web programming fundamentals. It includes a review of HTML and CSS 
                fundamentals and detailed coverage of CSS topics including selectors, cascade, 
                positioning, page layout techniques, CSS media queries, and responsive/mobile design techniques. 
                The course provides an introduction to server-side scripting and server side includes, 
                advanced CSS/JavaScript frameworks, responsive grid design, and user interface tools.
            </p>
            <!-- ----------- -->
            <div class="tech_overview">
                <h3>Technology Overview</h3>
                <ul>
                    <li>This site is built using the latest coding standards for HTML5 and CSS.</li>
                    <li>This site is coded by hand with <i>Visual Studio Code</i>. A WYSIWYG editor was not used.</li>
                    <li>This site is manually managed on the Web server using the <i>Cyberduck</i> FTP client.</li>
                    <li>The favicon and logo were designed using <i>Adobe Illustrator</i>.</li>
                    <li>This site uses various custom fonts:
                        <ul>
                            <li><span style="font-family: Montserrat; font-weight: bold;">Montserrat</span> is used for headings and is stored locally;</li>
                            <li><span style="font-family: 'Open Sans';">Open Sans</span> is used for body text and is imported from the Google Fonts CDN;</li>
                            <li><i>Roboto Mono</i> is used for the technology overview section and is imported from the Google Fonts CDN.</li>
                        </ul>
                    </li>
                    <li>This site uses the <a class="footerlink" href="https://necolas.github.io/normalize.css/">normalize.css</a> stylesheet to eliminate subtle differences in different Web Browsers.</li>
                </ul>
            </div>
            <!-- ----------- -->
        </div>
    </div>

    <!-- ----------- -->

    <div class="bg_white">
        <div class="content grid-container col2">
            <div class="item1">
                <h3>Computer Science Major</h3>
                <p>I am pursing a <a class="buttonlink" href="https://www.lakeforest.edu/academics/majors-and-minors/computer-science">Computer Science Major</a> at Lake Forest College.</p>
                <p>Lake Forest College's computer science program offers a unique blend of technical skills 
                    and liberal arts education to prepare student for a dynamic career in the digital age.
                </p>
            </div>
            <!-- ----------- -->
            <div class="item2">
                <h3>Studio Art Major</h3>
                <p>I am also pursuing an <a class="buttonlink" href="https://www.lakeforest.edu/academics/majors-and-minors/art-and-art-history">Art Major</a> with a Studio Art concentration.</p>
                <p>The art department offers three learning tracks: studio art, art history, and New Media Art and Design. 
                    Studio students learn painting, drawing, graphic design, sculpture, video, digital photography 
                    and more.
                </p>
            </div>
        </div>
    </div>

    <!-- ----------- -->

    <div class="bg_blue">
        <div class="content grid-container col3">
            <div class="pic">
                <img src="images/tosya.jpg" alt="photo of a pet rat" width="250px">
                <br>
                <span class="caption">here's a photo of my old pet Tofsla!</span>
            </div>
            <!-- ----------- -->
            <div class="abtme">
                <h2>About Me</h2>
                <p>I'm Ari Kazantceva. I am a junior at Lake Forest College, I'm from Russia, and I love domesticated rats! &#128000;<br><br>
                    There are two things that define my academic interests:
                </p>
                <ol>
                    <li>Solving problems is fun -- how do I achieve the best outcome given the initial set of restrictions and requirements?</li>
                    <li>I have a love for creation and spending time with my hands and my ideas to make something tangible that did not exist before.</li>
                </ol>
                <p>Combining Visual Art and Computer Science just seemed like the perfect combination to fit both of these traits :)</p>
            </div>
        </div> 
    </div>
</div>



<? require 'site_footer.php'; ?>