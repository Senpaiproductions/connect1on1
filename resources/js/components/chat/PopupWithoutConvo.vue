<template>
<div class="msg_box" style="right: 20px">
    <div class="msg_head" style="background: rgb(255, 52, 131)">
        <a href="#">
            <img :src="user.photo_url" class="img-circle img-responsive">
        </a>
            
        <span class="u_name">{{ user.name }}</span>
            
        <div class="close" @click="close">x</div> 
    </div>
    
    <div class="msg_wrap">
        <div class="msg_body" id="msg_body">
            <div v-if="loading" class="col-md-12" style="text-align: center; margin-top: 70px;">
                <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
                <span style="text-align: center;white-space: nowrap;font-size: 16px;font-weight: 600;">{{ loadingMessage }}</span>
            </div>
            <div v-if="messages.length > 0" class="msg_push">
                <div v-for="message in messages" :key="message.id"  :class="message.user_id === user.id ? 'msg-right' : 'msg-left'">
                    {{ message.body }}
                </div>
            </div>
            <div v-else>
                <span style="text-align: center;white-space: nowrap;font-size: 16px;font-weight: 600;">No messages!</span>
            </div>
        </div>
            
        <div class="msg_footer text-block">
            <input v-model="newMessage" @keydown="isTyping" @keyup.enter="sendMessage" type="text" placeholder="Type and hit enter" class="msg_input form-control">
            <span class="field-error">{{ String(errors.message) }}</span>
            <!--<i v-if="typingUser != null" v-show="typing"> {{ typingUser }} is typing...</i>-->
                
            <button class="send-msg-btn btn btn-success" :disabled="emptyMessage" @click.prevent="sendMessage" style="border: 0; top: 5px">
                <i class="fa fa-paper-plane"></i>
            </button>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: ['authuser', 'user'],

    data() {
        return {
            loading: true,
            loadingMessage: "",

            typing: false,
            typingUser: null,

            messages: [],
            newMessage: "",

            errors: {
                message: ""
            }
        }
    },

    computed: {
        emptyMessage() {
            return this.newMessage == ""
        }
    },

    created() {
        this.getMessages(this.user.id)
    },

    methods: {
        getMessages(user_id) {
            let _this = this;

            this.loading = true;
            this.loadingMessage = "fetching messages...";

            let url = `/mini-messages-without-convo/${user_id}`;

            axios.get(url)
            .then(response => {
                if(response.data.messages != null) {
                    this.messages = response.data.messages;
                }

                this.loading = false;
                this.loadingMessage = "";

                setTimeout(function () {
                    var msg_body = this.$el.querySelector("#msg_body");
                    msg_body.scrollTop = msg_body.scrollHeight;
                }, 200);
            });

            Echo.private('chat')
            .listen('MessageSent', (e) => {
                console.log(e);

                this.messages.push({
                    id: e.message.id,
                    user_id: e.message.user_id,
                    user: e.message.user,
                    body: e.message.body,
                    created_at: e.message.created_at
                });

                setTimeout(function () {
                    var msg_body = this.$el.querySelector("#msg_body");
                    msg_body.scrollTop = msg_body.scrollHeight;
                }, 200);
            })
            .listenForWhisper('typing', (e) => {
                this.typingUser = e.typingUser;
                this.typing = e.typing;

                // remove is typing indicator after 0.9s
                setTimeout(function() {
                    _this.typing = false
                }, 900);
            });
        },

        isTyping() {
            let channel = Echo.private('chat');
            let self = this;

            setTimeout(function() {
                channel.whisper('typing', {
                    typingUser: self.user.name,
                    typing: true
                });
            }, 300);
        },

        notTyping() {
            this.typing = false;
        },

        sendMessage() {
            if (this.user == null) {
                return
            }

            if (this.newMessage == "") {
                return;
            }

            let user_id = this.user.id;
            let message = this.newMessage;
            let url = `/send-message/${user_id}`;

            axios.post(url, {  user_id: user_id, message: message })
            .then(response => {
                this.messages.push(response.data.message);
                this.newMessage = "";

                setTimeout(function () {
                    var msg_body = this.$el.querySelector("#msg_body");
                    msg_body.scrollTop = msg_body.scrollHeight;
                }, 200);
            })
            .catch(error => {
                error.response.data.error.message ? (this.errors.message = error.response.data.error.message) : null
            });
        },

        close() {
            this.$emit('remove', this.user);
        }
    }
}
</script>

<style>
input[type="text"]:disabled, button:disabled {
    cursor: not-allowed! important; 
}

.msg_box{
    float: right;
    position: relative;
    right: 0;
    margin-left: 5px;
    pointer-events: auto;
}
</style>