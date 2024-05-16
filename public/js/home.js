// {{-- serchbox value pass and phonenumber value pass table --}}
document.addEventListener("DOMContentLoaded", (event) => {
    const detailsTableBody = document.getElementById("details-table-body");
    const searchInput = document.querySelector('input[name="searchd"]');

    document.querySelectorAll(".show-details").forEach((item) => {
        item.addEventListener("click", (event) => {
            event.preventDefault();

            // Get the account service data from the clicked element
            const accountService = JSON.parse(
                item.getAttribute("data-accountservice")
            );

            // Clear the existing table body content
            detailsTableBody.innerHTML = "";

            // Populate the table with account service details
            const fields = [
                {
                    label: "Phone Number",
                    value: accountService.phonenumber,
                },
                {
                    label: "Service Narrative",
                    value: accountService.service_narrative,
                },
                {
                    label: "Status",
                    value: accountService.status,
                },
                {
                    label: "Date Connected",
                    value: accountService.created_at,
                },
                {
                    label: "Password",
                    value: accountService.password,
                },
                {
                    label: "Package",
                    value: accountService.service_id,
                },
                {
                    label: "Charge Override",
                    value: "--",
                },
                {
                    label: "Package Start",
                    value: accountService.created_at,
                },
                {
                    label: "Contract",
                    value: accountService.contract,
                },
                {
                    label: "Contract Start",
                    value: "--",
                },
                {
                    label: "Contract End",
                    value: "--",
                },
                {
                    label: "Service Owner",
                    value: "--",
                },
                {
                    label: "Port Authority Date",
                    value: "--",
                },
                {
                    label: "Order Number",
                    value: "--",
                },
                {
                    label: "IPND",
                    value: "--",
                },
            ];

            fields.forEach((field) => {
                const row = document.createElement("tr");
                const cellItem = document.createElement("td");
                const cellValue = document.createElement("td");
                cellItem.textContent = field.label;
                cellValue.textContent = field.value;
                row.appendChild(cellItem);
                row.appendChild(cellValue);
                detailsTableBody.appendChild(row);
            });

            // Set search input value to phone number
            searchInput.value = accountService.phonenumber;
        });
    });
});

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
            accordionContent.style.maxHeight = `${
                accordionContent.scrollHeight + 32
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
