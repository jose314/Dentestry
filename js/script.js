let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .nav');
let header = document.querySelector('.header');

menu.onclick = () =>{
    menu.classList.toggle('fa-time');
    navbar.classList.toggle('active');

}

window.onscroll=() =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active')
}

window.onscroll = ()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 0){
        header.classList.add('active')
    }else{
        header.classList.remove('active');
    }
}

// Get the appointment date input element
const appointmentDateInput = document.getElementById('appointment-date');

// Add an event listener to the appointment date input element
appointmentDateInput.addEventListener('change', function() {
  // Get the selected appointment date and time
  const selectedDateTime = new Date(appointmentDateInput.value);

  // Check if the selected hour is 9:00 AM
  if (selectedDateTime.getHours() === 9) {
    // Disable the option for the next hour (10:00 AM)
    selectedDateTime.setHours(selectedDateTime.getHours() + 1);
    selectedDateTime.setMinutes(0);
    appointmentDateInput.value = selectedDateTime.toISOString().slice(0, 16);
  }
});
