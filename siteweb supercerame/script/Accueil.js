var slideImg = document.getElementById("slideImg");
var images = new Array(
    "assest/image/back1.jpg",
    "assest/image/img1.jpg",
    "assest/image/img2.jpg"
);
var len = images.length;
var i = 0;
function slider()
{
    if( i > len-1)
    {
        i=0;
    }
    slideImg.src = images[i];
    i++;
    setTimeout('slider()',8000);
}


