
<header>
      <div class="container">
        <div class="logo">
          <img src="<?php echo $path; ?>assets/img/ABEEK_logo.webp" alt="ABEEK Logo" onclick="location.href='<?php echo $path ?>index.php'" />
        </div>
        <nav id="nav">
          <div>
          <ul>
            <li><a href="<?php echo $path; ?>index.php" id="home">Home</a></li>
            <li class="dropdown">
              <a href="<?php echo $path; ?>pages/intro-unix.php" class="nav-link">UNIX Basics ˅</a>
              <ul class="submenu">
                <li><a href="<?php echo $path; ?>pages/intro-unix.php">Intro to Unix</a></li>
                <li><a href="<?php echo $path; ?>pages/unix-file-systems">Unix File System</a></li>
                <li><a href="<?php echo $path; ?>pages/command-line">Command Line Basics</a></li>
                <li><a href="<?php echo $path; ?>pages/file-management">File Management</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link">Advanced UNIX ˅</a>
              <ul class="submenu">
                <li><a href="#">Shell scripting</a></li>
                <li><a href="#">SED Regular Expressions</a></li>
                <li><a href="#">System Logging</a></li>
                <li><a href="#">Signals & Traps</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link">Examples ˅</a>
              <ul class="submenu">
                <li><a href="#">Code Snippets</a></li>
                <li><a href="#">Interactive Examples</a></li>
              </ul>
            </li>
            <!-- Add other menu items here -->
            <li class="dropdown">
              <a href="#" class="nav-link">More ˅</a>
              <ul class="submenu">
                <li><a href="#">Exercises</a></li>
                <li><a href="#">Quizzes</a></li>
                <li><a href="#">Certifications</a></li>
                <li><a href="<?php echo $path; ?>pages/about-us.php">About ABEEK</a></li>
                <li><a href="<?php echo $path; ?>pages/contact-us.php">Contact Us</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        </div>
      </div>