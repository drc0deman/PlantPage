<nav>
<a class="<?php
    if (PATH_PARTS['filename'] == "top"){
        print'activePage';
    }
    ?>" href="top.php">Top of Page</a>

<a class="<?php
    if (PATH_PARTS['filename'] == "header"){
        print'activePage';
    }
    ?>" href="header.php">Header</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "display"){
        print'activePage';
    }
    ?>" href="display.php">Home</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "about"){
        print'activePage';
    }
    ?>" href="about.php">About</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "form"){
        print'activePage';
    }
    ?>" href="form.php">Form</a>

    <a class="<?php
    if (PATH_PARTS['filename'] == "footer"){
        print'activePage';
    }
    ?>" href="footer.php">Footer</a>


</nav>
