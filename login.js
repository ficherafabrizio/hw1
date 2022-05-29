function validazione(event)
{
    if(form.username.value.length == 0 ||
        form.password.value.length == 0)
    {
        const msg = document.querySelector('#hiddenmsg');
        msg.classList.remove('hidden');

        event.preventDefault();
    }
}




const form = document.forms['nome_form'];
form.addEventListener('submit', validazione);