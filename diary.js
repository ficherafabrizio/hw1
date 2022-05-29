function onResponseJson(response){
    return response.json();
}

function onResponse(response){
    return response.text();
}

function getTodaysDate(date){
    data_input.value = date;
    document.querySelector('#searchbutton').click();
}

function getPage(json){
    //console.log(json);

    document.querySelector('#pagina').value = json[0].contenuto;
}
function indirizzamento(value){
    console.log(value);
    if(value > 0 ){
        searchPage();
    }else{
        pageForm.pag.value = "";
    }
}
function checkPage(event){
    event.preventDefault();
    document.querySelector('#exceed_length').classList.add('hidden');

    const dataTitolo = document.querySelector('#date');
    dataTitolo.textContent = searchForm.data.value;

    const form_data = {method: 'post', body: new FormData(searchForm)};
    fetch("check_page.php",form_data).then(onResponse).then(indirizzamento);
}

function searchPage(){

        const form_data = {method: 'post', body: new FormData(searchForm)};
        fetch("search_page.php", form_data).then(onResponseJson).then(getPage);
}

function savePage(event){
    event.preventDefault();

    if(pageForm.pag.value.length > 300){
        document.querySelector('#exceed_length').classList.remove('hidden');
        return;
    }
    document.querySelector('#exceed_length').classList.add('hidden');

    pageForm.datapagina.value = searchForm.data.value;
    const form_data = {method: 'post', body: new FormData(pageForm)};
    fetch("update_page.php", form_data);

}

const data_input = document.querySelector('#date_input');

const searchForm = document.forms['dateform'];
searchForm.addEventListener('submit',checkPage);

fetch("get_date.php").then(onResponse).then(getTodaysDate);

const pageForm = document.forms['formpagina'];
pageForm.addEventListener('submit',savePage);