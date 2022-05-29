
function regConnect(){
    form.submit();
}

function addUser(){
    const form_data = {method: 'post', body: new FormData(form)};
    fetch("hw1_users_add.php", form_data).then(regConnect);
}

function checkUsername(json){
    let check = 0;
    for(user of json){
        if(user.username===form.username.value){
            check = 1;
            document.querySelector('#errore2').classList.remove('hidden');
            break;
        }
    }
    if(check === 0){
        console.log('utente nuovo');
        addUser();
    }
}

function responseCU(response)
{
    return response.json();
}

function validazione(event){
    event.preventDefault();
    document.querySelector('#errore1').classList.add('hidden');
    document.querySelector('#errore2').classList.add('hidden');
    const username = form.username.value;
    const password = form.password.value;
    if(username.length >20 ||
        password.length >20 ||
        username.length <5 ||
        password.length <5 ||
        password.search(/[a-z]/) < 0 ||
        password.search(/[A-Z]/) < 0 ||
        password.search(/[0-9]/) < 0   ){

            document.querySelector('#errore1').classList.remove('hidden');
    }else{
        fetch('hw1_users_get.php').then(responseCU).then(checkUsername);
    }
}




const form = document.forms['nome_form'];
form.addEventListener('submit', validazione);