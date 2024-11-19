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
            <i class="far fa-window-close fa-sm fa-fw" style="color: red;"></i>
            <select style="padding: 5px; font-size: 16px; background-color: #181818; color: white;">
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

    function sendEmail() {
        // Get form data
        const employeeEmailSelect = document.querySelector('[name="employeeName"]');
        const employeeEmail = employeeEmailSelect.value;
        const employeeName = employeeEmailSelect.options[employeeEmailSelect.selectedIndex].text; // Get name from selected option

        // Gather overtime data from the table
        const overtimeRows = document.querySelectorAll('#tableBody tr'); // Select all rows in the tableBody
        const overtimeData = [];

        overtimeRows.forEach(row => {
            if (row.classList.contains('initial-row')) { // If it's the total row
                overtimeData.push({ // Add total hours
                    dayOfWeek: 'TOTAL',
                    date: '',
                    hours: parseFloat(row.querySelector('#total-hours').textContent), // Get total hours from the cell
                    workCompleted: ''
                });
            } else { // For all other rows
                const dayOfWeek = row.querySelector('select').value;
                const date = row.querySelector('input[type="date"]').value;
                const hours = parseFloat(row.querySelector('input[type="number"]').value);
                const workCompleted = row.querySelector('textarea').value;

                overtimeData.push({
                    dayOfWeek: dayOfWeek,
                    date: date,
                    hours: hours,
                    workCompleted: workCompleted
                });
            }
        });

        // Create a unique ID for the overtime request
        const requestId = Date.now().toString(); // Using a timestamp

        // Create an object for the overtime request
        const overtimeRequest = {
            requestId: requestId,
            employeeName: employeeName,
            employeeEmail: employeeEmail,
            overtimeData: overtimeData
        };

        // Save the request in Local Storage
        let overtimeRequests = [];
        if (localStorage.getItem('overtimeRequests')) {
            overtimeRequests = JSON.parse(localStorage.getItem('overtimeRequests'));
        }
        overtimeRequests.push(overtimeRequest);
        localStorage.setItem('overtimeRequests', JSON.stringify(overtimeRequests));

        // EmailJS Configuration
        const serviceID = "service_c2thk0c"; // Replace with your EmailJS service ID
        const templateID = "template_vqpav1p"; // Replace with your EmailJS template ID
        const publicKey = "xL-FXsZOq4SBGQPlU"; // Replace with your EmailJS public key

        // Data to be sent in the email
        const templateParams = {
            to: "supervisor1@example.com, supervisor2@example.com", // Replace with your recipients' emails
            employeeName: employeeName,
            employeeEmail: employeeEmail,
            overtimeData: overtimeData,
            requestId: requestId
        };

        // Send the email using EmailJS
        Email.send(
            serviceID,
            templateID,
            templateParams,
            publicKey
        )
            .then(res => {
                console.log('Email sent successfully!');
                // Display a success message to the user
            })
            .catch(err => {
                console.log('Error sending email:', err);
                // Display an error message to the user
            });
    }
});