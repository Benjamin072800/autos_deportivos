var udateTime = function() {
    let currentDate = new Date(),
        hours = currentDate.getHours(),
        minutes = currentDate.getMinutes(), 
        seconds = currentDate.getSeconds(),
        weekDay = currentDate.getDay(), 
        day = currentDate.getDay(), 
        month = currentDate.getMonth(), 
        year = currentDate.getFullYear();
 
    const weekDays = [
        'Domingo',
        'Lunes',
        'Martes',
        'Miércoles',
        'Jueves',
        'Viernes',
        'Sabado'
    ];
 
    document.getElementById('weekDay').textContent = weekDays[weekDay];
    document.getElementById('day').textContent = day;
 
    const months = [
        'Enero',
        'Febrero',
        'Marzo',
        'Abril',
        'Mayo',
        'Junio',
        'Julio',
        'Agosto',
        'Septiembre',
        'Octubre',
        'Noviembre',
        'Diciembre'
    ];
 
    document.getElementById('month').textContent = months[month];
    document.getElementById('year').textContent = year;
 
    document.getElementById('hours').textContent = hours;
 
    if (minutes < 10) {
        minutes = "0" + minutes
    }
 
    if (seconds < 10) {
        seconds = "0" + seconds
    }
 
    document.getElementById('minutes').textContent = minutes;
    document.getElementById('seconds').textContent = seconds;
};
 
udateTime();
 
setInterval(udateTime, 1000);

const images = document.querySelectorAll('.img-card img');
const modal= document.querySelector('.modal-gallery');
const imgModal=document.querySelector('#imgModal');
const closeModal = document.querySelector('.close-modal');
const captionModal = document.querySelector('.captionModal');
const modalGallerylist = document.querySelectorAll('.gallery-list');
images.forEach((images) =>{
	images.addEventListener('click',()=>{
		modal.style.display = "block"; 
		imgModal.src = images.src;
		captionModal.innerHTML = images.alt;
	});
});

modalGallerylist.forEach(img => img.addEventListener('click', lightbox));
function lightbox (event){
	imgModal.src = event.target.src;
	
	captionModal.innerHTML = event.target.alt;
}
closeModal.addEventListener('click',()=>{
modal.style.display ="none";
});

function alerta()
    {
    var mensaje;
    var opcion = confirm("Clicka en Aceptar o Cancelar");
    if (opcion == true) {
        mensaje = "Has clickado OK";
	} else {
	    mensaje = "Has clickado Cancelar";
	}
	document.getElementById("ejemplo").innerHTML = mensaje;
}
