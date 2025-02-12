<div>
    <div class="bg-gray-100 p-6">
        <div class="max-w-full p-2">
            <!-- Header -->


            <!-- Welcome Section -->


            <!-- Stats Cards -->
            <div class="grid grid-cols-4 gap-6 mb-6">
                <!-- Span two columns -->
                <div class="bg-white p-6 rounded-lg shadow-md border border-yellow-600 col-span-2">
                    <h2 class="text-xl font-bold">Welcome, Johnson</h2>
                    <p class="text-gray-600">An Overall Dashboard for Security Controls Assurance - Rwanda Government Organisations</p>
                </div>

                <!-- Each in one column -->
                <div class="bg-yellow-400 p-6 rounded-lg shadow-md  border text-white text-center font-bold text-lg">Total Organisations <br> <span class="text-3xl">110</span></div>
                <div class="bg-yellow-400 p-6 rounded-lg shadow-md border text-white text-center font-bold text-lg">Total Controls <br> <span class="text-3xl">56</span></div>
            </div>


            <!-- Chart and Lists -->
            <div class="grid grid-cols-3 gap-6 mb-6">
                <div class="bg-white p-6 rounded-lg shadow-md">

                    <div id="loanApplicationsChart1" class="bg-gray-100   mt-6 overflow-hidden" style="height: 350px; width: 100%;">

                    </div>


                </div>


                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold mb-2">Top 10 Non-Compliant Organizations <span class="bg-orange-500 text-white px-2 py-1 rounded text-xs">Today</span></h3>
                    <hr class="mt-2 mb-4 ">
                    <table class="w-full text-left">
                        <tr><th>Name</th><th>Failure Rate</th><th>Position</th></tr>
                        <tr><td>Organization A</td><td class="text-red-500 mt-2">80%</td><td>01</td></tr>
                        <tr><td>Organization B</td><td class="text-red-500 mt-2">77%</td><td>02</td></tr>
                        <tr><td>Organization C</td><td class="text-red-500 mt-2">71%</td><td>03</td></tr>
                        <tr><td>Organization D</td><td class="text-red-500 mt-2">68%</td><td>04</td></tr>
                        <tr><td>Organization E</td><td class="text-red-500 mt-2">60%</td><td>05</td></tr>
                    </table>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="font-bold mb-2">Top 10 Leading Failed Controls <span class="bg-orange-500 text-white px-2 py-1 rounded text-xs">Today</span></h3>
                    <hr class="mt-2 mb-4 ">
                    <table class="w-full text-left">
                        <tr><th>Control Name</th><th>Scores</th><th>Priority</th></tr>
                        <tr><td>Asset Management</td><td>70/110</td><td class="text-red-500">High</td></tr>
                        <tr><td>Organization Context</td><td>64/110</td><td class="text-red-500">High</td></tr>
                        <tr><td>Security Awareness</td><td>60/110</td><td class="text-orange-500">Medium</td></tr>
                        <tr><td>Vulnerability Management</td><td>80/110</td><td class="text-red-500">High</td></tr>
                    </table>
                </div>
            </div>

            <!-- Activities Section -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-bold mb-2">Activities</h3>
                <table class="w-full text-left">
                    <tr class="border-b">
                        <th>ID</th><th>Activity</th><th>Description</th>
                    </tr>
                    <tr>
                        <td>BR001</td>
                        <td>Manual approval from Organization A</td>
                        <td>This action requires manual approval. Please review the relevant details and provide authorization to proceed.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            chart: {
                type: 'donut',
                height: 300,
                width: '100%'
            },

            series: [
                {{ $loan_summary['disbursed'] }},
                {{ $loan_summary['Onprogress'] }},
                {{ $loan_summary['Offered'] }},
            ],

            labels: [
                'Non-Compliant',
                'Not Started',
                'Fully Compliant',
            ],

            colors: [
                '#F2CA31', // Yellow
                '#3E9EDA',  // Blue
                '#2B5D3C',  // Green
            ],

            plotOptions: {
                pie: {
                    donut: {
                        size: '40%'  // Increase thickness
                    }
                }
            },

            legend: {
                position: 'bottom',  // Move labels to bottom
                horizontalAlign: 'center'
            },

            title: {
                text: ''
            }
        };

        var chart = new ApexCharts(document.querySelector("#loanApplicationsChart1"), options);
        chart.render();
    </script>




</div>
