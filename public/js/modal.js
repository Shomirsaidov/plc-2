// Get elements with the class 'buy_modal'
const buyButtons = document.querySelectorAll('.buy_modal');
const modalOverlay = document.getElementById('modalOverlay');
const closeModal = document.getElementById('closeModal');
const carIdInput = document.getElementById('car_id'); // Get the hidden car_id input

// Show the modal and set the car_id in the hidden input when any button with class 'buy_modal' is clicked
buyButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        // Get the car_id from the data attribute of the clicked car card
        const carId = event.target.closest('.car-card').getAttribute('data-car-id');
        
        // Set the car_id in the hidden input field inside the modal
        carIdInput.value = carId;

        // Show the modal and disable scrolling
        modalOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Disable scrolling
    });
});

// Close the modal and enable scrolling
closeModal.addEventListener('click', () => {
    modalOverlay.classList.add('hidden');
    document.body.style.overflow = 'auto'; // Enable scrolling
});

// Close modal when clicking outside of it
modalOverlay.addEventListener('click', (e) => {
    if (e.target === modalOverlay) {
        modalOverlay.classList.add('hidden');
        document.body.style.overflow = 'auto'; // Enable scrolling
    }
});



const inputs = document.querySelectorAll(".lib-code"); // Select all input elements with the class 'user-contact'
inputs.forEach(input => {
    window.intlTelInput(input, {
        initialCountry: "ua",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
});

