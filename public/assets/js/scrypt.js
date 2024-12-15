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

function validationFormvoiture(){
    valideButton.addEventListener('click',(event)=>{
        const modele = document.querySelector('#modele').value.trim();
        const matricule = document.querySelector('#matricule').value.trim();
        const marque = document.querySelector('#marque').value.trim();
        const productionDate = document.querySelector('#productionDate').value.trim();
        const fuelType = document.querySelector('#fuelType').value.trim();
        const imagevoiture = document.querySelector('#imagevoiture').value.trim();
        const status = document.querySelector('#status').value.trim();
        const prixvoiture = document.querySelector('#prixvoiture').value.trim();

        if (!modele || !matricule || !marque || !productionDate || !fuelType || !imagevoiture || !status || !prixvoiture) {
            alert("Tous les champs doivent être remplis");
            event.preventDefault();
            return false;
        }
        return true
    })
   
}

function validationFormClient() {
    valideButton.addEventListener('click', (event) => {
        const idClient = document.querySelector('#idclient').value.trim();
        const nomClient = document.querySelector('#nomclient').value.trim();
        const prenomClient = document.querySelector('#prenomclient').value.trim();
        const telClient = document.querySelector('#telclient').value.trim();
        const emailclient = document.querySelector('#emailclient').value.trim();

        if (!idClient || !nomClient || !prenomClient || !telClient || !emailclient) {
            alert("Tous les champs doivent être remplis");
            event.preventDefault();
            return false;
        }


        return true; 
    });
}

function validationFormContrat(){
    valideButton.addEventListener('click', (event) => {
        const idClient = document.querySelector('#idclient').value.trim();
        const idvoiture = document.querySelector('#idvoiture').value.trim();
        const datedebut = document.querySelector('#datedebut').value.trim();
        const datefin = document.querySelector('#datefin').value.trim();

        if (!idClient || !idvoiture || !datedebut || !datefin) {
            alert("Tous les champs doivent être remplis");
            event.preventDefault();
            return false;
        }
        if (datedebut > datefin) {
            alert("La date de début doit être légèrement antérieure à la date de fin");
            event.preventDefault();
            return false;
        }

        return true; 
    });
}

openMenu()
closeMenu()
openPopupAjout()
clocsePopupAjoute()
annulePopupAjoute()
validationFormvoiture()
validationFormClient()
validationFormContrat()


