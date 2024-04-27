<?php 
    $title = "About Us";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>

<main>
      <section class="about-section">
        <div class="about-container">
          <h1>About Us</h1>
          <p>
            We are a group of students passionate about Unix and eager to share
            our knowledge with others. ABEEK Tutorials was born out of our
            desire to create accessible and comprehensive tutorials for Unix
            beginners and advanced users alike.
          </p>
          <p>
            The name ABEEK comes from the first initials of our team members:
            Anderson, Baden, Emma, Enis, and Kevin. Together, we strive to make
            learning Unix enjoyable and rewarding for everyone.
          </p>
          <p>
            Our mission is to empower individuals to master Unix through
            engaging tutorials, practical examples, and hands-on exercises.
            Whether you're new to Unix or looking to enhance your skills, ABEEK
            Tutorials is here to support your journey.
          </p>
          <p>
            At ABEEK Tutorials, we believe in the power of community and
            collaboration. That's why we encourage our users to actively
            participate in discussions, ask questions, and share their own
            experiences. Together, we can build a thriving community of Unix
            enthusiasts.
          </p>
          <p>
            Join us on this exciting journey as we explore the vast world of
            Unix and unlock its endless possibilities. Let's learn, grow, and
            innovate together!
          </p>
          <img src="<?php echo $path; ?>assets/img/ABEEK_logo.webp" alt="ABEEK Logo" class="about-logo" />
        </div>
        <div></div>
      </section>
    </main>

<?php 
    include($path."assets/inc/footer.php");
?>