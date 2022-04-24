window.onload = function () {
    $("#fwd").click(function () {
        $img_dir = "Wolfie873.github.io/L&D/";
        $images = scandir($img_dir);

        console.log('<ul>') ; 
for($images.length()) 	{ 
		console.log('<li> <img src=".$img_dir.$img." > </li>');  
	} 
console.log('</ul>');
    });
};
