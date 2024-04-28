<footer>
    <div class="footer-container">
        <div class="footer-section">
            <!-- Part 1: Logo and Address -->
            <div class="logo-section">
                <img src="<?php echo $path;?>assets/img/abeek-white-logo.png" alt="ABEEK Logo" onclick="location.href='<?php echo $path ?>index.php'">
                <p>1 Lomb Memorial Dr, <br>Rochester, NY 14623</p>
            </div>
        </div>
        <div class="footer-section">
            <!-- Part 2: UNIX Basics -->
            <div class="submenu-section">
                <h3>UNIX Basics</h3>
                <ul class="submenu">
                    <li><a href="<?php echo $path; ?>pages/intro-unix.php">Intro to Unix</a></li>
                    <li><a href="<?php echo $path; ?>pages/unix-file-systems">Unix File System</a></li>
                    <li><a href="<?php echo $path; ?>pages/command-line">Command Line Basics</a></li>
                    <li><a href="<?php echo $path; ?>pages/file-management">File Management</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-section">
            <!-- Part 3: Advanced UNIX -->
            <div class="submenu-section">
                <h3>Advanced UNIX</h3>
                <ul class="submenu">
                    <li><a href="#">Shell scripting</a></li>
                    <li><a href="#">Process management</a></li>
                    <li><a href="#">Networking</a></li>
                    <li><a href="#">System Administration</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-section">
            <!-- Part 4: Examples -->
            <div class="submenu-section">
                <h3>Examples</h3>
                <ul class="submenu">
                    <li><a href="#">Code Snippets</a></li>
                    <li><a href="#">Interactive Examples</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-section">
            <!-- Part 5: More -->
            <div class="submenu-section">
                <h3>More</h3>
                <ul class="submenu">
                    <li><a href="<?php echo $path; ?>pages/exercises.php">Exercises</a></li>
                    <li><a href="<?php echo $path; ?>pages/quizzes.php">Quizzes</a></li>
                    <li><a href="<?php echo $path; ?>pages/certifications.php">Certifications</a></li>
                    <li><a href="<?php echo $path; ?>pages/about-us.php">About ABEEK</a></li>
                    <li><a href="<?php echo $path; ?>pages/contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-section">
            <!-- Part 6: Scroll to Top and Mode Switch -->
            <script>
                function scrollToTop() {
                    document.body.scrollTop = 0; // For Safari
                    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
                }
            </script>
            <div class="scroll-to-top">
                <a href="#top"><i class="fas fa-arrow-up"></i></a>
                <!-- Add mode switch icon here -->
            </div>
            <!-- Add copyright notice and scroll to top button -->
            <div class="footer-section">
                <button onclick="scrollToTop()">↑</button>
                <p>&copy; 2024 ABEEK Tutorials</p>
            </div>
        </div>
    </div>
    
</footer>
</body>
</html>