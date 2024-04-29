<?php 
    $title = "Shell Scripting";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>

<main class="content_body">
     
<div>
    <h1>In this chapter...</h1>
    <p>Learn about the Unix shell, which processes user commands.</p>
    <h2>What is a shell?</h2>
    <p>The shell interprets user commands and passes messages to the OS.</p>
    <p>When you log in to Unix, you see a prompt like this: <code>train01@vitaly:~&gt;</code></p>
    <p>Prompts vary; modern setups usually show username, system name, and current directory.</p>

    <h2>Different shells</h2>
    <p>Several shells are available on most Unix systems:</p>
    <ul>
        <li>Bourne shell (sh)</li>
        <li>C shell (csh)</li>
        <li>Bourne Again shell (bash)</li>
        <li>TENEX C shell (tcsh)</li>
        <li>Others like ksh, zsh</li>
    </ul>

    <h2>Using the shell</h2>
    <p>Simple commands consist of a single word, the program name:</p>
    <code>% passwd</code>
    <p>To run a command, type its name and press ENTER.</p>
    <p>Command names are usually lowercase and case-sensitive.</p>
    <p>Arguments can be provided to vary command behavior:</p>
    <code>% echo Hello</code>
    <code>% fortune -l</code>
    <code>% fortune -m Winston</code>
    <p>Arguments starting with a hyphen are called "command line switches" or "switches".</p>
    <p>Some commands take filenames as arguments:</p>
    <code>% cat myfile.txt</code>
</div>


</main>

<?php 
    include($path."assets/inc/footer.php");
?>