
<header>
      <div class="container">
        <div class="logo">
          <img src="<?php echo $path; ?>assets/img/ABEEK_logo.webp" alt="ABEEK Logo" onclick="location.href='<?php echo $path ?>index.php'" />
        </div>
        <button class="nav-toggle">&#9776;</button>
        <nav id="nav">
          <div>
          <ul>
            <li><a href="<?php echo $path; ?>index.php" id="home">Home</a></li>
            <li class="dropdown">
            <a class="nav-link" onclick="show_dropdown('basics')"<?php if($title == "Intro to Unix" || $title == "Unix File System" || $title == "Command Line Basics" || $title == "File Management"){ echo 'class="active"';} ?> href="#">UNIX Basics ˅</a>
              <ul class="submenu" id="basics">
                <li <?php if($title == "Intro to Unix"){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>pages/intro-unix.php">Intro to Unix</a></li>
                <li <?php if($title == "Unix File System"){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>pages/unix-file-systems">Unix File System</a></li>
                <li <?php if($title == "Command Line Basics"){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>pages/command-line">Command Line Basics</a></li>
                <li <?php if($title == "File Management"){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>pages/file-management">File Management</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href=# class="nav-link" onclick="show_dropdown('advanced')"<?php if($title == "Shell Scripting" || $title == "SED Expressions" || $title == "System Logging" || $title == "Signals and Traps"){ echo 'class="active"';} ?>>Advanced UNIX ˅</a>
              <ul class="submenu" id="advanced">
                <li <?php if($title == "Shell Scripting"){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>pages/shell-scripting.php">Shell scripting</a></li>
                <li <?php if($title == "SED Expressions"){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>pages/sed-expressions.php">SED Regular Expressions</a></li>
                <li <?php if($title == "System Logging"){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>pages/system-logging.php">System Logging</a></li>
                <li <?php if($title == "Signals and Traps"){ echo 'class="active"';} ?>><a href="<?php echo $path; ?>pages/signals-traps.php">Signals & Traps</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link" onclick="show_dropdown('examples')">Examples ˅</a>
              <ul class="submenu" id="examples">
                <li><a href="#">Code Snippets</a></li>
                <li><a href="#">Interactive Examples</a></li>
              </ul>
            </li>
            <!-- Add other menu items here -->
            <li class="dropdown" >
              <a href="#" class="nav-link" onclick="show_dropdown('more')">More ˅</a>
              <ul class="submenu" id="more">
                <li><a href="<?php echo $path; ?>pages/exercises.php">Exercises</a></li>
                <li><a href="<?php echo $path; ?>pages/quizzes.php">Quizzes</a></li>
                <li><a href="<?php echo $path; ?>pages/certifications.php">Certifications</a></li>
                <li><a href="<?php echo $path; ?>pages/about-us.php">About ABEEK</a></li>
                <li><a href="<?php echo $path; ?>pages/contact-us.php">Contact Us</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        </div>
      </div>

      <script>
    document.addEventListener("DOMContentLoaded", function() {
      const nav = document.getElementById("nav");
      const navToggle = document.querySelector(".nav-toggle");

      navToggle.addEventListener("click", function() {
        nav.classList.toggle("show");
      });

      window.addEventListener("resize", function() {
        if (window.innerWidth >= 790) {
          nav.classList.remove("show");
        }
      });
    });

    function show_dropdown(id){
      var content = document.getElementById(id);
      var allDropdowns = document.querySelectorAll('.submenu');
      
      // Close all dropdowns
      allDropdowns.forEach(function(dropdown) {
        if (dropdown.id !== id && dropdown.style.display === "block") {
          dropdown.style.display = "none";
        }
      });
      
      // Toggle the display if none, close it otherwise
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      }
    };

    
  
  // Check if the click is anywhere else besides the dropdown, if yes, then close all the dropdowns
  document.addEventListener('click', function(event) {
  // Check if the clicked element is not a dropdown toggle or its content
  if (!event.target.matches('.nav-link')) {
    // Close all dropdowns
    var allDropdowns = document.querySelectorAll('.submenu');
    allDropdowns.forEach(function(dropdown) {
      dropdown.style.display = "none";
     });
    }
  });

  </script>