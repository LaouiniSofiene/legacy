<template>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between pb-2 mb-2">
                <h5 class="card-title" style="font-size: 40px;">All Subscribers Data</h5>
                <div style="float: right;">
                    <button class="btn btn-success" type="button" @click="downloadExcel(subscribers)">Download Excel</button>
                </div>
            </div>
            
            <table class="table table-hover table-sm">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="50" class="text-center">#</th>
                        <th>Email</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(subscriber, index) in subscribers" :key="subscriber.id">
                        <td class="text-center">{{index+1}}.</td>
                        <td>{{subscriber.email}}</td>
                        <td>{{subscriber.created_at}}</td>
                    </tr>
                </tbody>
            </table>
    
    
        </div>
    </div>
    
    
    </template>
    
    <script>
        import exportFromJSON from "export-from-json";

        export default {
            data() {
                return {
                    subscribers: []
                }
            },
            created() {
                this.$axios.get('/sanctum/csrf-cookie').then(response => {
                    this.$axios.get('/api/subscribers')
                    .then(response => {
                        this.subscribers = response.data;
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                });
            },
            beforeRouteEnter(to, from, next) {
                if (!window.Laravel.isLoggedin) {
                    window.location.href = "/admin";
                }
                next();
            },
            methods:{
                downloadExcel(data) {

                    // const rows = data;
                    // const keys = Object.keys(rows[0]);

                    // // Create an array with column headers
                    // const header = keys.join(',') + '\n';

                    // // Create an array with data rows
                    // const csvRows = rows.map(row => {
                    // return keys.map(key => {
                    //     return row[key];
                    // }).join(',') + '\n';
                    // }).join('');

                    // // Combine header and data rows into CSV string
                    // const csv = header + csvRows;

                    // // Initiate file download
                    // const blob = new Blob([csv], { type: 'text/csv' });
                    // const url = URL.createObjectURL(blob);
                    // const link = document.createElement('a');
                    // link.setAttribute('href', url);
                    // link.setAttribute('download', 'data.csv');
                    // link.click();

                    const fileName = "np-data";
                    const exportType = exportFromJSON.types.csv;

                    if (data) exportFromJSON({ data, fileName, exportType });

                }
            }
        }
    
    </script>