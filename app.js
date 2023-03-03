let obtener = async function(){
    let peticion = await fetch('api.php');
    let data = await peticion.text();
    document.querySelector('#res').insertAdjacentHTML('beforeend', data);
}
obtener();
