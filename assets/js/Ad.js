var imgCount = 0;
var ad = document.getElementById("AdImage");
var img = document.createElement("img");
img.setAttribute("alt", "Image Not Loading");
ad.appendChild(img);

function showAD()
{
    var images = new Array();
    images[0] = "<?php echo base_url('assets/adimg1.jpg');?>";
    images[1] = "<?php echo base_url('assets/adimg2.jpg');?>";
    img.setAttribute("src", images[imgCount]);
    
    imgCount++;
    imgCount = imgCount % 2;

}

function CloseADS()
{
    var closediv = document.getElementById("AdImage");
    closediv.style.display = "none";
}

setInterval(showAD, 1000);