<template>
    <div id="app" class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">User 2, Auth error</div>

                    <div class="panel-body">
                        <h3>User:</h3>
                        <span v-for="(value, key) in user"><strong>{{ key }}:</strong> {{ value }}<br/></span>
                        <h3>Header:</h3>
                        <span v-for="(value, key) in headers"><strong>{{ key }}:</strong> {{ value }}<br/></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                headers: null,
                user : null
            }
        },
        mounted() {
            console.log('Component mounted.');
            // TODO header axios gitpage
            axios.get('api/user').then( response => {
                this.user = response.data;
                this.headers = response.headers;
                console.log('done');
            }).catch( error => {
                console.log('No')
            });
        }
    };
</script>
