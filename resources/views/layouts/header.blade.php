<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        /* Styles for the dropdown menu */
        .dropdown-content {
            position: absolute;
            z-index: 10;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            display: block;
            padding: 8px 16px;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .dropdown-item:hover {
            background-color: #f3f4f6;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 ml-11" aria-label="Global">

        <div class="lg:flex lg:gap-x-12">
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false" onclick="toggleDropdown('fileDropdown')">
                    File
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="fileDropdown" class="dropdown-content hidden">
                    <!-- Dropdown content for File -->
                    <ul>
                        <li><a href="#" class="dropdown-item">New</a></li>
                        <li><a href="#" class="dropdown-item">Open</a></li>
                        <li><a href="#" class="dropdown-item">Save</a></li>
                    </ul>
                </div>
            </div>

            <!-- Repeat the same pattern for other dropdowns with unique IDs -->
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false" onclick="toggleDropdown('accountDropdown')">
                    Account
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="accountDropdown" class="dropdown-content hidden">
                    <!-- Dropdown content for Account -->
                    <ul>
                        <li><a href="#" class="dropdown-item">Profile</a></li>
                        <li><a href="#" class="dropdown-item">Settings</a></li>
                        <li><a href="#" class="dropdown-item">Logout</a></li>
                    </ul>
                </div>
            </div>

            <!-- Repeat the same pattern for other dropdowns -->
            <!-- Service Dropdown -->
            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false" onclick="toggleDropdown('serviceDropdown')">
                    Service
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="serviceDropdown" class="dropdown-content hidden">
                    <!-- Dropdown content for Service -->
                    <ul>
                        <li><a href="#" class="dropdown-item">Option 1</a></li>
                        <li><a href="#" class="dropdown-item">Option 2</a></li>
                        <li><a href="#" class="dropdown-item">Option 3</a></li>
                    </ul>
                </div>
            </div>

            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false" onclick="toggleDropdown('UtilitiesDropdown')">
                    Utilities
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="UtilitiesDropdown" class="dropdown-content hidden">
                    <!-- Dropdown content for Service -->
                    <ul>
                        <li><a href="#" class="dropdown-item">Option 1</a></li>
                        <li><a href="#" class="dropdown-item">Option 2</a></li>
                        <li><a href="#" class="dropdown-item">Option 3</a></li>
                    </ul>
                </div>
            </div>


            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false" onclick="toggleDropdown('OptionsDropdown')">
                    Options
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="OptionsDropdown" class="dropdown-content hidden">
                    <!-- Dropdown content for Service -->
                    <ul>
                        <li><a href="#" class="dropdown-item">Option 1</a></li>
                        <li><a href="#" class="dropdown-item">Option 2</a></li>
                        <li><a href="#" class="dropdown-item">Option 3</a></li>
                    </ul>
                </div>
            </div>


            <div class="relative">
                <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900"
                    aria-expanded="false" onclick="toggleDropdown('WindowsDropdown')">
                      Windows
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div id="WindowsDropdown" class="dropdown-content hidden">
                    <!-- Dropdown content for Service -->
                    <ul>
                        <li><a href="#" class="dropdown-item">Option 1</a></li>
                        <li><a href="#" class="dropdown-item">Option 2</a></li>
                        <li><a href="#" class="dropdown-item">Option 3</a></li>
                    </ul>
                </div>
            </div>
            

            <!-- Repeat for other items -->
        </div>
    </nav>

    <script>
        // Function to toggle dropdown visibility
        function toggleDropdown(dropdownId) {
            const dropdown = document.getElementById(dropdownId);
            const allDropdowns = document.querySelectorAll('.dropdown-content');

            // Close all dropdowns except the one that was clicked
            allDropdowns.forEach((dropdown) => {
                if (dropdown.id !== dropdownId) {
                    dropdown.classList.add('hidden');
                }
            });

            // Toggle the visibility of the clicked dropdown
            dropdown.classList.toggle('hidden');
        }
    </script>

</body>

</html>
