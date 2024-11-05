// JavaScript Document
// overtime-modal.js

document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.getElementById('tableBody');
    const addRowButton = document.getElementById('addRowButton');
    const totalHoursElement = document.getElementById('total-hours');

    // Function to create a new table row
    function createRow() {
        const newRow = tableBody.insertRow();

        // Add day cell with close icon and select element
        const dayCell = newRow.insertCell();
        dayCell.innerHTML = `
            <i class="far fa-window-close fa-lg fa-fw align-self-left" style="color: red;"></i>
            <select style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;">
                <option value="Select">Select</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select>
        `;
        dayCell.style.textAlign = 'center'; // Center the content

        // Add other cells
        const dateCell = newRow.insertCell();
        const hoursCell = newRow.insertCell();
        const workCell = newRow.insertCell();

        // Set cell content and styles 
        dateCell.innerHTML = '<input type="date" style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;">';
        hoursCell.innerHTML = '<input type="number" style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;">';
        workCell.innerHTML = '<textarea style="padding: 5px; border: 1px solid black; border-radius: 5px; border-color: black; font-size: 16px; background-color: #181818; color: white;"></textarea>';

        // Add input event listener to the new hours input field
        hoursCell.querySelector('input[type="number"]').addEventListener('input', function (event) {
            updateTotalHours();
        });

        // Add event listener to the close icon
        dayCell.querySelector('i').addEventListener('click', function () {
            tableBody.removeChild(newRow); // Remove the row
            updateTotalHours(); // Update total hours after removal
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