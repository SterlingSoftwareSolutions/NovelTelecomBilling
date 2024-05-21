// Packege view Start

function getaservicedetails(phonenumber, accountId) {
    console.log("Clicked on phone number: " + phonenumber + " for account ID: " + accountId);
    $.ajax({
        url: '/service/details/' + phonenumber + '/' + accountId,
        type: 'GET',
        success: function (response) {
            console.log(response);
            console.log(response.data[0].phonenumber);

            // Process the response data and populate the table
            const accountService = response.data[0]; // Assuming you're working with the first object in the array
            const fields = [
                { label: "Phone Number", value: accountService.phonenumber, action: 'edit' },
                { label: "Service Narrative", value: accountService.service_narrative, action: 'view' },
                { label: "Status", value: accountService.status, action: 'add' },
                { label: "Date Connected", value: accountService.created_at, action: 'more' },
                { label: "Password", value: accountService.password, action: 'edit' },
                { label: "Package", value: accountService.service_id, action: 'view' },
                { label: "Charge Override", value: "--", action: 'add' },
                { label: "Package Start", value: accountService.created_at, action: 'more' },
                { label: "Contract", value: accountService.contract, action: 'edit' },
                { label: "Contract Start", value: "--", action: 'view' },
                { label: "Contract End", value: "--", action: 'add' },
                { label: "Service Owner", value: "--", action: 'more' },
                { label: "Port Authority Date", value: "--", action: 'edit' },
                { label: "Order Number", value: "--", action: 'view' },
                { label: "IPND", value: "--", action: 'add' },
            ];

            const detailsTableBody = document.getElementById("details-table-body");

            // Clear existing table rows
            detailsTableBody.innerHTML = '';

            fields.forEach((field) => {
                const row = document.createElement("tr");
                const cellLabel = document.createElement("td");
                const cellValue = document.createElement("td");
                cellLabel.textContent = field.label;
                cellValue.textContent = field.value;

                // Add right-click event listener
                cellValue.addEventListener('contextmenu', (event) => {
                    event.preventDefault();
                    showContextMenu(event, field.action);
                });

                row.appendChild(cellLabel);
                row.appendChild(cellValue);
                detailsTableBody.appendChild(row);
            });
        },
        error: function (xhr, status, error) {
            console.error(error); // Handle error
        }
    });
}

const contextMenus = {
    edit: [
        { id: 'edit-item', label: 'Edit' },
        { id: 'edit-test01', label: 'test01' },
        { id: 'edit-test02', label: 'test02' },
    ],
    view: [
        { id: 'view-item', label: 'View' },
        { id: 'view-test01', label: 'test01' },
    ],
    add: [
        { id: 'add-item', label: 'Add' },
        { id: 'add-test05', label: 'test05' },
    ],
    more: [
        { id: 'more-item', label: 'More' },
    ],
};
function showContextMenu(event, action) {
    const contextMenu = document.getElementById("context-menu");
    const menuList = contextMenu.querySelector('ul');
    menuList.innerHTML = '';

    // Populate context menu based on action
    contextMenus[action].forEach(menuItem => {
        const li = document.createElement('li');
        li.id = menuItem.id;
        li.textContent = menuItem.label;
        li.classList.add('px-4', 'py-2', 'cursor-pointer', 'hover:bg-gray-200');
        menuList.appendChild(li);
    });

    contextMenu.style.top = `${event.clientY}px`;
    contextMenu.style.left = `${event.clientX}px`;
    contextMenu.classList.remove("hidden");

    // Hide the context menu when clicking outside of it
    document.addEventListener('click', hideContextMenu);
}

function hideContextMenu() {
    const contextMenu = document.getElementById("context-menu");
    contextMenu.classList.add("hidden");
    document.removeEventListener('click', hideContextMenu);
}

// Event listeners for context menu items
document.addEventListener('click', (event) => {
    if (event.target.id === 'edit-item') {
        console.log('Edit clicked');
        // Add your edit logic here
    } else if (event.target.id === 'view-item') {
        console.log('View clicked');
        // Add your view logic here
    } else if (event.target.id === 'add-item') {
        console.log('Add clicked');
        // Add your add logic here
    } else if (event.target.id === 'more-item') {
        console.log('More clicked');
        // Add your more logic here
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const phoneLinks = document.querySelectorAll('.phone-link');

    phoneLinks.forEach(phoneLink => {
        const serviceId = phoneLink.id.split('-')[1];
        const contextMenu = document.getElementById(`contextMenu-${serviceId}`);

        phoneLink.addEventListener('contextmenu', function (e) {
            e.preventDefault();
            const {
                clientX: mouseX,
                clientY: mouseY
            } = e;
            contextMenu.style.top = `${mouseY}px`;
            contextMenu.style.left = `${mouseX}px`;
            contextMenu.classList.remove('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!contextMenu.contains(e.target) && e.target !== phoneLink) {
                contextMenu.classList.add('hidden');
            }
        });

        contextMenu.querySelectorAll('.context-menu-item').forEach(item => {
            item.addEventListener('click', function () {
                alert(this.textContent + ' clicked');
                contextMenu.classList.add('hidden');
            });
        });
    });
});
// Packege view E

// {{--navigate notes->document  --}}
document.addEventListener("DOMContentLoaded", function () {
    const notesButton = document.getElementById("notesButton");
    const billsButton = document.getElementById("billsButton");
    const correrpondenceButton = document.getElementById(
        "correrpondenceButton"
    );
    const eventButton = document.getElementById("eventButton");
    const financialButton = document.getElementById("financialButton");
    const paymentButton = document.getElementById("paymentButton");
    const documentButton = document.getElementById("documentButton");

    const notesTable = document.getElementById("notesTable");
    const billsTable = document.getElementById("billsTable");
    const correrpondenceTable = document.getElementById("correrpondenceTable");
    const eventTable = document.getElementById("eventTable");
    const financialTable = document.getElementById("financialTable");
    const paymentTable = document.getElementById("paymentTable");
    const DocumentTable = document.getElementById("DocumentTable");

    notesTable.classList.remove("hidden");
    notesButton.addEventListener("click", function () {
        hideAllTables();
        notesTable.classList.remove("hidden");
    });

    billsButton.addEventListener("click", function () {
        hideAllTables();
        billsTable.classList.remove("hidden");
    });

    correrpondenceButton.addEventListener("click", function () {
        hideAllTables();
        correrpondenceTable.classList.remove("hidden");
    });

    eventButton.addEventListener("click", function () {
        hideAllTables();
        eventTable.classList.remove("hidden");
    });

    financialButton.addEventListener("click", function () {
        hideAllTables();
        financialTable.classList.remove("hidden");
    });

    paymentButton.addEventListener("click", function () {
        hideAllTables();
        paymentTable.classList.remove("hidden");
    });

    paymentButton.addEventListener("click", function () {
        hideAllTables();
        paymentTable.classList.remove("hidden");
    });

    documentButton.addEventListener("click", function () {
        hideAllTables();
        DocumentTable.classList.remove("hidden");
    });

    // Function to hide all tables
    function hideAllTables() {
        notesTable.classList.add("hidden");
        billsTable.classList.add("hidden");
        correrpondenceTable.classList.add("hidden");
        eventTable.classList.add("hidden");
        financialTable.classList.add("hidden");
        paymentTable.classList.add("hidden");
        DocumentTable.classList.add("hidden");
    }
});

// second section navigate tab
document.addEventListener("DOMContentLoaded", function () {
    const notesButton = document.getElementById("notesButton");
    const billsButton = document.getElementById("billsButton");
    const correrpondenceButton = document.getElementById(
        "correrpondenceButton"
    );
    const eventButton = document.getElementById("eventButton");
    const financialButton = document.getElementById("financialButton");
    const paymentButton = document.getElementById("paymentButton");
    const documentButton = document.getElementById("documentButton");

    const notesTable = document.getElementById("notesTable");
    const billsTable = document.getElementById("billsTable");
    const correrpondenceTable = document.getElementById("correrpondenceTable");
    const eventTable = document.getElementById("eventTable");
    const financialTable = document.getElementById("financialTable");
    const paymentTable = document.getElementById("paymentTable");
    const DocumentTable = document.getElementById("DocumentTable");

    notesTable.classList.remove("hidden");
    notesButton.addEventListener("click", function () {
        hideAllTables();
        notesTable.classList.remove("hidden");
    });

    billsButton.addEventListener("click", function () {
        hideAllTables();
        billsTable.classList.remove("hidden");
    });

    correrpondenceButton.addEventListener("click", function () {
        hideAllTables();
        correrpondenceTable.classList.remove("hidden");
    });

    eventButton.addEventListener("click", function () {
        hideAllTables();
        eventTable.classList.remove("hidden");
    });

    financialButton.addEventListener("click", function () {
        hideAllTables();
        financialTable.classList.remove("hidden");
    });

    paymentButton.addEventListener("click", function () {
        hideAllTables();
        paymentTable.classList.remove("hidden");
    });

    paymentButton.addEventListener("click", function () {
        hideAllTables();
        paymentTable.classList.remove("hidden");
    });

    documentButton.addEventListener("click", function () {
        hideAllTables();
        DocumentTable.classList.remove("hidden");
    });

    // Function to hide all tables
    function hideAllTables() {
        notesTable.classList.add("hidden");
        billsTable.classList.add("hidden");
        correrpondenceTable.classList.add("hidden");
        eventTable.classList.add("hidden");
        financialTable.classList.add("hidden");
        paymentTable.classList.add("hidden");
        DocumentTable.classList.add("hidden");
    }
});

// 4th section billing table
document.addEventListener("DOMContentLoaded", function () {
    const novelteleventButton = document.getElementById("novelteleventButton");
    const noveltelesitesButton = document.getElementById(
        "noveltelesitesButton"
    );
    const novelteleventTable = document.getElementById("novelteleventTable");
    const noveltelesitesTable = document.getElementById("noveltelesitesTable");

    novelteleventTable.classList.remove("hidden");

    novelteleventButton.addEventListener("click", function () {
        hideAllTables();
        novelteleventTable.classList.remove("hidden");
    });

    noveltelesitesButton.addEventListener("click", function () {
        hideAllTables();
        noveltelesitesTable.classList.remove("hidden");
    });

    // function to hide all tables
    function hideAllTables() {
        novelteleventTable.classList.add("hidden");
        noveltelesitesTable.classList.add("hidden");
    }
});

// tab underline script
function selectTab(button) {
    const buttons = document.querySelectorAll(".tab-button");
    buttons.forEach((btn) => {
        btn.classList.remove("selected-tab");
    });
    button.classList.add("selected-tab");
}

//side expand script
const accordionHeader = document.querySelectorAll(".accordion-header");
accordionHeader.forEach((header) => {
    const accordionContent =
        header.parentElement.querySelector(".accordion-content");
    const accordionHeadericon = header.querySelector(".fas");

    console.log(accordionHeadericon);
    window.addEventListener("resize", function () {
        if (window.visualViewport.width < 768) {
            accordionContent.style.maxHeight = "0";
            header.querySelector(".fas").classList.add("hidden");
        } else {
            accordionHeadericon.style.display = "none";
            accordionContent.style.maxHeight = "unset";
        }
    });

    header.addEventListener("click", function () {
        let accordionMaxHeight = accordionContent.style.maxHeight;

        // Condition handling
        if (accordionMaxHeight == "0px" || accordionMaxHeight.length == 0) {
            accordionContent.style.maxHeight = `${accordionContent.scrollHeight + 32
                }px`;
            header.querySelector(".fas").classList.remove("fa-plus");
            header.querySelector(".fas").classList.add("fa-minus");
            header.parentElement.classList.add("");
        } else {
            accordionContent.style.maxHeight = `0px`;
            header.querySelector(".fas").classList.add("fa-plus");
            header.querySelector(".fas").classList.remove("fa-minus");
            header.parentElement.classList.remove("bg-indigo-50");
        }
    });
});

// NOTE Start

function updateNotesTable(notes) {
    const tableBody = document.getElementById('notesTableBody');
    tableBody.innerHTML = '';

    notes.forEach(note => {
        const row = document.createElement('tr');
        row.innerHTML = `
     <td>${note.id}</td>
  <td>${note.note}</td>

   <td>${note.created_at}</td>
   <td>${note.user_id}</td>
                    `;
        tableBody.appendChild(row);
    });

    document.getElementById('notesTable').classList.remove('hidden');
}



function openModal(account) {
    console.log(account)
    document.getElementById('noteModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Disable scrolling on the background
}

function closeModal(event) {
    if (!event || event.target === document.getElementById('noteModal')) {
        document.getElementById('noteModal').classList.add('hidden');
        document.body.style.overflow = 'auto'; // Re-enable scrolling
    }
}

function saveNote() {
    console.log('Entering saveNote function');
    var noteText = document.getElementById('noteText').value.trim(); // Get the text and trim whitespace
    var account = document.getElementById('account').value;

    if (noteText == '') {
        alert('Please write your note before saving.'); // Alert if empty
        return false; // Stop the function
    }

    console.log('Note Saved:', noteText);
    console.log(account);

    // Construct the URL with query parameters
    var url = '/notestore/' + encodeURIComponent(noteText) + '/' + encodeURIComponent(account);

    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    $.ajax({
        url: url,
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(data) {
            console.log('Note saved successfully:', data.creater);
            var accId = data.creater;
            console.log(accId);
            getNotes(accId);
            closeModal();

            // Optionally: Do something with the response, like updating UI
        },
        error: function(xhr, status, error) {
            console.error('Error saving note:', error);
            // Optionally: Display an error message to the user
        }
    });

}

function getNotes(accId) {
    console.log('hi');
    $.ajax({
        url: '/notes',
        type: 'GET',
        data: {
            accId: accId
        },
        success: function(data) {
            // Update UI with the received notes
            updateNotesTable(data);
        },
        error: function(xhr, status, error) {
            console.error('Error fetching notes:', error);
            // Optionally: Display an error message to the user
        }
    });
}

// NOTE End