<?php
$homedir = "../";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
header("Content-type: text/css; charset: UTF-8");

echo 
".goog-icon {
    background-image: url(\"".$homedir."files/images/google-icons-combined.png\");
}";

echo "
.uluru1 {
    background-image: url(\"".$homedir."files/images/14535123706_e5f53443e1_k.jpg\");
    background-position: 100% 100%;
}
.uluru2 {
    background-image: url(\"".$homedir."files/images/2716469542_bcab04a5c6_o.jpg\");
    background-position: 0% 75%;
}
.uluru3 {
    background-image: url(\"".$homedir."files/images/3115025467_54ae4bce0c_o.jpg\");
    background-position: 0% 60%;
}
.uluru4 {
    background-image: url(\"".$homedir."files/images/4116217604_9f13a77ebb_o.jpg\");
    background-position: bottom left;
}
.uluru5 {
    background-image: url(\"".$homedir."files/images/486165148_4cda62b849_o.jpg\");
    background-position: 50% 75%;
}
.uluru6 {
    background-image: url(\"".$homedir."files/images/uluru-681140_1920.jpg\");
}
.uluru7 {
    background-image: url(\"".$homedir."files/images/15176720492_9541c99952_k.jpg\");
    background-position: bottom;
}
.uluru8 {
    background-image: url(\"".$homedir."files/images/14589120198_6b4a1f37b9_o.jpg\");
}";

echo "
@font-face {
    font-family: \"Comfortaa-Regular\";
    src: url(\"".$homedir."files/fonts/Comfortaa-Regular.ttf\");
}
@font-face {
    font-family: \"Comfortaa-Bold\";
    src: url(\"".$homedir."files/fonts/Comfortaa-Bold.ttf\");
}
@font-face {
    font-family: \"Comfortaa-Light\";
    src: url(\"".$homedir."files/fonts/Comfortaa-Light.ttf\");
}
";

if(isset($_SESSION["pkUserid"]) && is_numeric($_SESSION["pkUserid"])){
    echo "
#wpg-header-user-imagedisplay {
    background-color: ".$_SESSION["userColor"].";
}
";
}
