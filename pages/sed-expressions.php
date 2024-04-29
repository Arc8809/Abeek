<?php 
    $title = "SED Expressions";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>

<main class="content_body">
     
<div>
    <h1>Learn SED Regular Expressions</h1>
    <p>Welcome to the tutorial on learning `sed` regular expressions!</p>

    <h2>What is `sed`?</h2>
    <p>`sed`, short for stream editor, is a powerful text manipulation tool available in Unix-like operating systems. It operates by reading input line by line, applying commands to each line, and then outputting the result.</p>

    <h2>Using Regular Expressions in `sed`</h2>
    <p>Regular expressions play a crucial role in `sed` for searching, matching, and manipulating text. Here are some common tasks you can perform using regular expressions in `sed`:</p>
    <ul>
        <li>Search and replace text patterns.</li>
        <li>Delete lines matching a specific pattern.</li>
        <li>Print lines containing a certain pattern.</li>
        <li>Perform complex text transformations based on patterns.</li>
    </ul>

    <h2>Basic Syntax</h2>
    <p>The basic syntax for using regular expressions in `sed` is:</p>
    <code>sed 's/pattern/replacement/' file</code>
    <p>This command searches for <code>pattern</code> in each line of <code>file</code> and replaces it with <code>replacement</code>.</p>

    <h2>Common Metacharacters</h2>
    <p>Here are some common metacharacters used in `sed` regular expressions:</p>
    <ul>
        <li><code>.</code> - Matches any single character.</li>
        <li><code>*</code> - Matches zero or more occurrences of the preceding element.</li>
        <li><code>^</code> - Matches the start of a line.</li>
        <li><code>$</code> - Matches the end of a line.</li>
        <li><code>[abc]</code> - Matches any character in the set (a, b, or c).</li>
        <li><code>\b</code> - Matches a word boundary.</li>
    </ul>

    <h2>Examples</h2>
    <p>Let's look at some examples of using `sed` regular expressions:</p>
    <h3>Example 1: Search and Replace</h3>
    <p>Replace all occurrences of "apple" with "orange" in a file:</p>
    <code>sed 's/apple/orange/' filename.txt</code>

    <h3>Example 2: Delete Lines</h3>
    <p>Delete lines containing the word "error" from a file:</p>
    <code>sed '/error/d' filename.txt</code>

    <h3>Example 3: Print Matching Lines</h3>
    <p>Print lines that start with "From:" from a file:</p>
    <code>sed -n '/^From:/p' filename.txt</code>

    <!-- Add more examples as needed -->

    <h2>Conclusion</h2>
    <p>Now you're ready to start exploring `sed` regular expressions! Practice and experimentation are key to mastering this powerful tool.</p>
</div>


</main>

<?php 
    include($path."assets/inc/footer.php");
?>