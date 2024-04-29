<?php 
    $title = "File Management";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>
<main class="content_body">
    <div>
        <div>
            <h1>File Management</h1> 

            <p>Unix is an environment is entirely centered around file management, here is a basic demonstration
            of commands and concepts for file management.
            </p>

        </div>

        <div>
            <p>Every file in Unix consists of properties such as file type, file permissions, ownership, and other extensive properties
                For now, we will look into file permissions.
            </p>

        </div>

        <div class="page_text">
            <p>A file has permissions for its owner, associated group, and other users. </br>The owner of a file has these 
                types of permissions, read, which allows the owner to view the contents of a file, write, which allows 
                the owner to modify the file contents, and execute, which allows the owner to run the file if it is an 
                executable. </br>The owner of a file has these types of permissions, read, which allows the owner to view 
                the contents of a file, write, which allows the owner to modify the file contents, and execute, which 
                allows the owner to run the file if it is an executable. </br> User groups can also be assigned files. 
                All users in the group have the same level of permissions that specify what each member of the group 
                can do to the file. The types of permissions that can be used are still the same. </br> User groups can also be assigned 
                files. All users in the group have the same level of permissions that specify what each member of the 
                group can do to the file. The types of permissions that can be used are still the same. </br> The file permissions for other 
                users determines what users that are not the owner, and not a part of the associated group can do with it. 
                The types of permissions that can be used are still the same.            
            </p>
        </div>

        <div class="page_text">
            <p>The mkdir command takes in a parameter and creates a directory with the name of the given parameter. In the 
                    example provided above, a directory with the name "example" is created. This directory will be created on the relative
                    path to your current location on the system. To specify the creation of a directory at an absolute path, you can 
                    provide an absolute path instead, for example, "mkdir /home/student/example" creates the example directory on 
                    the path "/home/student".
            </p>
        </div>

        


File permissions are represented by a string of characters in Unix systems such as:
- rwxrwxrwx

This example shows a file that has read, write, and execute permissions for owner, group, and other users.

The first set of “rwx” commands are for owner permissions, followed by group permissions for the second set, and other permissions for the last set.




        <div class="page_text">
            <p>Let's look at basic command that will help us keep track of the files in our directories.
            </p>
        </div>


        <h3>ls command</h3>
        <div class="block">
            <div class="command">
                <p>$ ls</p>
            </div>
        </div> 

        <div class="block">
            <div class="command">
                <p>$ ls /home/student</p>
            </div>
        </div> 

        <div class="page_text">
            <p>ls is a simple command that lists all the files in the current working directory. When provided an argument, 
                for an absolute or relative path, it will then list the files at that provided path.  
            </p>
        </div>


    </div>
 </main>
 
<?php 
    include($path."assets/inc/footer.php");
?>