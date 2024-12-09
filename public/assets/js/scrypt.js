const button = document.querySelector('#toggleOpen')
const menu = document.querySelector('#collapseMenu')
const close = document.querySelector('#toggleClose')
const vehicleModal = document.querySelector('#vehicleModal')
const buttonAjouter = document.querySelector('#buttonAjouter')
const openVehicleModalBtn = document.querySelector('#openVehicleModalBtn')
const closeVehicleModalBtn = document.querySelector('#closeVehicleModal')
const closeModalBtnAlt = document.querySelector('#closeModalBtn')
const form = document.querySelector('#vehicleForm')

const valideButton = document.querySelector('#validateForm')
function openMenu(){
    button.addEventListener('click',()=>{
        menu.classList.toggle("hidden")
    }) 
}


function closeMenu(){
    close.addEventListener('click',()=>{
        menu.classList.toggle("hidden")
    })
}

function openPopupAjout(){
    buttonAjouter.addEventListener('click',()=>{
        vehicleModal.classList.toggle("hidden")
    })
}


function clocsePopupAjoute(){
    closeVehicleModalBtn.addEventListener('click',()=>{
        vehicleModal.classList.toggle("hidden")
        videPopupAjoute()
    })
}

function annulePopupAjoute(){
    closeModalBtnAlt.addEventListener('click',()=>{
        vehicleModal.classList.toggle("hidden")
        videPopupAjoute()
    })
}

function videPopupAjoute(){
    const inputForm = form.querySelectorAll('input');
    inputForm.forEach(input => {
        input.value="";
      });
}

function validationForm(){
    valideButton.addEventListener('click',(event)=>{
        const chassisNumber = document.querySelector('#chassisNumber').value.trim();
        const licensePlate = document.querySelector('#licensePlate').value.trim();
        const brand = document.querySelector('#brand').value.trim();
        const productionDate = document.querySelector('#productionDate').value.trim();
        const fuelType = document.querySelector('#fuelType').value.trim();
        const vehicleImage = document.querySelector('#vehicleImage').value.trim();
        const status = document.querySelector('#status').value.trim();
        const rentalPrice = document.querySelector('#rentalPrice').value.trim();

        if (!chassisNumber || !licensePlate || !brand || !productionDate || !fuelType || !vehicleImage || !status || !rentalPrice) {
            alert("Tous les champs doivent être remplis");
            event.preventDefault();
            return false;
        }
        return true
    })
   
}

openMenu()
closeMenu()
openPopupAjout()
clocsePopupAjoute()
annulePopupAjoute()
validationForm()


