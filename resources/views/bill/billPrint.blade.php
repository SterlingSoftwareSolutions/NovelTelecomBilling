<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .flex {
            display: flex;
            justify-content: space-between;
        }

        .item {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .logo {
            height: 60px;
            margin-bottom: 20px;
        }

        .bold {
            font-weight: bold;
        }

        .section-title {
            font-size: 24px;
            color: #333;
        }

        .mb-20 {
            margin-bottom: 20px;
        }

        .full-width {
            width: 100%;
        }

        .half-width {
            width: 50%;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .table thead th {
            background-color: #f3f3f3;
        }

        .total-row th,
        .total-row td {
            font-weight: bold;
        }

        hr.new4 {
         border: 1px solid black;
}


        .barchart-Wrapper {
      display: table;
      position: relative;
      margin: 20px 0;
      height: 252px;
      width: 600px;
    }
    .barChart-Container {
      display: table-cell;
      width: 100%;
      height: 100%;
      padding-left: 15px;
    }
    .barchart {
     display: table;
     table-layout: fixed;
     height: 100%;
     width: 100%;
     border-bottom: 3px solid tomato;
    }
    .barchart-Col {
      position: relative;
      vertical-align: bottom;
      display: table-cell;
      height: 100%;
    }
    .barchart-Col + .barchart-Col {
      border-left: 4px solid transparent;
    }
    .barchart-Bar {
      position: relative;
      height: 0;
      transition: height 0.5s 2s;
      width: 66px;
      margin: auto;
    }
    .barchart-Bar:after {
      content: attr(attr-height);
      color: white;
      position: absolute;
      text-align: center;
      width: 100%;
    }
    .barchart-BarFooter {
      position: absolute;
      text-align: center;
      height: 10%;
      width: 100%;
    }
    .barchart-BarFooter h3 {
      color: darkred;
    }
    .barchart-TimeCol {
      position: absolute;
      top: 0;
      height: 100%;
      width: 100%;
    }
    .barchart-Time {
      height: 25%;
      vertical-align: middle;
      position: relative;
    }
    .barchart-Time:after {
      border-bottom: 3px solid black;
      content: "";
      position: absolute;
      width: 100%;
      left: 0;
      top: 0em;
    }
    .barchart-TimeText {
      position: absolute;
      top: -8px;
      z-index: 1;
      background: white;
      padding-right: 5px;
      color: #4d4d4d;
      font-size: 15px;
      font-family: 'Avenir Medium';
    }
    .html-bar {
      background-color: deepskyblue;
    }
    .css-bar {
      background-color: greenyellow;
    }
    .js-bar {
      background-color: peachpuff;
    }
    .python-bar {
      background-color: darkolivegreen;
    }
    .java-bar {
      background-color: cornflowerblue;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="flex">
            <div class="item half-width">
                <img src="../images/logo01.png" alt="Logo" class="logo">
                <p class="bold">NOVEL TELECOM</p>
                <p class="bold">ABN 76 616 058 130</p>
                <p class="bold mb-20">INVOICE FOR</p>
                <p class="bold">Ms PRADEEPA MANORANGI JAYAMAH</p>
                <p class="bold">106 C HERBERT STREET</p>
                <p class="bold">DANDENONG VIC 3175</p>
            </div>
            <div class="item">
                <p class="section-title">Your Account Details</p>
                <div class="flex mb-20">
                    <div>
                        <p>Account Number</p>
                        <p>Billing Period</p>
                        <p>Issue Date</p>
                        <p>Invoice Number</p>
                    </div>
                    <div>
                        <p>400174498</p>
                        <p>01-31 Mar 2024</p>
                        <p>4-Apr 2024</p>
                        <p>1778996</p>
                    </div>
                </div>
                <p class="bold">Amount Due: $70.78</p>
                <p class="bold">Due Date: 18 Dec 2020</p>
                <p>To avoid a late payment fee of $15.00, please pay by the due date.</p>
            </div>
        </div>
        <div class="item">
            <table class="table">
                <thead>
                    <tr>
                        <th>Account Summary</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Previous Invoice</td>
                        <td>$71.13</td>
                    </tr>
                    <tr>
                        <td>Adjustment</td>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <td>Payment Received</td>
                        <td>$71.13</td>
                    </tr>
                    <tr>
                        <td>Current Invoice</td>
                        <td>$70.78</td>
                    </tr>
                    <tr>
                        <td>Balance</td>
                        <td>$0.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="total-row">
                        <th>Total Due</th>
                        <td>$70.78</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="item full-width">
            <table class="table">
                <thead style="background-color:#E8710F; color: white;">
                    <tr>
                        <th colspan="2">Summary of Charges</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>NBN BRONZE</th>
                        <td>$54.54</td>
                    </tr>
                    <tr>
                        <th>Novel Tel Sip Basic Monthly Access</th>
                        <td>$9.08</td>
                    </tr>
                    <tr>
                        <th>Mobile Calls</th>
                        <td>$0.55</td>
                    </tr>

                    <th>GST</th>
                    <td>$6.43</td>
                    </tr>
                    <tr>
                        <th>Balance</th>
                        <td>$0.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total New Charges</th>
                        <td>$70.78</td>
                    </tr>
                </tfoot>
            </table>
        </div>


                            {{-- Chart --}}
                            <div class="barchart-Wrapper">
                                <div class="barchart-TimeCol">
                                 <div class="barchart-Time">
                                   <span class="barchart-TimeText">125</span>
                                 </div>
                                 <div class="barchart-Time">
                                   <span class="barchart-TimeText">100</span>
                                 </div>
                                 <div class="barchart-Time">
                                   <span class="barchart-TimeText">75</span>
                                 </div>
                                 <div class="barchart-Time">
                                   <span class="barchart-TimeText">50</span>
                                 </div>
                                 <div class="barchart-Time">
                                   <span class="barchart-TimeText">25</span>
                                 </div>
                                </div>

                                <div class="barChart-Container">
                                 <div class="barchart">
                                  <div class="barchart-Col">
                                   <div class="barchart-Bar html-bar" style="height: 75%;"></div>
                                     <div class="barchart-BarFooter">
                                       <h3>HTML</h3>
                                     </div>
                                 </div>
                                 <div class="barchart-Col">
                                  <div class="barchart-Bar css-bar" style="height: 75%;"></div>
                                   <div class="barchart-BarFooter">
                                    <h3>CSS</h3>
                                   </div>
                                 </div>
                                 <div class="barchart-Col">
                                  <div class="barchart-Bar js-bar" style="height: 75%;"></div>
                                    <div class="barchart-BarFooter">
                                      <h3>JS</h3>
                                    </div>
                                 </div>
                                 <div class="barchart-Col">
                                  <div class="barchart-Bar python-bar" style="height: 75%;"></div>
                                   <div class="barchart-BarFooter">
                                    <h3>PYTHON</h3>
                                   </div>
                                 </div>
                                 <div class="barchart-Col">
                                  <div class="barchart-Bar java-bar" style="height: 75%;"></div>
                                   <div class="barchart-BarFooter">
                                    <h3>JAVA</h3>
                                   </div>
                                 </div>
                                </div>
                               </div>
                              </div>
                            {{-- End Chart --}}


                            <hr style="margin-top: 80px" class="new4" >



 {{-- PAYMENT SLIP PART --}}

 <!-- PAYMENT SLIP PART -->

<!-- PAYMENT SLIP PART -->

<div class="flex" style="margin-top: 20px;">

    <div class="flex gap-2" style="width: 66.666667%;">
        <div style="width: 41.666667%;">
            <div>
                <div>
                    <img src="../images/logo01.png" alt="Logo" class="logo">

                </div>
            </div>

            <div style="margin-top: 20px;">
                <h1 style="font-size: 20px">NOVEL TELECOM</h1>
            </div>
            <div style="margin-top: 10px;">
                <h1 style="font-size: 20px">ABN 76 616 058 130</h1>
            </div>
        </div>

        <div>
            <div style="margin-top: 20px;">
                <h1 style="font-size: 20px">Payment Slip</h1>
            </div>

            <div style="margin-top: 20px;">
                <h1 style="font-size: 20px">Remittance Advice</h1>
            </div>
            <div style="margin-top: 20px;">
                <h1 style="font-size: 20px">Please detach this remittance advice and return to NOVEL Telecom with your cheque or Money Order made payable to:</h1>
            </div>
            <div style="margin-top: 20px;">
                <h1 style="font-size: 20px">NOVEL Telecom</h1>
                <h1 style="font-size: 20px">42 Ross Street</h1>
                <h1 style="font-size: 20px">Dandenong</h1>
                <h1 style="font-size: 20px">VIC 3175</h1>
            </div>

            <div style="margin-top: 20px;">
                <h1 style="font-size: 20px">Please see next page for additional payment methods</h1>
            </div>
        </div>
    </div>

    <div style="flex: 1;">
        <div style="margin-top: 20px;">
            <table class="table">
                <thead style="background-color:#E8710F; color: white;">
                    <tr>
                        <th colspan="2">Summary of Charges</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>NBN BRONZE</th>
                        <td>$54.54</td>
                    </tr>
                    <tr>
                        <th>Novel Tel Sip Basic Monthly Access</th>
                        <td>$9.08</td>
                    </tr>
                    <tr>
                        <th>Mobile Calls</th>
                        <td>$0.55</td>
                    </tr>

                    <th>GST</th>
                    <td>$6.43</td>
                    </tr>
                    <tr>
                        <th>Balance</th>
                        <td>$0.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total New Charges</th>
                        <td>$70.78</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div style="margin-top: 20px;">
            <h1 style="font-size: 20px">If you are on Direct Debit your account will be debited on the due date</h1>
        </div>
    </div>
</div>
{{-- PAYMENT SLIP PART END  --}}


                {{-- PAYMENT Option Page --}}
                <div style="">
                    <div style="display: flex; justify-content: space-between; margin-top: 1.25rem; margin-right: 1.25rem;">
                        <div>
                            <div>
                <img src="../images/logo01.png" alt="Logo" class="logo">
                            </div>
                        </div>
                        <div style="display: flex; gap: 1.25rem;">
                            <div style="font-weight: bold;">
                                <h1 style="font-size: 20px;">Account Number</h1>
                                <h1 style="font-size: 20px;">Issue Date</h1>
                                <h1 style="font-size: 20px;">Invoice Number</h1>
                                <h1 style="font-size: 20px;">Due Date</h1>
                            </div>
                            <div>
                                <h1 style="font-size: 20px;">40017498</h1>
                                <h1 style="font-size: 20px;">4 December 2024</h1>
                                <h1 style="font-size: 20px;">1778996</h1>
                                <h1 style="font-size: 20px;">18 April 2024</h1>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h1 style="font-size: 20px; font-weight: bold;">Payment Options</h1>
                    </div>
                    <div style="display: flex; margin-top: 1.25rem; justify-content: space-between; gap: 1.25rem;">
                        <div style="width: 33.33%;">
                            <h1 style="font-size: 20px; font-weight: bold;">Direct Debit</h1>
                            <p style="font-size: 20px;">To set up automatic payments, please call 1300 317 517</p>
                        </div>
                        <div style="width: 33.33%;">
                            <h1 style="font-size: 20px; font-weight: bold;">Credit Card</h1>
                            <p style="font-size: 20px;">To pay by Credit Card please call 1300 317 517, or go to this link: www.noveltelecom.au/pay</p>
                        </div>
                        <div style="width: 33.33%;">
                            <div>
                                <h1 style="font-size: 20px; font-weight: bold;">EFT</h1>
                            </div>
                            <div style="display: flex;">
                                <div style="font-weight: bold;">
                                    <h1 style="font-size: 20px;">Bank</h1>
                                    <h1 style="font-size: 20px;">BSB</h1>
                                    <h1 style="font-size: 20px;">Account</h1>
                                </div>
                                <div>
                                    <h1 style="font-size: 20px;">ANZ</h1>
                                    <h1 style="font-size: 20px;">013 030</h1>
                                    <h1 style="font-size: 20px;">2246 61713</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 1.25rem; width: 58.33%;">
                        <h1 style="font-size: 20px;">Please note the following surcharges for Direct Debit and Credit Card Payments</h1>
                        <h1 style="font-size: 20px;">2.6% for Visa & Mastercard Payments</h1>
                        <h1 style="font-size: 20px;">4.4% for AMEX and Diners Club Payments</h1>
                    </div>
                    <div style="border: 2px solid #01549A; margin-top: 1.25rem; display: flex; width: 41.67%;">
                        <div></div>
                        <div style="display: flex; margin-top: 0.9375rem; gap: 0.625rem; border: 2px solid #01549A; padding: 0.625rem;">
                            <div style="font-weight: bold;">
                                <h1 style="font-size: 20px; color: #00008b;">Biller Code:</h1>
                                <h1 style="font-size: 20px; color: #00008b;">Ref:</h1>
                            </div>
                            <div>
                                <h1 style="font-size: 20px; font-weight: bold;">267930</h1>
                                <h1 style="font-size: 20px; font-weight: bold;">400174983</h1>
                            </div>
                        </div>
                    </div>
                    <div style="border: 1px solid; height: 10rem; background-color: #f3f4f6; margin-top: 1.25rem;">
                        <p style="font-size: 20px; margin-top: 1.25rem;">If you have any questions or queries regarding your invoice or your services, please contact NOVEL Telecom on 1300 317 517</p>
                    </div>
                </div>
                <div style="border: 2px solid #000;">
                    <h1 style="font-size: 20px; font-weight: bold;">INFORMATION ON PREMIUM SERVICE</h1>
                    <p style="font-size: 20px;">Premium Services (PSMS) generally begin with a 19 number, used for the following, but not limited to; voting lines, ringtones, and sports scores. Charges for these services are higher than standard national SMS rates and can be billed in the following way:</p>
                    <p style="font-size: 20px; margin-top: 1.25rem;">Flat Rate: Flat fixed fee for each SMS sent to and/or received from a premium number or a flat fee per phone call made to the premium service.</p>
                    <p style="font-size: 20px;">- Subscription: Opt into an ongoing subscription with associated charges</p>
                    <p style="font-size: 20px;">-Joining Fees: Charged an additional joining fee as part of an ongoing subscription</p>
                    <p style="font-size: 20px;">-Timed Rate: Premium call is timed and charged at a per minute rate</p>
                    <p style="font-size: 20px;">- Data Volume Charge: Charged according to how many kilobytes (KB) of data downloaded</p>
                    <p style="font-size: 20px;">Should you need to raise a complaint about your Premium Service


                    <h1 style="font-size: 20px; font-weight: bold;">COMPLAINTS</h1>
                    <p style="font-size: 20px;">If you need to make a formal complaint please contact NOVEL TELECOM on 1300 317 517. If you are
                        not satisfied with the
                        resolution of your complaint we can escalate your matter to the next level of management. If we
                        are unable to resolve your
                        complaint you can contact the Telecommunications Industry Ombudsman (TIO) www.tio.com.au. We ask
                        that if you do have a
                        complaint, please give NOVEL TELECOM a chance to resolve your issue before contacting TIO.</p>



                {{-- PAYMENT Option Page --}}




<hr class="new4">






                {{-- Bill Option  --}}

                <div style="">

                    <div style="display: flex; justify-content: space-between; margin-top: 1.25rem; margin-right: 1.25rem;">
                        <div>
                            <div>
                <img src="../images/logo01.png" alt="Logo" class="logo">
                            </div>
                        </div>
                        <div style="display: flex; gap: 1.25rem;">
                            <div style="font-weight: bold;">
                                <h1 style="font-size: 20px;">Account Number</h1>
                                <h1 style="font-size: 20px;">Issue Date</h1>
                                <h1 style="font-size: 20px;">Invoice Number</h1>
                                <h1 style="font-size: 20px;">Due Date</h1>
                            </div>
                            <div>
                                <h1 style="font-size: 20px;">40017498</h1>
                                <h1 style="font-size: 20px;">4 December 2024</h1>
                                <h1 style="font-size: 20px;">1778996</h1>
                                <h1 style="font-size: 20px;">18 April 2024</h1>
                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 4px; ">

                        <div style="display: flex; justify-content: space-around; font-weight: bold; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Summary of Charges</h1>
                            <h1 style="width: 25%; font-size: 20px;">Units</h1>
                            <h1 style="width: 25%; font-size: 20px;">Amount</h1>
                        </div>
                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Usage</h1>
                            <h1 style="width: 25%; font-size: 20px;"></h1>
                            <h1 style="width: 25%; font-size: 20px;"></h1>
                        </div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Local Calls</h1>
                            <h1 style="width: 25%; font-size: 20px;">1</h1>
                            <h1 style="width: 25%; font-size: 20px;">$0.18</h1>
                        </div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Mobile Calls</h1>
                            <h1 style="width: 25%; font-size: 20px;">1</h1>
                            <h1 style="width: 25%; font-size: 20px;">$0.55</h1>
                        </div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;"></h1>
                            <h1 style="width: 25%; font-size: 20px;">SUBTOTAL</h1>
                            <h1 style="width: 25%; font-size: 20px;">$0.73</h1>
                        </div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">SERVICE AND EQUIPMENT</h1>
                            <h1 style="width: 25%; font-size: 20px;"></h1>
                            <h1 style="width: 25%; font-size: 20px;"></h1>
                        </div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">NBN BRONZE</h1>
                            <h1 style="width: 25%; font-size: 20px;">1</h1>
                            <h1 style="width: 25%; font-size: 20px;">$54.54</h1>
                        </div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Novel Tel Sip Basic Monthly Access</h1>
                            <h1 style="width: 25%; font-size: 20px;">1</h1>
                            <h1 style="width: 25%; font-size: 20px;">$9.08</h1>
                        </div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;"></h1>
                            <h1 style="width: 25%; font-size: 20px;">SUBTOTAL</h1>
                            <h1 style="width: 25%; font-size: 20px;">$63.62</h1>
                        </div>

                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Total</h1>
                            <h1 style="width: 25%; font-size: 20px;"></h1>
                            <h1 style="width: 25%; font-size: 20px;">$64.62</h1>
                        </div>

                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>


                        <div style="margin-top: 60px">


                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Payment Received</h1>
                            <h1 style="width: 25%; font-size: 20px;">Date</h1>
                            <h1 style="width: 25%; font-size: 20px;">Amount</h1>
                        </div>

                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Receipt3122987 </h1>
                            <h1 style="width: 25%; font-size: 20px;">18/03/2024 </h1>
                            <h1 style="width: 25%; font-size: 20px;">-$71.13</h1>
                        </div>

                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">Total</h1>
                            <h1 style="width: 25%; font-size: 20px;"></h1>
                            <h1 style="width: 25%; font-size: 20px;">-$71.13
                            </h1>
                        </div>

                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>
                    </div>

                    </div>


                </div>

                {{-- Bill Option  --}}
                <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>

                {{-- Service Details --}}
                <div>

                    <div style="display: flex; justify-content: space-between; margin-top: 1.25rem; margin-right: 1.25rem;">
                        <div>
                            <div>
                <img src="../images/logo01.png" alt="Logo" class="logo">
                            </div>
                        </div>
                        <div style="display: flex; gap: 1.25rem;">
                            <div style="font-weight: bold;">
                                <h1 style="font-size: 20px;">Account Number</h1>
                                <h1 style="font-size: 20px;">Issue Date</h1>
                                <h1 style="font-size: 20px;">Invoice Number</h1>
                                <h1 style="font-size: 20px;">Due Date</h1>
                            </div>
                            <div>
                                <h1 style="font-size: 20px;">40017498</h1>
                                <h1 style="font-size: 20px;">4 December 2024</h1>
                                <h1 style="font-size: 20px;">1778996</h1>
                                <h1 style="font-size: 20px;">18 April 2024</h1>
                            </div>
                        </div>
                    </div>



                    <div>
                        <h1 style="font-size: 20px">Service Details</h1>
                    </div>

                      {{-- Service Table --}}


                    <div>


                    <div>
                        <h1 style="font-size: 20px">Service Number: 03 9794 8429</h1>
                        <h1 style="font-size: 20px">Service & Equipment</h1>
                    </div>



                    <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                        <h1 style="width: 50%; font-size: 20px;">DESCRIPTION</h1>
                        <h1 style="width: 25%; font-size: 20px;">UNIT</h1>
                        <h1 style="width: 25%; font-size: 20px;">$ AMOUNT (ex GST)</h1>
                    </div>

                    <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>


                    <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                        <h1 style="width: 50%; font-size: 20px;">Novel Tel Sip Basic Monthly Access</h1>
                        <h1 style="width: 25%; font-size: 20px;">1</h1>
                        <h1 style="width: 25%; font-size: 20px;">$9.08</h1>
                    </div>

                    <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                        <h1 style="width: 60%; font-size: 20px;"></h1>
                        <h1 style="width: 15%; font-size: 20px;">Total Charges </h1>
                        <h1 style="width: 25%; font-size: 20px;">$9.08</h1>
                    </div>

                    <div>
                        <h1 style="font-size: 20px">Usage</h1>
                    </div>


                    <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                        <h1 style="width: 16.66%; font-size: 20px;">DATE</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">TIME</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">TYPE</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">DESTINATION Number</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">DURATION</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">$ AMOUNT</h1>
                    </div>

                    <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>

                    <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                        <h1 style="width: 16.66%; font-size: 20px;">Mar 13</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">12.53 pm</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">Call to Local</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">039795184</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">0:03:13</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">$0.18</h1>
                    </div>

                    <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                        <h1 style="width: 16.66%; font-size: 20px;">Mar 13</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">12.53 pm</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">Call to Local</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">039795184</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">0:03:13</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">$0.18</h1>
                    </div>


                    <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>



                    <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                        <h1 style="width: 16.66%; font-size: 20px;"></h1>
                        <h1 style="width: 16.66%; font-size: 20px;"></h1>
                        <h1 style="width: 16.66%; font-size: 20px;"></h1>
                        <h1 style="width: 16.66%; font-size: 20px;"></h1>
                        <h1 style="width: 16.66%; font-size: 20px;">Total Usage</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">$0.73</h1>
                    </div>

                    <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                        <h1 style="width: 16.66%; font-size: 20px;"></h1>
                        <h1 style="width: 16.66%; font-size: 20px;"></h1>
                        <h1 style="width: 16.66%; font-size: 20px;"></h1>
                        <h1 style="width: 16.66%; font-size: 20px;"></h1>
                        <h1 style="width: 16.66%; font-size: 20px;">Total for services 0397948429</h1>
                        <h1 style="width: 16.66%; font-size: 20px;">$9.81</h1>
                    </div>

                </div>
                      {{-- Service Table --}}

                    <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>



                      {{-- Service Table --}}


                      <div>


                        <div>
                            <h1 style="font-size: 20px">Service Number: 03 9794 8429</h1>
                            <h1 style="font-size: 20px">Service & Equipment</h1>
                        </div>



                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">DESCRIPTION</h1>
                            <h1 style="width: 25%; font-size: 20px;">UNIT</h1>
                            <h1 style="width: 25%; font-size: 20px;">$ AMOUNT (ex GST)</h1>
                        </div>

                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>


                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 50%; font-size: 20px;">NBN Bronze</h1>
                            <h1 style="width: 25%; font-size: 20px;">1</h1>
                            <h1 style="width: 25%; font-size: 20px;">$54.54</h1>
                        </div>

                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 60%; font-size: 20px;"></h1>
                            <h1 style="width: 15%; font-size: 20px;">Total Charges </h1>
                            <h1 style="width: 25%; font-size: 20px;">$54.54</h1>
                        </div>

                        {{-- <div>
                            <h1 style="font-size: 20px">Usage</h1>
                        </div> --}}


                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 16.66%; font-size: 20px;">DATE</h1>
                            <h1 style="width: 16.66%; font-size: 20px;">TIME</h1>
                            <h1 style="width: 16.66%; font-size: 20px;">TYPE</h1>
                            <h1 style="width: 16.66%; font-size: 20px;">DESTINATION Number</h1>
                            <h1 style="width: 16.66%; font-size: 20px;">DURATION</h1>
                            <h1 style="width: 16.66%; font-size: 20px;">$ AMOUNT</h1>
                        </div>

                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>



                        <div>
                            <h1 style="font-size: 20px">No Itemised Calls for 108016</h1>
                        </div>



                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 16.66%; font-size: 20px;"></h1>
                            <h1 style="width: 16.66%; font-size: 20px;"></h1>
                            <h1 style="width: 16.66%; font-size: 20px;"></h1>
                            <h1 style="width: 16.66%; font-size: 20px;"></h1>
                            <h1 style="width: 16.66%; font-size: 20px;">Total for services 108016</h1>
                            <h1 style="width: 16.66%; font-size: 20px;">$9.81</h1>
                        </div>


                        <div style="border-bottom: 2px solid black; width: 100%; margin-top: 1px; margin: 0 2px;"></div>


                        <div style="display: flex; justify-content: space-around; margin: 0 2px;">
                            <h1 style="width: 16.66%; font-size: 20px;">TOTAL</h1>
                            <h1 style="width: 16.66%; font-size: 20px;"></h1>
                            <h1 style="width: 16.66%; font-size: 20px;"></h1>
                            <h1 style="width: 16.66%; font-size: 20px;"></h1>
                            <h1 style="width: 16.66%; font-size: 20px;"></h1>
                            <h1 style="width: 16.66%; font-size: 20px;">$64.35</h1>
                        </div>




                    </div>
                          {{-- Service Table --}}



                </div>

                {{-- Service Details  --}}



    </div>
</body>

</html>
