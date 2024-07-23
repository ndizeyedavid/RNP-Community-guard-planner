var modal_container = document.querySelector('.modal-container');
var modal = document.querySelector('.modal');
function displayModal(){
    modal_container.style.display = "flex";
    modal.classList.add('vis');
}

modal_container.onclick = (e) =>{
    if (e.target.className == 'modal-container'){
        console.log('yep that is it');
        modal_container.style.display = 'none';
    }else{
        console.log('Nah');
    }
}

function preloader(){
    var preloader = document.querySelector('.preloader-cont');
    preloader.style.display = "none";
}

function throwNotif(cont, type){
    Swal.fire({
        title: `${cont}`,
        type: `${type}`
    })
}