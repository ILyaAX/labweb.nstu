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
			height
			pixels;
	
	if(!ctx)
	{
		return rgb;
	}

	width=canvas.width=cover.offsetWidth;
	height=canvas.height=cover.offsetHeight;

	ctx.drawImage(cover,0,0);

	try
	{
		pixels=ctx.createImageData(0,0,width,height);
	}
	catch(e)
	{
		return rgb;
	}

	console.log(pixels)

}

function makeShadow(picture)
{
	var rgb=getAverageRGB(picture);
}