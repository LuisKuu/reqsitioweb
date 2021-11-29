<template>
    <div class="container" style="margin-top:8px;background:white;padding:10px;border-radius:8px;">
        <div class="row">
            <div class="col">
            <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Name:</label>
                <input type="text" class="form-control" id="formGroupExampleInput" v-model="name"  
                v-bind:class="{'form-control':true, 'is-invalid' : !valide(name) && nameBlured}"
                v-on:blur="nameBlured = true" 
                placeholder="Name" required>
                <div class="invalid-feedback">A valid name is required</div> 
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Email:</label>
                <input type="email" class="form-control" id="formGroupExampleInput2"
                v-bind:class="{'form-control':true, 'is-invalid' : !validEmail(email) && emailBlured}"
                v-on:blur="emailBlured = true" 
                v-model="email" placeholder="Email" required>
                <div class="invalid-feedback">A valid email is required</div> 
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput3">Tel:</label>
                <input type="number" class="form-control" id="formGroupExampleInput3" v-model="tel"  
                v-bind:class="{'form-control':true, 'is-invalid' : !valide(tel) && telBlured}"
                v-on:blur="telBlured = true" 
                placeholder="Tel" required>
                <div class="invalid-feedback">A valid Tel is required</div> 
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput4">Message:</label>
                <textarea class="form-control" id="formGroupExampleInput4" v-model="message"  
                v-bind:class="{'form-control':true, 'is-invalid' : !valide(message) && messageBlured}"
                v-on:blur="messageBlured = true" 
                placeholder="Message" required></textarea>
                <div class="invalid-feedback">A valid message is required</div> 
            </div>
            <button type="button" class="btn btn-primary" v-on:click="sendEmail">Send</button>
            </form>
        </div>
        <div class="col">
            <h2 style="text-align:center;background: #F4DD61;border-radius:8px;">Contact Us!</h2>
            <div>
            <img style="width:100%" src="https://imgd.aeplcdn.com/0x0/n/cw/ec/56265/f-pace-exterior-right-front-three-quarter-2.jpeg">
            </div>
            <p style="text-align:center;background: #F4DD61;padding:3px;border-radius:8px;">Almost all quality improvement comes via simplification of design manufacturing...</p>
        </div>
        </div>
    </div>
</template>

<script>
    
    export default {
        name: 'ContactUs',
        data() {
            return {
            name: '',
            email: '',
            tel: '',
            message: '', 
            emailBlured : false,
            valid : false, 
            submitted : false,
            emailBlured :  false,
            telBlured :  false,
            messageBlured :  false,
            nameBlured :  false
            }
        },
        methods: {
            validate : function(){
                this.emailBlured = true;
                this.telBlured = true;
                this.messageBlured = true;
                this.nameBlured = true;
                if( this.validEmail(this.email) && this.valide(this.tel) && this.valide(this.message) && this.valide(this.name)){
                    this.valid = true;
                }
            },
            validEmail : function(email) {
                var re = /(.+)@(.+){2,}\.(.+){2,}/;
                return re.test(email.toLowerCase());
            },
            valide : function(v) {
                return v.length > 0;
            },
            sendEmail(e) {
                this.validate();     
                if(this.valid){
                    try {
                        this.postData('api/send-email', {
                            name: this.name,
                            email: this.email,
                            tel: this.tel,
                            message: this.message
                        })
                        .then(data => {
                            // Reset form field
                            this.name = ''
                            this.email = ''
                            this.tel = ''
                            this.message = ''
                            this.emailBlured = false;
                            this.telBlured = false;
                            this.messageBlured = false;
                            this.nameBlured = false;
                            alert(data)
                            console.log(data); // JSON data parsed by `data.json()` call
                        });
                        console.log( {
                        name: this.name,
                        email: this.email,
                        message: this.message
                        })

                    } catch(error) {
                        console.log({error})
                    }
                }
            },
            // Ejemplo implementando el metodo POST:
            async postData(url = '', data = {}) {
                // Opciones por defecto estan marcadas con un *
                const response = await fetch(url, {
                    method: 'POST', // *GET, POST, PUT, DELETE, etc.
                    mode: 'cors', // no-cors, *cors, same-origin
                    cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                    credentials: 'same-origin', // include, *same-origin, omit
                    headers: {
                    'Content-Type': 'application/json'
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    redirect: 'follow', // manual, *follow, error
                    referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
                    body: JSON.stringify(data) // body data type must match "Content-Type" header
                });
                return response.text(); // parses JSON response into native JavaScript objects
            },
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
