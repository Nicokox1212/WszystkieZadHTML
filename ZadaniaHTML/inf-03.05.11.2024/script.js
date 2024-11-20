const todolist = document.querySelector(".todo-list")

function createTask(title,description){
    const mainTaskDiv = document.createElement('div')
    mainTaskDiv.classList.add("task")

    const h2Title = document.createElement('h2')
    h2Title.textContent = title;
    const pDescription = document.createElement('p')
    pDescription.textContent = description;


    mainTaskDiv.appendChild(h2Title)
    mainTaskDiv.appendChild(pDescription)

    todolist.appendChild(mainTaskDiv);

}


const form = document.querySelector("form")

form.addEventListener("submit",(ev)=>{
    ev.preventDefault()

    const title = form.elements.title.value
    const description = form.elements.description.value

    createTask(title,description)
})

button.addEventListener("click", createTask)