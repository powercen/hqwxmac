<template>
    <div class="login-container">
        <div class="card shadow">
            <h5 class="text-center pt-2">登录系统</h5>
            <div class="card-body">
                <form @submit.prevent="submit">
                    <div class="form-group">
                        <input v-model.trim="enumber" type="text" class="form-control" placeholder="员工编号" name="enumber">
                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                    </div>
                    <div class="form-group">
                        <input v-model.trim="password" type="password" class="form-control" placeholder="身份证号码后6位" name="password">
                    </div>
                    <button v-if="!canSubmit" type="submit" class="btn btn-primary btn-block" disabled>登录</button>
                    <button v-else type="submit" class="btn btn-primary btn-block">登录</button>
                </form>
            </div>
        </div>
    </div>
</template>

<style lang="scss">
    body {
        background-image: url("/images/bg.jpg");
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .login-container {
        position: absolute;
        max-width: 70%;
        margin: 0 auto;
        left:0;
        right: 0;
        bottom: 32%;
    }

</style>
<script>
    export  default {
        data() {
            return {
                enumber: '',
                password: ''
            }
        },

        methods: {
            submit() {
               axios.post('/api/authorizations', {'enumber': this.enumber, 'password': this.password}).then(response => {
                   console.log(response.data)
               });
               
            }
        },

        computed: {
            canSubmit() {
                return (this.enumber.length > 0 && this.password.length > 0)
            }

        }

    }
</script>