window.addEventListener("load",function(){
	var picture=document.querySelector("#cover");
	//console.log(picture);
	makeShadow(picture);
});

function getAverageRGB(cover)
{
	var rgb = {r:0, g:0, b:0},
			canvas=document.createElement('canvas'),
			ctx=canvas.getContext('2d'),
			width,
			height;
	
	width=canvas.width=cover.offsetWidth;
	height=canvas.height=cover.offsetHeight;

	console.log(width, height);


}

function makeShadow(picture)
{
	var rgb=getAverageRGB(picture);
}