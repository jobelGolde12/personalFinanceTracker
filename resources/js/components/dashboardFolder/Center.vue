<template>
<div>
    <div class="center-header container-fluid d-flex justify-content-between align-items-center">
        <div class="container pt-3">
            <p class="text-dark fw-light mb-0 pb-0">Good day, <span class="">{{ userData.username }}</span></p>
            <h5 class="text-dark mt-0 pt-0">Your daily update</h5>
        </div>

        <div class="container pt-3 d-flex align-items-center justify-content-end">
            <!-- <div><router-link to="#" class="btn btn-success me-5">Click</router-link></div> -->
            <div><i class="bi bi-sun fs-4 ms-5 me-4 lg:ps-5 lg:ms-5 xl:ps-5"></i></div>
            <div><i class="bi bi-list fs-4"></i></div>
        </div>
    </div>

    <div class="center-body mt-3">
        <div class="card card1 d-flex flex-row bg-light border-none gap-3 p-2 rounded ms-2 me-2">
            <div class="container">
                <h5 class="text-dark fw-light mb-0 pb-0">Networth</h5>
                <p class="text-dark fw-lighter">Your current networth for 3 month's </p>
                <button class="btn btn-light ps-3 pe-3">Click</button>
            </div>

            <div class="container container">
                <canvas id="myDoughnutChart"></canvas>
            </div>
        </div>

        <div class="container mt-3">
            <h5 class="text-dark fw-lighter">Recent Transactions Table</h5>
        </div>

        <div class="main-container mt-3" style="max-height: 10%;">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="data in resentTransactionsData" :key="data.id">
                        <td class="pt-3">{{ data.date }}</td>
                        <td class="pt-3">{{ data.category }}</td>
                        <td class="pt-3">{{ data.description }}</td>
                        <td class="pt-3">{{ data.amount }}</td>
                        <td class="pt-3">{{ data.type }}</td>
                        <td><button class="button-action">View</button></td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
</div>
</template>

<script>
export default {
    name: 'center',
    data() {
        return {
            userData: {
                username: 'Jobel v. Golde',

            },
            resentTransactionsData: [{
                    "id": 1,
                    "date": "2024-06-22",
                    "category": "Food",
                    "description": "Groceries",
                    "amount": 75.50,
                    "type": "Expense"
                },
                {
                    "id": 2,
                    "date": "2024-06-21",
                    "category": "Income",
                    "description": "Salary Payment",
                    "amount": 2500.00,
                    "type": "Income"
                },
                {
                    "id": 3,
                    "date": "2024-06-20",
                    "category": "Utilities",
                    "description": "Electricity Bill",
                    "amount": 120.75,
                    "type": "Expense"
                },
                {
                    "id": 3,
                    "date": "2024-06-19",
                    "category": "Entertainment",
                    "description": "Dining Out",
                    "amount": 45.30,
                    "type": "Expense"
                },
                {
                    "id": 4,
                    "date": "2024-06-18",
                    "category": "Health",
                    "description": "Gym Membership",
                    "amount": 60.00,
                    "type": "Expense"
                },
                {
                    "id": 5,
                    "date": "2024-06-17",
                    "category": "Income",
                    "description": "Freelance Project",
                    "amount": 500.00,
                    "type": "Income"
                },
                {
                    "id": 6,
                    "date": "2024-06-16",
                    "category": "Entertainment",
                    "description": "Netflix Subscription",
                    "amount": 15.99,
                    "type": "Expense"
                },
                {
                    "id": 8,
                    "date": "2024-06-15",
                    "category": "Transportation",
                    "description": "Public Transport",
                    "amount": 30.00,
                    "type": "Expense"
                },
                {
                    "id": 9,
                    "date": "2024-06-14",
                    "category": "Housing",
                    "description": "Home Rent",
                    "amount": 1200.00,
                    "type": "Expense"
                },
                {
                    "id": 10,
                    "date": "2024-06-13",
                    "category": "Income",
                    "description": "Investment Dividend",
                    "amount": 100.00,
                    "type": "Income"
                }
            ]

        }
    },
    methods: {
        getNetworthChart() {
            const data = {
                labels: ['Red', 'Blue', 'Yellow'],
                datasets: [{
                    label: 'My First Dataset',
                    data: [300, 50, 100],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            };

            // Configuration
            const config = {
                type: 'doughnut',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function (tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2);
                                }
                            }
                        }
                    }
                },
            };

            // Create the chart
            var myChart = new Chart(
                document.getElementById('myDoughnutChart'),
                config
            );
        }
    },
    mounted(){
        this.getNetworthChart()
    }
}
</script>

<style scoped>
@import '../../../css/dashboardCss/center.css';
</style>
