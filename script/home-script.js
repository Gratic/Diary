document.addEventListener("DOMContentLoaded", function()
{
	iniTogglePageForm()
	iniFormAddBlock()
	
})

function iniTogglePageForm()
{
	let btnNewPage = document.querySelector("#btn-new-page")
	btnNewPage.addEventListener("click", function()
	{
		document.querySelector("#pageForm").classList.toggle("d-none")
	})
}

function iniFormAddBlock()
{
	let pageForm = document.querySelector("#pageForm")
	let btnAdd = pageForm.querySelector("#add")

	btnAdd.addEventListener("click", function() {
		let pageForm = document.querySelector("#pageForm")
		let blocks = pageForm.querySelector("#blocks")

		// New Bloc
		let block = e("div", blocks, null, "block my-2")
		let row = e("div", block, null, "row align-items-center")
		let colSelect = e("div", row, null, "col-8")
		let colDelete = e("div", row, null, "col")

		// Remplissage du select
		let select = e("select", colSelect, null, "form-control my-1", "type")
		for(let v of ["Text", "Image"])
		{
			let option = e("option", select, v)
			option.value = v.toLowerCase()
		}

		let deleteBtn = e("div", colDelete, "Delete", "btn btn-danger btn-large col")

		let textarea = e("textarea", block, null, "form-control")
	})
}

function addPage()
{
	// let pages = document.querySelector("#pages")

	// // Creation of the new Page
	// let newPage = e("div", pages, null, "card my-1", null)
	// let nPHeader = e("div", newPage, null, "card-header", null)
	// let nPBody = e("div", newPage, null, "card-body", null)

	// // Filling Header
	// let title = e("span", nPHeader, "title")
	// let date = e("small", nPHeader, "241/415/1263")
	// let emotion = e("div", nPHeader, "Emotion", "float-right")

	// // Filing Body
}

function e(el, parent, text = null, classes = null, id = null)
{
	let o = document.createElement(el)

	if(text != null)
		o.innerHTML = text

	if(classes != null)
	{
		for(let classs of classes.split(' '))
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