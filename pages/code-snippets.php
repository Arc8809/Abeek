<?php 
    $title = "Code Snippets";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>

<main class="content_body">
     
<div>
<h1>Code Snippets</h1>
    
    <h2>Unix Commands</h2>
    <p>Below are some useful Unix commands:</p>
    <ul>
        <li><strong>ls</strong>: List files and directories</li>
        <li><strong>cd</strong>: Change directory</li>
        <li><strong>pwd</strong>: Print working directory</li>
        <li><strong>cp</strong>: Copy files and directories</li>
        <li><strong>mv</strong>: Move or rename files and directories</li>
        <li><strong>rm</strong>: Remove files and directories</li>
        <li><strong>mkdir</strong>: Create directories</li>
        <li><strong>touch</strong>: Create empty files</li>
        <li><strong>cat</strong>: Concatenate and display file contents</li>
        <li><strong>grep</strong>: Search for patterns in files</li>
        <!-- Add more commands and descriptions as needed -->
    </ul>

    <h2>Terminal Commands Examples</h2>

    <img src="<?php echo $path; ?>assets/images/mkdir.png" id="mkdir_terminal" class="terminal_example">

    <img src="<?php echo $path; ?>assets/images/cd.png" id="cd_terminal" class="terminal_example">

    <img src="<?php echo $path; ?>assets/images/pwd.png" id="directory_terminal" class="terminal_example">

    <h2>Shell Scripting</h2>
    <p>Here are some examples of shell scripts:</p>
    
    <h3>Example 1: Hello World</h3>
    <p>A basic shell script that prints "Hello, world!":</p>
    <pre><code>#!/bin/bash
echo "Hello, world!"
</code></pre>

    <h3>Example 2: File Information</h3>
    <p>A shell script that displays information about a file:</p>
    <pre><code>#!/bin/bash
echo "File Information:"
echo "-----------------"
ls -l $1
</code></pre>

    <h3>Example 3: Process Monitoring</h3>
    <p>A shell script that monitors running processes:</p>
    <pre><code>#!/bin/bash
echo "Running Processes:"
echo "------------------"
ps aux
</code></pre>
</div>


</main>

<?php 
    include($path."assets/inc/footer.php");
?>
