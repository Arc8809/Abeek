<?php 
    $title = "Signals and Traps";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>

<main class="content_body">
     
<div>
<h1>Unix Signals and Traps: A Tutorial</h1>
    <p>Welcome to the tutorial on signals and traps in Unix-like systems!</p>

    <h2>1. Signals Overview</h2>
    <p>Signals are software interrupts sent to processes to notify them of significant events or changes in state. They are a fundamental part of Unix-like operating systems and are used for process management, error handling, and inter-process communication.</p>

    <h2>2. List of Signals</h2>
    <p>Unix systems define a set of standard signals with numeric identifiers. Here are some common signals:</p>
    <ul>
        <li><code>SIGHUP</code> - Hangup signal</li>
        <li><code>SIGINT</code> - Interrupt signal (e.g., generated by pressing Ctrl+C)</li>
        <li><code>SIGTERM</code> - Termination signal</li>
        <li><code>SIGKILL</code> - Kill signal</li>
        <li><code>SIGUSR1</code> - User-defined signal 1</li>
        <li><code>SIGUSR2</code> - User-defined signal 2</li>
        <!-- Add more signals as needed -->
    </ul>

    <h2>3. Default Actions</h2>
    <p>Each signal has a default action associated with it, which determines the behavior of a process when it receives the signal. Common default actions include termination, termination with core dump, and ignoring the signal.</p>

    <h2>4. Sending Signals</h2>
    <p>Signals can be sent to processes using various methods, such as the <code>kill</code> command or system calls like <code>kill()</code> and <code>raise()</code>.</p>

    <h2>5. Trapping Signals</h2>
    <p>Traps are used to intercept signals in shell scripts and perform custom actions in response. Shell scripts can use the <code>trap</code> command to set up signal handlers for specific signals.</p>

    <h2>6. Cleaning Up Temporary Files</h2>
    <p>Signals like <code>SIGINT</code> and <code>SIGTERM</code> can be trapped to perform cleanup tasks, such as removing temporary files or releasing resources, before terminating a process.</p>

    <h2>7. Ignoring Signals</h2>
    <p>In some cases, processes may want to ignore certain signals to prevent default actions from being triggered. This can be achieved by setting signal handlers to ignore the signals.</p>

    <h2>8. Resetting Traps</h2>
    <p>Traps can be reset or unset using the <code>trap</code> command with an empty action. This removes the signal handler set by a previous trap and restores the default action for the signal.</p>

    <h2>Conclusion</h2>
    <p>Understanding signals and traps is essential for managing processes, handling errors, and ensuring robust shell script behavior in Unix-like systems.</p>
</div>


</main>

<?php 
    include($path."assets/inc/footer.php");
?>