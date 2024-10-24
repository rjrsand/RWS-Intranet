// JavaScript Document

// overtime-modal.js

document.addEventListener('DOMContentLoaded', function () {
    const tableBody = document.getElementById('tableBody');
    const addRowButton = document.getElementById('addRowButton');

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

    // Initially hide all rows except the first and the "TOTAL" row
    const rows = tableBody.querySelectorAll('tr');
    rows.forEach(row => {
        if (!row.classList.contains('primary-row') && !row.classList.contains('initial-row')) {
            row.style.display = 'none';
        }
    });

    // Add a row when the button is clicked
    addRowButton.addEventListener('click', () => {
        // Clone the primary row
        const primaryRow = tableBody.querySelector('.primary-row');
        const newRow = primaryRow.cloneNode(true);

        // Remove any content from the cloned row
        newRow.querySelectorAll('input, select, textarea').forEach(input => {
            input.value = '';
        });

        // Insert the cloned row after the primary row
        tableBody.insertBefore(newRow, primaryRow.nextSibling);
    });
});