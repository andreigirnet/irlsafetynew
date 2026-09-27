const registered = document.getElementById('modalRegisterEmployer');
const understood = document.getElementById('understoodButton');

// Only run this code if the button actually exists on the page
if (understood && registered) {
    understood.addEventListener('click', function() {
        registered.style.display = 'none';
    });
}