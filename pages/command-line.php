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

    <h2>Basic File Manipulation Commands</h2>
    <div>
        <h3>mkdir command</h3>
        <div class="block">
            <div class="command">
                <p>$ mkdir example</p>
            </div>
        </div> 

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

        <div class="page_text">
            <p>In the example above, we change directory to the example student directory that is on the path "/home/student".
            </p>
        </div>

        <h3>mv command</h3>
        <div class="block">
            <div class="command">
                <p>$ mv example.txt /home/student/test</p>
                
            </div>
        </div> 

        <div class="block">
            <div class="command">  
                <p>$ mv example.txt test.txt</p>
                
            </div>
        </div> 
        <div class="page_text">
            <p>The mv command is used to move files to specific directories or rename the files. In the first example, 
                the mv command is used to move example.txt to the "/home/student/test" directory. In the second example, 
                we use the mv command to rename "example.txt" to "test.txt".
            </p>
        </div>


        <h3>rm command</h3>
        <div class="block">
            <div class="command">  
                <p>$ rm example.txt </p>
            </div>
        </div> 

        <div class="page_text">
            <p>The rm command is used to remove files with the provided name. The rm command can also remove directories.
            </p>
        </div>

        <div class="block">
            <div class="command">  
                <p>$ rm -r my_directory</p>
            </div>
        </div> 

        <div class="page_text">
            <p>To remove a directory, we use -r option along with rm. In the example above, we remove the directory "my_directory".
            </p>
        </div>

        <h3>cp command</h3>
        <div class="block">
            <div class="command">  
                <p>$ cp my_file.txt new_dir</p>
            </div>
        </div> 

        <div class="page_text">
            <p>The cp command takes in two parameters, the name of the file to be copied, and the location to copy the file to.
                In the example above, we copy my_file.txt into the directory called new_dir.
            </p>
        </div>

        <div class="block">
            <div class="command">  
                <p>$ cp my_file.txt /home/student/example</p>
            </div>
        </div> 
        <div class="page_text">
            <p>We can also choose to copy files to an absolute path. In the example above, regardless of what directory 
                we are presently in, we will copy the file "my_file.txt" from our current directory into the "home/student/example"
                directory.
            </p>
        </div>





    </div>


 </main>
 
<?php 
    include($path."assets/inc/footer.php");
?>
