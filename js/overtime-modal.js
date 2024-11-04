// JavaScript Document
// overtime-modal.js

document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.getElementById('tableBody');
    const addRowButton = document.getElementById('addRowButton');
    const totalHoursElement = document.getElementById('total-hours');

    // Function to create a new table row
    function createRow() {
        const newRow = tableBody.insertRow();
        const dayCell = newRow.insertCell();
        const dateCell = newRow.insertCell();
        const hoursCell = newRow.insertCell();
        const workCell = newRow.insertCell();

        // Set cell content and styles
        dayCell.innerHTML = '<select style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;"><option value="Select">Select</option><option value="Monday">Monday</option><option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option><option value="Saturday">Saturday</option><option value="Sunday">Sunday</option></select>';
        dayCell.style.padding = '5px';
        dayCell.style.border = '1px solid black';
        dayCell.style.borderRadius = '5px';
        dayCell.style.fontSize = '16px';

        dateCell.innerHTML = '<input type="date" style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;">';
        dateCell.style.padding = '5px';
        dateCell.style.border = '1px solid black';
        dateCell.style.borderRadius = '5px';
        dateCell.style.fontSize = '16px';

        hoursCell.innerHTML = '<input type="number" style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;">';
        hoursCell.style.padding = '5px';
        hoursCell.style.border = '1px solid black';
        hoursCell.style.borderRadius = '5px';
        hoursCell.style.fontSize = '16px';

        workCell.innerHTML = '<textarea style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;"></textarea>';
        workCell.style.padding = '5px';
        workCell.style.border = '1px solid black';
        workCell.style.borderRadius = '5px';
        workCell.style.fontSize = '16px';
    }

    // Add a row when the button is clicked
    addRowButton.addEventListener('click', () => {
        // Create a new row using your createRow function
        createRow();

        // Insert the new row before the .initial-row
        const initialRow = tableBody.querySelector('.initial-row');
        tableBody.insertBefore(tableBody.lastElementChild, initialRow);

        // Update total hours calculation
        updateTotalHours();
    });

    // Function to update total hours (REPLACEMENT)
    function updateTotalHours() {
        let totalHours = 0;
        const hourInputs = tableBody.querySelectorAll('input[type="number"]');
        hourInputs.forEach(input => {
            totalHours += parseFloat(input.value) || 0; // Handle empty inputs and ensure parseFloat is used
        });
        totalHoursElement.textContent = totalHours.toFixed(1); // Round to one decimal
    }

    // Event listener for changes in number input fields
    tableBody.addEventListener('input', function (event) {
        if (event.target.tagName === 'INPUT' && event.target.type === 'number') {
            updateTotalHours(); // Update the total hours on each input change
        }
    });
});