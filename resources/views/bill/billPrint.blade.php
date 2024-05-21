<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/apexcharts/dist/apexcharts.css">
    {{-- <script src="./node_modules/lodash/lodash.min.js"></script>
<script src="./node_modules/apexcharts/dist/apexcharts.min.js"></script>

<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script> --}}
</head>

<body class="antialiased text-gray-900 leading-normal font-sans">
    <div class="container mx-auto px-6 py-4 border border-red-500">
        <div class="flex justify-center">
            <div class="w-full max-w-5xl ">



                <div class="flex flex-row justify-between ">

                    <div class="w-6/12 border border-red-500 ">

                        <div>
                            <img src="{{ asset('Images/logo.png') }}" alt="Login Image"
                                class="w-28 rounded-md px-4 py-2" style="background-color: #01549A">
                        </div>

                        <div class="mt-4">
                            <p class="text-black font-bold">NOVEL TELECOM</p>
                            <p class="text-black font-bold">ABN 76 616 058 130 </p>


                        </div>


                        <div class="mt-4">
                            <p class="text-black font-bold">Text INVOICE FOR</p>


                        </div>

                        <div class="mt-4 ">
                            <p class="text-black font-bold">Ms PRADEEPA MANORANGI JAYAMAH</p>
                            <p class="text-black font-bold">106 C</p>
                            <p class="text-black font-bold">HERBERT STREET</p>
                            <p class="text-black font-bold">DANDENONG VIC 3175</p>


                        </div>


                    </div>

                    <div class="border border-red-500 p-4 space-y-6">

                        <div class="">
                            <p class="text-black font-bold text-3xl">Your Account Details</p>
                        </div>

                        <div class="flex justify-between mt-3">
                            <div class="space-y-2">
                                <p class="text-black">Account Number</p>
                                <p class="text-black">Billing Period</p>
                                <p class="text-black">Issue Date</p>
                                <p class="text-black">Invoice Number</p>
                            </div>
                            <div class=" w-40 space-y-2 text-start ">
                                <p class="text-black">400174498</p>
                                <p class="text-black">01-31 Mar 2024</p>
                                <p class="text-black">4-Apr 2024</p>
                                <p class="text-black">1778996</p>
                            </div>
                        </div>

                        <div class="flex justify-between mt-3">
                            <div class="space-y-2">
                                <p class="text-black font-bold">Amount Date</p>

                            </div>
                            <div class=" w-40 space-y-2 text-start">
                                <p class="text-black">$70.78</p>

                            </div>
                        </div>

                        <div class="flex justify-between mt-3">
                            <div class="space-y-2">
                                <p class="text-black font-bold">Due Date</p>

                            </div>
                            <div class=" w-40 space-y-2 text-start">
                                <p class="text-black">18 Decmebere 2020</p>

                            </div>
                        </div>




                        <div class="w-8/12 mt-2">
                            <p class="text-black">To avoid a late payment fee of $15.00, please pay by the due date</p>
                        </div>

                    </div>

                </div>


                {{-- Tables --}}

                <div class="border border-red-500 mt-5">

                    <div class="flex gap-5">
                        <div class="  w-6/12">
                            <table class="w-full text-sm text-left rtl:text-right text-black border border-red-500">
                                <thead class="text-lg text-white" style="background-color:#E8710F;">
                                    <div>

                                        <tr>
                                            <th scope="col" class="px-6 py-3 ">
                                                Account Summary
                                            </th>
                                        </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Previous Invoice

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $71.13
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Adjustment
                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $0.00
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Payment Received

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $71.13
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Current Invoice

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $70.78
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Balance

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $00.00
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr class="font-semibold text-gray-900 ">
                                        <th scope="row" class="px-6 py-1 text-base">AMOUNT DUE</th>
                                        <td class="px-6 py-1">$70.78</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>

                        <div class="  w-6/12">
                            <table class="w-full text-sm text-left rtl:text-right text-black border border-red-500">
                                <thead class="text-lg text-white" style="background-color:#E8710F;">
                                    <div>

                                        <tr>
                                            <th scope="col" class="px-6 py-3 ">
                                                Summary of Charges
                                            </th>
                                        </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                NBN BRONZE

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $54.54
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Novel Tel Sip Basic Monthly Access
                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $9.08
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Mobile Calls

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $0.55
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                GST

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $6.43
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Balance

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $00.00
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr class="font-semibold text-gray-900 ">
                                        <th scope="row" class="px-6 py-1 text-base">TOTAL NEW CHARGES</th>
                                        <td class="px-6 py-1">$70.78</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                    </div>



                </div>

                {{-- END Tables --}}

                {{-- Chart --}}

                <div>
                    <div>
                        <h1 class="font-bold mt-5">Your Recent Charges</h1>
                    </div>

                    <div class="w-6/12 border border-red-500 mt-5">


                        <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">

                            <div class="pt-6 px-2 pb-0">
                                <div id="bar-chart"></div>
                            </div>
                        </div>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                    <script>
                        const chartConfig = {
                            series: [{
                                name: "Sales",
                                data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                            }, ],
                            chart: {
                                type: "bar",
                                height: 240,
                                toolbar: {
                                    show: false,
                                },
                            },
                            title: {
                                show: "",
                            },
                            dataLabels: {
                                enabled: false,
                            },
                            colors: ["#020617"],
                            plotOptions: {
                                bar: {
                                    columnWidth: "40%",
                                    borderRadius: 2,
                                },
                            },
                            xaxis: {
                                axisTicks: {
                                    show: false,
                                },
                                axisBorder: {
                                    show: false,
                                },
                                labels: {
                                    style: {
                                        colors: "#616161",
                                        fontSize: "12px",
                                        fontFamily: "inherit",
                                        fontWeight: 400,
                                    },
                                },
                                categories: [
                                    "Apr",
                                    "May",
                                    "Jun",
                                    "Jul",
                                    "Aug",
                                    "Sep",
                                    "Oct",
                                    "Nov",
                                    "Dec",
                                ],
                            },
                            yaxis: {
                                labels: {
                                    style: {
                                        colors: "#616161",
                                        fontSize: "12px",
                                        fontFamily: "inherit",
                                        fontWeight: 400,
                                    },
                                },
                            },
                            grid: {
                                show: true,
                                borderColor: "#dddddd",
                                strokeDashArray: 5,
                                xaxis: {
                                    lines: {
                                        show: true,
                                    },
                                },
                                padding: {
                                    top: 5,
                                    right: 20,
                                },
                            },
                            fill: {
                                opacity: 0.8,
                            },
                            tooltip: {
                                theme: "dark",
                            },
                        };

                        const chart = new ApexCharts(document.querySelector("#bar-chart"), chartConfig);

                        chart.render();
                    </script>

                </div>


                {{-- END Chart --}}


                <div class="w-full border-b-2 border-black transform  origin-left mt-5 "></div>



                {{-- PAYMENT SLIP PART --}}

                <div class=" flex mt-5">


                    <div class="flex gap-2 w-8/12">

                        <div class="w-5/12">
                            <div>
                                <div>
                                    <img src="{{ asset('Images/logo.png') }}" alt="Login Image"
                                        class="w-28 rounded-md px-4 py-2" style="background-color: #01549A">
                                </div>
                            </div>

                            <div class="mt-5">
                                <h1 class="font-bold">NOVEL TELECOM</h1>

                            </div>
                            <div class="mt-2">
                                <h1 class="font-bold">ABN 76 616 058 130</h1>

                            </div>

                        </div>


                        <div>
                            <div class="mt-5">
                                <h1 class="font-bold">Payment SlIp</h1>
                            </div>

                            <div class="mt-5">
                                <h1 class="font-bold">Remittance Advice</h1>
                            </div>
                            <div class="mt-5">
                                <h1>Please detach this remittance advice and return to NOVEL Telecom
                                    with your cheque or Money Order made payable to:
                                </h1>
                            </div>
                            <div class="mt-5">
                                <h1>NOVEL Telecom</h1>
                                <h1>42 Ross Stree</h1>
                                <h1>Dandenong</h1>
                                <h1>VIC 3175</h1>
                            </div>

                            <div class="mt-5">
                                <h1>Please see next page for additional payment methods</h1>

                            </div>


                        </div>
                    </div>



                    <div class="border border-red-500 ">

                        <div class="mt-10">
                            <table class="w-full text-sm text-left rtl:text-right text-black border border-red-500">
                                <thead class="text-lg text-white" style="background-color:#E8710F;">
                                    <div>

                                        <tr>
                                            <th scope="col" class="px-6 py-3 ">
                                                Account Details
                                            </th>
                                        </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Account Number

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            400174498
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Invoice Number
                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            1778996
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Issue Date

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            4 April 2024
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Amount Due

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            $70.78
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 ">
                                        <th scope="row" class="ml-8 mt-5 font-medium text-gray-900 ">
                                            <h2 class=" ml-5">
                                                Due Date

                                            </h2>
                                        </th>
                                        <td class="px-6 py-1">
                                            18 April 2024
                                        </td>
                                    </tr>

                                </tbody>
                                <tfoot>
                                    <tr class="font-semibold text-gray-900 ">
                                        <th scope="row" class="px-6 py-1 text-base">AMOUNT DUE</th>
                                        <td class="px-6 py-1">$70.78</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                        <div>
                            <h1>If you are on Direct Debit your account will
                                be debited on the due date</h1>
                        </div>

                    </div>


                </div>



                {{-- PAYMENT SLIP PART END  --}}
                <div class="w-full border-b-2 border-black transform  origin-left mt-5 "></div>

                {{-- PAYMENT Option Page --}}

                <div class="border border-red-500">

                    <div class="flex justify-between mt-5 mr-5">
                        <div>
                            <div>
                                <img src="{{ asset('Images/logo.png') }}" alt="Login Image"
                                    class="w-28 rounded-md px-4 py-2" style="background-color: #01549A">
                            </div>
                        </div>

                        <div class="flex gap-5">

                            <div class="font-bold">
                                <h1>Account Number</h1>
                                <h1>Issue Date</h1>
                                <h1>Invoice Number</h1>
                                <h1>Due Date</h1>
                            </div>
                            <div>
                                <h1>40017498</h1>
                                <h1>4 December 2024</h1>
                                <h1>1778996</h1>
                                <h1>18 April 2024</h1>
                            </div>
                        </div>


                    </div>


                    <div>
                        <h1 class="font-bold">Payment Options</h1>
                    </div>


                    <div class="flex mt-4 justify-between gap-3">

                        <div class="w-4/12">
                            <h1 class="font-bold">Direct Debit</h1>
                            <p>To set up automatic payments,
                                please call 1300 317 517</p>

                        </div>

                        <div class="w-4/12">

                            <h1 class="font-bold">Credit Card</h1>
                            <p>To pay by Credit Card please call
                                1300 317 517, or go to this link:
                                www.noveltelecom.au/pay</p>
                        </div>

                        <div class="w-4/12">

                            <div>
                                <h1 class="font-bold">EFT</h1>

                            </div>

                            <div class="flex">
                                <div class="font-bold">
                                    <h1>Bank</h1>
                                    <h1>BSB</h1>
                                    <h1>Account</h1>
                                </div>

                                <div>
                                    <h1>ANZ</h1>
                                    <h1>013 030</h1>
                                    <h1>2246 61713</h1>
                                </div>
                            </div>




                        </div>
                    </div>



                    {{-- Note Box ORange  --}}
                    <div class="border-2 mt-5 w-7/12" style="border-color: #E8710F;">
                        <h1>Please note the following surcharges for Direct Debit and Credit Card Payments</h1>
                        <h1>2.6% for Visa & Mastercard Payments</h1>
                        <h1>4.4% for AMEX and Diners Club Payments</h1>
                    </div>

                    {{-- End Note Box ORange  --}}

                    {{-- Bill Box Blue  --}}

                    <div class="border-2 mt-5 w-5/12 flex" style="border-color: #01549A;">

                        <div>

                        </div>
                        <div class="flex">

                            <div>
                                <div>
                                    <img src="{{ asset('Images/bpay.png') }}" alt="Login Image"
                                        class="w-20 rounded-md px-4 py-2">
                                </div>

                            </div>

                            <div class="flex mt-3 gap-4 border mx-auto my-auto py-2 px-2"
                                style="border-color: #01549A;">
                                <div class="">
                                    <h1 class="text-blue-900 font-bold">Biller Code:</h1>
                                    <h1 class="text-blue-900 font-bold">Ref:</h1>
                                </div>
                                <div>
                                    <h1 class="font-bold">267930</h1>
                                    <h1 class="font-bold">400174983</h1>
                                </div>
                            </div>





                        </div>
                    </div>

                    {{-- Bill Box Blue  --}}


                    <div class="border h-40 bg-gray-100">
                        <p class="mt-5">If you have any questions or queries regarding your invoice or your services,
                            please contact NOVEL Telecom on 1300 317 517</p>

                    </div>

                </div>




                <div class="border-2 border-black py-4 px-4">

                    <h1 class="font-bold">INFORMATION ON PREMIUM SERVICE</h1>
                    <p>Premium Services (PSMS) generally begin with a 19 number, used for the following, but not limited
                        to; voting lines, ringtones,
                        and sports scores. Charges for these services are higher than standard national SMS rates and
                        can be billed in the following
                        way:</p>
                    <p class="mt-5">Flat Rate: Flat fixed fee for each SMS sent to and/or received from a premium
                        number or a flat fee per phone call made to the
                        premium service.</p>
                    <p>- Subscription: Opt into an ongoing subscription with associated charges
                    </p>
                    <p>-Joining Fees: Charged an additional joining fee as part of an ongoing subscription</p>
                    <p>-Timed Rate: Premium call is timed and charged at a per minute rate</p>
                    <p>- Data Volume Charge: Charged according to how many kilobytes (KB) of data downloaded</p>
                    <p>Should you need to raise a complaint about your Premium Service, please contact the content
                        provided who supplied you with
                        the Premium Service in the first instance. If you require further assistance, please contact our
                        Customer Service Team.
                    </p>



                    <h1 class="font-bold">COMPLAINTS</h1>

                    <p>If you need to make a formal complaint please contact NOVEL TELECOM on 1300 317 517. If you are
                        not satisfied with the
                        resolution of your complaint we can escalate your matter to the next level of management. If we
                        are unable to resolve your
                        complaint you can contact the Telecommunications Industry Ombudsman (TIO) www.tio.com.au. We ask
                        that if you do have a
                        complaint, please give NOVEL TELECOM a chance to resolve your issue before contacting TIO.</p>



                </div>

                {{-- PAYMENT Option Page END  --}}




                {{-- SUMMARY OF CHARGES --}}


<div class="border border-red-500">

                    <div class="flex justify-between mt-5 mr-5 ">
                        <div>
                            <div>
                                <img src="{{ asset('Images/logo.png') }}" alt="Login Image"
                                    class="w-28 rounded-md px-4 py-2" style="background-color: #01549A">
                            </div>
                        </div>

                        <div class="flex gap-5">

                            <div class="font-bold">
                                <h1>Account Number</h1>
                                <h1>Issue Date</h1>
                                <h1>Invoice Number</h1>
                                <h1>Due Date</h1>
                            </div>
                            <div>
                                <h1>40017498</h1>
                                <h1>4 December 2024</h1>
                                <h1>1778996</h1>
                                <h1>18 April 2024</h1>
                            </div>
                        </div>





                    </div>


                    <div>
                        <h1>hello</h1>
                    </div>



</div>


                {{-- END OF SUMMARY OF CHARGES --}}



            </div>
        </div>
    </div>
</body>

</html>
