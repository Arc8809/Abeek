<?php 
    $title = "Unix File System";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>
<main class="content_body">
    <p>The Linux file hierarchy is a structured organization of directories and files that defines the layout of the file system on a Linux-based operating system. It provides a standardized way for users and applications to locate and access system resources.</p>

    <h2>Key Directories</h2>
    <ul>
        <li><strong>/ (Root Directory):</strong> The top-level directory in the file system hierarchy. It contains all other directories and files.</li>
        <li><strong>/bin:</strong> Essential system binaries, such as command line utilities.</li>
        <li><strong>/etc:</strong> System configuration files.</li>
        <li><strong>/home:</strong> User home directories.</li>
        <li><strong>/lib:</strong> Shared libraries required by programs in /bin and /sbin.</li>
        <li><strong>/sbin:</strong> System binaries used for system administration tasks.</li>
        <li><strong>/usr:</strong> Secondary hierarchy containing user utilities and applications.</li>            
        <li><strong>/var:</strong> Variable data files, such as logs and temporary files.</li>
    </ul>

        <h2>File System Structure</h2>
        <p>The Linux file system follows a hierarchical structure, with directories organized in a tree-like format. Each directory serves a specific purpose and contains related files and subdirectories.</p>

        <h2>File Paths</h2>
        <p>A file path is a string that specifies the location of a file or directory within the file system hierarchy. It consists of directory names separated by slashes (<code>/</code>), with an optional filename at the end. There are two types of file paths:</p>
        <ul>
            <li><strong>Absolute Paths:</strong> Absolute paths start from the root directory <code>/</code> and provide the full path to the file or directory. For example, <code>/home/user/example.txt</code>.</li>
            <li><strong>Relative Paths:</strong> Relative paths start from the current working directory and specify the path to the file or directory relative to that location. For example, if the current directory is <code>/home/user</code>, the relative path to <code>example.txt</code> in the same directory would be <code>./example.txt</code>.</li>
        </ul>

        <h2>Relationship between File Paths and File Hierarchy</h2>
        <p>File paths directly reflect the structure of the file hierarchy. Each directory in a file path corresponds to a directory in the hierarchy, with the final component representing either a file or directory within that directory. By navigating through directories using file paths, users and applications can locate and access files and directories stored on the system.</p>


</main>


<?php 
    include($path."assets/inc/footer.php");
?>