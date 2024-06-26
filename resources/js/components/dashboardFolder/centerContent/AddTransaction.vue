<template>
    <div>
        <div class="container add-transaction-header p-3">
            <h3 class="text-dark fw-light">Add transaction </h3>
        </div>

        <div class="container-fluid ">
            <form action="#" class="form">
                <div class="mb-2">
                    <label for="date" class="text-dark mb-1">Date</label>
                    <input type="date" class="form-control" id="date" v-model="transactionData.date">
                </div>

                <div class="mb-2">
                    <label for="category" class="text-dark mb-1">Category</label>
                    <input type="text" class="form-control" id="category" v-model="transactionData.category">
                </div>

                <div class="mb-2">
                    <label for="description" class="text-dark mb-1">Description</label>
                    <input type="text" class="form-control" id="description" v-model="transactionData.description">
                </div>

                <div class="mb-2">
                    <label for="amount" class="text-dark mb-1">Amount</label>
                    <input type="number" class="form-control" id="amount" v-model="transactionData.amount">
                </div>

                <div class="mb-2">
                    <label for="type" class="text-dark mb-1">Type</label>
                    <input type="text" class="form-control" id="type" v-model="transactionData.type">
                </div>

                <button class="btn btn-success mt-2 me-3" type="submit">Add to transaction</button>
                <router-link class="btn btn-outline-success mt-2" to="/dashboard/">Back</router-link>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    name: 'AddTransaction',
    data(){
        return{
            transactionData: {
                date: '',
                category: '',
                description: '',
                amount: '',
                type: ''
            }
        }
    }
}
</script>