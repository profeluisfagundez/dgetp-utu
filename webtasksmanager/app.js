document.getElementById('initTask').addEventListener('submit', saveTask);
// Funcón que se encarga de guardar las tareas
function saveTask(e){
    let title = document.getElementById('title').value;
    let description = document.getElementById('description').value;
    //Genero un objeto llamado task con los datos obtenidos previamente
    const task = {
        title,
        description
    };
    if (localStorage.getItem('tasks') == null ) {
        let tasks = [];
        tasks.push(task);
        //Se guardan los datos en el storage interno del navegador
        localStorage.setItem('tasks', JSON.stringify(tasks));
    }
    else {
        //Si ya existe el arreglo de datos solamente se recarga con la nueva información
        let tasks = JSON.parse(localStorage.getItem('tasks'));
        tasks.push(task);
        localStorage.setItem('tasks', JSON.stringify(tasks));
    }
    //Actualizo las tareas
    getTasks();
    document.getElementById('initTask').reset();
    e.preventDefault(); //Evitamos que se recargue la página del método submit
}

function getTasks(){
    let tasks = JSON.parse(localStorage.getItem('tasks'));
    let tasksview = document.getElementById('tasks');
    tasksview.innerHTML = '' ; //Vacio el tasksview por las dudas
    for(let i=0; i<tasks.length; i++) {
        let title = tasks[i].title;
        let description = tasks[i].description;
        tasksview.innerHTML += `<div class="card mb-3"> 
            <div class="card-body">
                <p>${title} - ${description}</p>
                <a class="btn btn-danger" onclick="deleteTasks('${title}')">Eliminar</a>
            </div>
        </div>`
    }
}

function deleteTasks(title){
    let tasks = JSON.parse(localStorage.getItem('tasks'));
    for(let i=0; i<tasks.length; i++) {
        if(tasks[i].title == title){
            tasks.splice(i, 1);
        }
    }
    localStorage.setItem('tasks', JSON.stringify(tasks));
    getTasks();
}

getTasks();