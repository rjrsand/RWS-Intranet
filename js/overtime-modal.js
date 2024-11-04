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

        // Set cell content and styles (same as before)
        // ... 

        // Add input event listener to the new hours input field
        // (After hoursCell.innerHTML is set)
        hoursCell.innerHTML = '<input type="number" style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;">';
        hoursCell.querySelector('input[type="number"]').addEventListener('input', function (event) {
            updateTotalHours();
        });

        return newRow;
    }

    // Add a row when the button is clicked
    addRowButton.addEventListener('click', () => {
        // Create a new row using your createRow function
        const newRow = createRow();

        // Insert the new row before the .initial-row
        const initialRow = tableBody.querySelector('.initial-row');
        tableBody.insertBefore(newRow, initialRow);

        // Update total hours calculation
        updateTotalHours();
    });

    // Function to update total hours 
    function updateTotalHours() {
        let totalHours = 0;
        const hourInputs = tableBody.querySelectorAll('input[type="number"]');
        hourInputs.forEach(input => {
            const hoursValue = parseFloat(input.value);
            if (!isNaN(hoursValue)) {
                totalHours += hoursValue;
            }
        });
        totalHoursElement.textContent = totalHours.toFixed(1);
    }
});