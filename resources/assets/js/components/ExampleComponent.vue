<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <!--I'm an example component.-->
                        <div id="app">
                             <p>{{ message }}</p>
                             <p>{{ message1 }}</p>
                            <button v-on:click="reverseMessage">Reverse Message</button>
                            <button v-on:click="reverseMessage1">Reverse Message1</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
         data: function () {
            return {
                 message: 'Hello Vue.js!',
                 message1: 'Hello Vue1.js!',
            }
        },methods: {
            reverseMessage: function () {
                this.message = this.message.split('').reverse().join('')
            },
            reverseMessage1: function () {
                this.message1 = this.message1.split('').reverse().join('')
            }
        }
        /*mounted() {
            console.log('Component mounted.')
        }*/
    }
</script>
