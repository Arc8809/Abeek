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
            <p>Every file in Unix consists of properties such as file type, file permissions, ownership, and other extensive properties.
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
            <p>File permissions are represented by a string of characters in Unix systems such as: - rwxrwxrwx
            </p>
        </div>

        <div class="page_text">
            <p>This example shows a file that has read, write, and execute permissions for owner, group, and other users. The first set of “rwx” commands are for owner permissions, followed by group permissions for the second set, and other permissions for the last set.
            </p>
        </div>


        <div class="page_text">
            <p>Missing permissions would be denoted by a dash (-). A file lacking any permissions for 
                groups and other users would be denoted by - rwx—-----. Permissions can be represented using numeric values too.
            </p>
            <p>The numeric values for permissions is as follows: </p>
            <ul>
                <li>Read permission (r) is represented by the value 4.</li>
                <li>Write permission (w) is represented by the value 2.</li>
                <li>Execute permission (x) is represented by the value 1.</li>
                <li>No permission is represented by the value 0.</li>
            </ul>
            <p>A 3 digit number would represent the permissions for owner, group, and other users, with each digit 
                representing a full set of permissions. In this manner, the number “777”, would be equivalent to  
                [ - rwxrwxrwx ]. In a similar manner, 700 would be equivalent to  [ - rwx—----- ]. 
            </p>
        </div>

        <div class="page_text">
            <p>Let's take a look at the commands that will allow us to modify file permissions.
            </p>
        </div>

        <h3>chmod command</h3>
        <div class="block">
            <div class="command">
                <p>$ chmod 777 example.txt</p>
            </div>
        </div> 
        <div class="page_text">
            <p>In the example provided above, we change the permissions of example.txt to have read, write, and 
                execute availability to the owner, group holders, and any other users who may come across the file. 
            </p>
        </div>


        <div class="page_text">
            <p>Let's look at the command that will help us keep track of our location on the system.
            </p>
        </div>


        <h3>pwd command</h3>
        <div class="block">
            <div class="command">
                <p>$ pwd</p>
            </div>
        </div>


        <div class="page_text">
            <p>pwd will return the current directory of your location. If you are in "/home/student", then it will return 
                "home/student."
            </p>
        </div>


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

        <div class="page_text">
            <p>Terminal commands allow us to do all sorts of neat tricks with files. How about reading the contents of files?
            </p>
        </div>

        <h3>cat command</h3>
        <div class="block">
            <div class="command">
                <p>$ cat example.txt</p>
            </div>
        </div> 

        <div class="page_text">
            <p>The cat command displays the contents of the specified file, in the example above, it will display 
                the file contents of example.txt.
            </p>
        </div>

        <h3>head command</h3>
        <div class="block">
            <div class="command">
                <p>$ head example.txt</p>
            </div>
        </div> 

        <div class="page_text">
            <p>The head command will display the first ten lines of a specified file.
            </p>
        </div>

        <h3>tail command</h3>
        <div class="block">
            <div class="command">
                <p>$ tail example.txt</p>
            </div>
        </div> 

        <div class="page_text">
            <p>The head command will display the last ten lines of a specified file.
            </p>
        </div>


    </div>
 </main>
 
<?php 
    include($path."assets/inc/footer.php");
?>