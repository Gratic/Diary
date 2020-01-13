document.addEventListener("DOMContentLoaded", function()
{
	let btnNewPage = document.querySelector("#btn-new-page")
	btnNewPage.addEventListener("click", function()
	{

	})
})

function e(el, parent, text, classes, id)
{
	let o = createElement(el)

	if(text != null)
		o.innerHTML = text

	if(classses != null)
	{
		for(let classs in classes.split(' '))
		{
			o.classList.add(classs)
		}
	}

	if(id != null)
		o.id = id

	if(parent != null)
		parent.appendChild(o)

	return o
}