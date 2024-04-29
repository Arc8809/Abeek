<?php 
    $title = "Interactive Examples";
    $path = "../";

    include($path."assets/inc/header.php");

    include($path."assets/inc/nav.php");

?>

<main class="content_body">
<div class="console">
    <div><span class="prompt">$</span> ls</div>
    <div class="output">Documents  Downloads  Pictures  Music</div>
    <div><span class="prompt">$</span> pwd</div>
    <div class="output">/home/user</div>
    <div><span class="prompt">$</span> cd Documents</div>
    <div><span class="prompt">$</span> ls</div>
    <div class="output">projects  notes.txt</div>
    <div><span class="prompt">$</span> cat notes.txt</div>
    <div class="output">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</div>
    <div><span class="prompt">$</span> mkdir new_project</div>
    <div><span class="prompt">$</span> cd new_project</div>
    <div><span class="prompt">$</span> touch script.sh</div>
    <div><span class="prompt">$</span> nano script.sh</div>
</div>



</main>

<?php 
    include($path."assets/inc/footer.php");
?>