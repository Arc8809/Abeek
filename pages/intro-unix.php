<?php 
    $title = "Intro to Unix";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>

<main class="content_body">
    <h1>Introduction to Unix</h1>
    <p>Unix is a powerful, multi-user, multitasking operating system developed in the late 1960s by a group of AT&T Bell Labs employees, including Ken Thompson, Dennis Ritchie, and others.</p>
    
    <h2>History of Unix</h2>
    <p>Unix has a rich history that dates back to the 1960s. It was originally developed as a portable, multi-tasking operating system for mainframe computers. Over the years, Unix has evolved into various versions, including BSD Unix, System V Unix, and more recently, Linux.</p>
    
    <h2>What is Unix?</h2>
    <p>Unix is an operating system that provides a powerful and flexible environment for computing. It is known for its stability, security, and scalability. Unix is used in a wide range of applications, from servers and workstations to embedded systems and supercomputers.</p>
    
    <h2>Why Use Unix?</h2>
    <p>There are several reasons to use Unix:</p>
    <ul>
        <li><strong>Stability:</strong> Unix systems are known for their stability and reliability, making them ideal for mission-critical applications.</li>
        <li><strong>Flexibility:</strong> Unix provides a flexible environment that allows users to customize their systems to meet their specific needs.</li>
        <li><strong>Security:</strong> Unix has built-in security features that help protect against unauthorized access and malicious attacks.</li>
        <li><strong>Scalability:</strong> Unix systems can scale from small embedded devices to large-scale servers and supercomputers, making them suitable for a wide range of applications.</li>
    </ul>
    
    <h2>How Does Unix Work?</h2>
    <p>Unix follows a simple yet powerful philosophy known as "everything is a file." This means that everything in Unix, including devices, directories, and processes, is represented as a file. Users interact with Unix through a command-line interface (CLI), typing commands to perform tasks such as creating files, managing processes, and networking.</p>
</main>

<?php 
    include($path."assets/inc/footer.php");
?>