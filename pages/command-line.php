<?php 
    $title = "Command Line Basics";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>
<main class="content_body">

    <div>
        <h1>Command Line Basics</h1> 

        <p>Here are some basic commands to introduce to the Unix environment to you.</p>

    </div>

    <h2>Basic File Manipulation Commands<h2>
    <div>
        <h3>mkdir command</h3>
        <div class="block">
            <div class="command">
                <p>$ mkdir example</p>
            </div>
        </div> 

        <img src="assets/images/mkdir.png" id="mkdir_terminal" class="terminal_example">


        <div class="page_text">
            <p>The mkdir command takes in a parameter and creates a directory with the name of the given parameter. In the 
                    example provided above, a directory with the name "example" is created. This directory will be created on the relative
                    path to your current location on the system. To specify the creation of a directory at an absolute path, you can 
                    provide an absolute path instead, for example, "mkdir /home/student/example" creates the example directory on 
                    the path "/home/student".
            </p>
        </div>

        <h3>cd command</h3>
        <div class="block">
            <div class="command">
                <p>$ cd example</p>
            </div>
        </div> 

        <img src="assets/images/cd.png" id="cd_terminal" class="terminal_example">


        <div class="page_text">
            <p>The cd command takes in a parameter and changes the current directory to the given parameter provided
                that the directory exists on the current path. To change to a directory on an absolute path, you can provide 
                in an absolute path instead of the directory name.
            </p>
        </div>

        <div class="block">
            <div class="command">
                <p>$ cd /home/student/example</p>
            </div>
        </div> 

        <img src="assets/images/pwd.png" id="directory_terminal" class="terminal_example">

        <div class="page_text">
            <p>In the example above, we change directory to the example student directory that is on the path "/home/student".
            </p>
        </div>

    </div>


 </main>
 
<?php 
    include($path."assets/inc/footer.php");
?>
