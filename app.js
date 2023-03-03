let obtener = async function(){
    let peticion = await fetch('https://mizamarzes.000webhostapp.com/Secuencia_28_02_2023/api.php');
    let data = await peticion.text();
    document.querySelector('#res').insertAdjacentHTML('beforeend', data);
}
obtener();
