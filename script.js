document.addEventListener('DOMContentLoaded', () => {
    const specialistTypeSelect = document.getElementById('specialist-type');
    const specialistsList = document.getElementById('specialists-list');
    const specialists = specialistsList.getElementsByClassName('specialist');

    function displaySpecialists(type) {
        for (let specialist of specialists) {
            if (specialist.classList.contains(type)) {
                specialist.classList.add('active');
            } else {
                specialist.classList.remove('active');
            }
        }
    }

    specialistTypeSelect.addEventListener('change', () => {
        const selectedType = specialistTypeSelect.value;
        displaySpecialists(selectedType);
    });

    // Mostrar por defecto los especialistas generales
    displaySpecialists('general');
});






