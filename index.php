<?php 
    $title = "ABEEK Unix Tutorials - Home";
    $path = "./";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>

<script>
  function search() {
    // Get the search term entered by the user
    var searchTerm = document.getElementById('searchInput').value;

    // Encode the search term for passing it as a query parameter
    var encodedSearchTerm = encodeURIComponent(searchTerm);

    // Construct the search results page URL with the encoded search term
    var searchResultsPageURL = 'pages/search_results.php?q=' + encodedSearchTerm;

    // Open the search results page in a new tab/window
    window.open(searchResultsPageURL, '_blank');
}

</script>
    <div class="index-header">
      <!-- Middle Content -->
      <div class="middle-header">
        <div class="middle-content">
          <p>
            We are <span class="highlight">ABEEK Tutorials</span>, your ultimate
            destination for transforming<br> from a UNIX novice to a seasoned pro.
          </p>
          <button onclick="location.href='<?php echo $path ?>pages/intro-unix.php'">Start Learning Now</button>
          <form action="pages/search_results.php" method="get">
              <div class="search-container">
                  <input type="text" name="q" placeholder="What do you want to learn?" id="searchInput" />
                  <button type="submit">Search</button>
              </div>
          </form>

        </div>
        <img
          src="<?php echo $path; ?>assets/img/1.png"
          alt="Unordered Small Shape"
          class="line-shape1"
        />
        <img
          src="<?php echo $path; ?>assets/img/2.png"
          alt="Unordered Small Shape"
          class="line-shape2"
        />
      </div>
    </header>

    <main>
        <div class="course-section">
            <h2 class="explore">Explore Our <br>Two Main Courses</h2>

          <div class="course-collection">
              <div class="course course1" style="background-image: url('<?php echo $path ?>assets/img/beginners-image.jpg');">
                <div class="course-info">
                  <h2>Unix for Beginners</h2>
                  <p>Get started with Unix fundamentals and build a solid foundation.</p>
                </div>
              </div>
              
              <div class="course course2" style="background-image: url('<?php echo $path ?>assets/img/advanced-unix.jpg');">
                <div class="course-info">
                  <h2>Advanced Unix</h2>
                  <p>Dive deeper into Unix concepts and enhance your skills.</p>
                </div>
              </div>
            </div>
        </div>

        <div class="testimonial-section">
            <h2>What Our Students Say</h2>
            <div class="testimonial">
              <img src="<?php echo $path; ?>assets/img/john-doe.webp" alt="Student 1" />
              <div class="testimonial-info">
                <h3>John Doe</h3>
                <p>This website has been invaluable in my journey to becoming a UNIX expert. The tutorials are clear and concise, and the interactive examples helped solidify my understanding. I'm grateful for the knowledge I've gained here.</p>
              </div>
            </div>
            <div class="testimonial">
              <img src="<?php echo $path; ?>assets/img/jane-smith.avif" alt="Student 2" />
              <div class="testimonial-info">
                <h3>Jane Smith</h3>
                <p>As someone new to UNIX, I found this website incredibly helpful. The explanations are easy to follow, and the exercises provided challenged me in all the right ways. Thanks to this platform, I now feel confident in my UNIX skills.</p>
              </div>
            </div>
            <div class="testimonial">
                <img src="<?php echo $path; ?>assets/img/emily-johnson.avif" alt="Student 3" />
                <div class="testimonial-info">
                  <h3>Emily Johnson</h3>
                  <p>Discovering this website was a game-changer for me. As someone transitioning into a career in tech, the UNIX tutorials provided here have been invaluable. I've gained confidence in my skills and feel better prepared for the challenges ahead.</p>
                </div>
            </div>          
        </div>
          
    </main>

<?php 
    include($path."assets/inc/footer.php");
?>
