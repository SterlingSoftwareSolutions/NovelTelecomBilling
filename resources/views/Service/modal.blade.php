<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    <div class="h-screen   items-center justify-center">
        <div class="modal-container hidden  fixed  w-full h-full top-0  left-0 flex  " id="formModal">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50 "></div>

            <div class="modal-content bg-white   mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <button class="modal-close absolute bg-red-900 top-0 right-0 mt-4 mr-4" onclick="closeModal()">
                    <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div id="subscribeForm" class="flex-col font-medium text-15px">
                    <div class="flex flex-row gap-4 md:gap-8 m-5">
                        <div class="flex flex-col w-7/12">
                            <label for="typeSelect">Network</label>
                            <select name="typeSelect" id="typeSelect" onchange="toggleFields()"
                                class="w-full p-2 border border-gray-800 rounded-lg">
                                <option value="Individual">Optus</option>

                            </select>
                        </div>

                        <div class="flex flex-col w-7/12">
                            <label for="typeSelect">Service Type</label>
                            <select name="typeSelect" id="typeSelect" onchange="toggleFields()"
                                class="w-full p-2 border border-gray-800 rounded-lg">
                                <option value="Individual">Optus 1300/1800</option>

                            </select>
                        </div>
                    </div>

                    <div class="flex flex-row gap-4 md:gap-8  m-5  ">
                        <div class="w-7/12">
                            <label for="">Phone Number</label>
                            <input type="text" name="Medium"
                                class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        </div>
                        <div class="flex flex-col w-7/12" id="keyandtitle">
                            <label for="">Status</label>
                            <select name="" id=""
                                class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                                <option value="">Connected(Open)</option>

                            </select>
                        </div>
                    </div>

                    <div id="businessUnitDiv" class="flex flex-row gap-4 md:gap-8 m-5" style="display: none;">
                        <div class="flex flex-col w-7/12">
                            <label for="">Service Narrative</label>
                            <select name="" id=""
                                class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                                <option value=""></option>
                            </select>
                        </div>


                    </div>


                    <div class="flex flex-row gap-4 md:gap-8 m-5">
                        <div class="w-7/12">
                            <label for="">Date Of Birth</label>
                            <!-- Date Picker Input -->
                            <input type="text" id="datepicker" placeholder="Select Date"
                                class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                            <!-- Include flatpickr JavaScript -->
                            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
                            <!-- Initialize flatpickr -->
                            <script>
                                flatpickr("#datepicker", {
                                    // Options
                                    dateFormat: "Y-m-d", // Date format
                                });
                            </script>
                        </div>

                        <div class="w-7/12">
                            <label for="">Password</label>
                            <input type="text" name="Medium"
                                class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        </div>
                    </div>

                    <div class="flex flex-row gap-4 md:gap-8  m-5  " id="tradingname">
                        <div class="flex flex-col w-7/12">
                            <label for="">Parent</label>
                            <select name="" id=""
                                class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="flex flex-row gap-4 md:gap-8  m-5  " id="acnandabn">

                        <div class="flex flex-col w-4/12">
                            <label for="">Package</label>
                            <select name="" id=""
                                class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="w-4/12">
                            <label for="">Package option</label>
                            <input type="text" name="Medium"
                                class="w-full p-2  border border-gray-800 rounded-lg opacity-60">
                        </div>

                        <div class="relative w-7/12 ">
                            <button type="button"
                                class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                                aria-expanded="false" onclick=" togglenew();">
                                Package
                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{-- toggleDropdown('packagedropdown'); --}}
                            </button>
                            <!-- Hidden input field to store the dataArray -->
                            <div id="packageNames">
                                <!-- Package names will be dynamically inserted here -->
                            </div>
                            
                            
                            

                           
                            <div id="packagedropdown" class="dropdown-content hidden">
                                <!-- Dropdown content for Account -->
                                <ul class=" w-[200px]">
                                    <li>
                                        <div class="relative ">
                                            <button type="button"
                                                class="flex items-center gap-x-1 text-sm  leading-6 text-gray-900"
                                                aria-expanded="false" onclick="toggleSubDropdown('packageoption')">
                                                Account details
                                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <div id="packageoption"
                                                class="dropdown-content hidden absolute left-32 top-0 flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900">
                                                <!-- Sub-dropdown content for Profile -->
                                                <ul class=" w-[150px]">
                                                    <li><a href="#" class="dropdown-item ">Sub Profile 1</a>
                                                    </li>
                                                    <li><a href="#" class="dropdown-item">Sub Profile 2</a></li>
                                                    <li><a href="#" class="dropdown-item">Sub Profile 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>


                    <div class="flex flex-row gap-4 md:gap-8  m-5  " id="acnandabn">

                        <div class="flex flex-col w-7/12">
                            <label for="">Dealer</label>
                            <select name="" id=""
                                class="w-full p-2  border border-gray-800 rounded-lg opacity-60">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="w-7/12">
                            <label for=""></label>
                            <input type="text" name="Medium"
                                class="w-full p-2 border mt-6  border-gray-800 rounded-lg opacity-60">
                        </div>
                    </div>

                    <div class="flex flex-row gap-4 md:gap-8  m-5  " id="emailandquestion">
                        <div class="w-7/12">
                            <label for="">Cost Centr</label>
                            <input type="text" name="Medium"
                                class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        </div>
                    </div>

                    <div id="novelteleventTable" class="overflow-x-auto  mt-5">
                        <label for="" class="m-5">Attributes</label>
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-separate m-5">

                            <!-- Table content for Notes -->
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-300 h-10 rounded-full dark:bg-gray-700 dark:text-gray-600">
                                <tr>
                                    <th>Attributes</th>
                                    <th>Values</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Credit Card</td>
                                </tr>
                                <tr>
                                    <td>Driver Licence</td>

                                </tr>
                                <tr>
                                    <td>Passport</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex flex-row gap-4 md:gap-8  m-5  " id="emailandquestion">
                        <div class="w-7/12">
                            <button type="submit"
                                class="items-center p-2 bg-primaryColor flex justify-start md:w-[150px] ml-11 rounded-lg text-white text-center bg-green-600 mt-5">
                                <span class="mx-auto border-1 bg-green-">Save</span>
                            </button>

                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <script>
        function closeModal() {
            document.getElementById('formModal').classList.add('hidden');
        }
    </script>

    <script>
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            dropdown.classList.toggle('hidden');

            // Fetch package data when the dropdown is toggled
            if (!dropdown.classList.contains('hidden')) {
                fetchPackages();
            }
        }

        function fetchPackages() {
            fetch('/packages')
                .then(response => response.json())
                .then(data => {
                    const packageDropdown = document.getElementById('packageDropdown');
                    packageDropdown.innerHTML = ''; // Clear previous options
                    data.forEach(package => {
                        const listItem = document.createElement('li');
                        const button = document.createElement('button');
                        button.type = 'button';
                        button.className =
                            'flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900';
                        button.textContent = package.name;
                        button.addEventListener('click', () => {
                            // Do something with the clicked package, e.g., display its details
                            console.log(package);
                        });
                        listItem.appendChild(button);
                        packageDropdown.appendChild(listItem);
                    });
                })
                .catch(error => console.error('Error fetching packages:', error));
        }
    </script>

<script>
    function togglenew() {
        console.log("hello");
        // Use AJAX to call the Laravel route
        fetch('/packages')
        fetch('/packages')
    .then(response => response.json())
    .then(data => {
        // Assign the data array to a variable
        var dataArray = data;
        console.log(dataArray); // Check the data in the console

        // Select the div element by its ID
        var divContainer = document.getElementById('packageNames');

        // Loop through the dataArray and create a label element for each package name
        dataArray.forEach(package => {
            var label = document.createElement('label');
            label.textContent = package.package_name; // Set the text content of the label
            divContainer.appendChild(label); // Append the label to the div container
        });
    })
    .catch(error => console.error('Error:', error));

    }
</script>


    {{-- dropdown --}}
    {{-- <script>
        // Function to toggle dropdown visibility
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            const allDropdowns = document.querySelectorAll('.dropdown-content');

            // Close all dropdowns except the one that was clicked
            allDropdowns.forEach((dropdownElement) => {
                if (dropdownElement.id !== dropdownId && !dropdownElement.classList.contains('hidden')) {
                    dropdownElement.classList.add('hidden');
                }
            });

            // Toggle the visibility of the clicked dropdown
            dropdown.classList.toggle('hidden');
        }
    </script> --}}

    {{-- subdropdown --}}
    {{-- <script>
        let currentSubDropdown = null;

        function toggleSubDropdown(id) {
            const subDropdown = document.getElementById(id);

            // Close the current sub-dropdown if it exists and is not the same as the one being clicked
            if (currentSubDropdown && currentSubDropdown !== subDropdown) {
                currentSubDropdown.classList.add('hidden');
            }

            // Toggle the visibility of the clicked sub-dropdown
            subDropdown.classList.toggle('hidden');

            // Update the current sub-dropdown
            currentSubDropdown = subDropdown;
        }
    </script> --}}


</body>

</html>
