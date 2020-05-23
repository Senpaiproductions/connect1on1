<template>
<div class="container layout">
    <!-- content -->
    <div class="content">
        <div class="chat">
            <Modals :user="authuser" :otherUser="otheruser" />

            <div class="chat-header">
                <div class="chat-header-user">
                    <figure class="avatar">
                        <img :src="otheruser.photo_url" class="rounded-circle" :alt="otheruser.name">
                    </figure>
                    
                    <div>
                        <h5>{{ otheruser.name }}</h5>
                
                        <small class="text-success">
                            <i v-if="typingUser != null" v-show="typing"> {{ typingUser }} is typing...</i>
                        </small>
                    </div>
                </div>
                
                <div class="chat-header-action">
                    <ul class="list-inline">
                        <!--<li class="list-inline-item d-xl-none d-inline">
                            <button class="btn btn-outline-light mobile-navigation-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                            </button>
                        </li>-->
                        
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Voice call">
                            <button class="btn btn-outline-light text-success" data-toggle="modal" data-target="#call">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </button>
                        </li>
                        
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Video call">
                            <button @click="requestVideoCall()" :disabled="conversation == null || conversation.length == 0" class="btn btn-outline-light text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                            </button>
                        </li>

                        <li class="list-inline-item">
                            <button @click="changeBackground()" data-toggle="tooltip" data-placement="right" class="btn btn-outline-light text-danger dark-light-switcher">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>


            <div v-show="videoCalling" class="container video" style="background: rgba(21, 20, 20, 0.61); overflow:auto">  
                <div class="row">
                    <div class="col-lg-12 text-right" style="right: 0;margin-bottom: 20px; margin-top: 20px;">
                        <video width="100" class="img-responsive" autoplay id='localVideo' muted></video>
                    </div>
                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="card" tabindex="-1">
                            <!--Body-->
                            <div class="card-body mb-0 p-0">
                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <video width="100" class="img-responsive" autoplay id='remoteVideo'></video>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 text-center" style="right: 0;margin-bottom: 20px; margin-top: 20px;">
                            <div class="action-button">
                                <button @click="endVideoCall" type="button" class="btn btn-danger btn-floating btn-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div v-show="!videoCalling" id="chatbody" class="chatbody" :class="{ 'no-message': 'noChatSelected' }" style="overflow: auto; outline: currentcolor none medium;" tabindex="1"> <!-- .no-message -->
                <div v-if="messages.length == 0" class="no-message-container">
                    <div class="row mb-5">
                        <div class="col-md-6 offset-md-3 col-sm-6 offset-sm-3 col-6 offset-3">
                            <img src="/images/dashboard/undraw_empty_xct9.svg" class="img-fluid" alt="image">
                        </div>
                    </div>
                    <p class="lead">No messages here</p>
                </div>

                <div v-if="loading" class="col-md-12" style="text-align: center; margin-top: 70px;">
                    <span class="spinner-border spinner-border-lg" role="status" aria-hidden="true"></span>
                    <span style="text-align: center;white-space: nowrap;font-size: 16px;font-weight: 100;">{{ loadingMessage }}</span>
                </div>
                
                
                <div v-else class="messages">
                    <div v-if="messages.length > 0" v-for="message in messages" :key="message.id" class="message-item" :class="{ 'outgoing-message': message.user_id === authuser.id }">
                        <div class="message-avatar">
                            <figure class="avatar">
                                <img :src="message.user.photo_url" class="rounded-circle" :alt="message.user.name">
                            </figure>
                            
                            <div>
                                <h5>{{ message.user.name }}</h5>

                                <div class="time">
                                    <timeago :datetime="message.created_at" :auto-update="60"></timeago>
                                    <!--<i class="ti-double-check text-info"></i>-->
                                </div>
                            </div>
                        </div>
                        
                        <div class="message-content">
                            {{ message.body }}
                        </div>
                    </div>
                    
                    <!--<div class="message-item messages-divider sticky-top" data-label="Today"></div>-->
                    <div class="mb-10"></div>
                            
                </div>
            </div>

            <div v-show="videoCalling == false" class="chat-footer">
                <form>
                    <div>
                        <button class="btn btn-light mr-3" data-toggle="tooltip" title="" type="button" data-original-title="Emoji">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                        </button>
                    </div>
                    
                    <input type="text" class="form-control" @keydown="isTyping" @keyup.enter="sendMessage" v-model="newMessage" placeholder="Type your message...">
                    <span class="field-error">{{ String(errors.message) }}</span>

                    <div class="form-buttons">
                        <button class="btn btn-light" data-toggle="tooltip" title="" type="button" data-original-title="Add files">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                        </button>
                        <button class="btn btn-light d-sm-none d-block" data-toggle="tooltip" title="" type="button" data-original-title="Send a voice record">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mic"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" y1="19" x2="12" y2="23"></line><line x1="8" y1="23" x2="16" y2="23"></line></svg>
                        </button>
                        <button class="btn btn-primary" type="button" :disabled="emptyMessage" @click.prevent="sendMessage">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- video call modal -->
    <div data-backdrop="static" data-keyboard="false" class="modal call fade" id="videoCall" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="call">
                        <div>
                            <figure class="mb-4 avatar avatar-xl">
                                <img :src="otheruser.photo_url" class="rounded-circle" alt="image">
                            </figure>
                            <h4>
                                <span class="text-success">Contacting </span> {{ otheruser.name }}
                            </h4>
                            
                            <div class="col-md-4 offset-md-5 text-center" style="margin-top: 30px;">
                                <rotate-square5 class="video__spinner"></rotate-square5>
                            </div>
                            
                            <div class="action-button">
                                <button @click="stopVideoCall" type="button" class="btn btn-danger btn-floating btn-lg" data-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                                <!--<button type="button" class="btn btn-success btn-pulse btn-floating btn-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                </button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ video call modal -->

    <!-- video answer modal -->
    <div data-backdrop="static" data-keyboard="false" class="modal call fade" id="videoAnswer" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="call">
                        <div>
                            <figure class="mb-4 avatar avatar-xl">
                                <img :src="otheruser.photo_url" class="rounded-circle" alt="image">
                            </figure>
                            <h4>
                                {{ otheruser.name }} is requesting a <span class="text-success">Video Call </span>
                            </h4>
                            
                            <div class="col-md-4 offset-md-5 text-center" style="margin-top: 30px;">
                                <rotate-square5 class="video__spinner"></rotate-square5>
                            </div>
                            
                            <div class="action-button">
                                <button @click="stopVideoCall" type="button" class="btn btn-danger btn-floating btn-lg" data-dismiss="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                                <button @click="answerCall" type="button" class="btn btn-success btn-pulse btn-floating btn-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./ video call modal -->
</div>
</template>

<script>
import Modals from './modals/Modals';
import { RotateSquare5 } from "vue-loading-spinner";
import { servers } from './utils/ICEServers';
import { log } from "./utils/logging";

export default {
    props: ['authuser', 'otheruser', 'conversation'],

    components: {
        Modals,
        RotateSquare5
    },
      
    data() {
        return {
            loading: false,
            loadingMessage: "",

            messages: [],
            newMessage: "",
            
            typing: false,
            typingUser: null,

            videoCalling: false,
            isCaller: false,
        
            // videos
            myVideo: {},
            remoteVideo: {},

            //offer received from person who requested video call
            offer: null,

            //peerConnectionDidCreate
            peerConnectionDidCreate: false,

            // Media config
            constraints: {
                audio: {
                    echoCancellation: true,
                    noiseSuppression: true, 
                    autoGainControl: false
                },
                video: { 
                    width: 1080, 
                    height: 720 
                }
            },

            // local & remote video stream
            localStream: undefined,
            remoteStream: undefined,
            // STUN ice servers
            configuration: servers,

            // Peer connection
            pc: undefined,
            // Offer config
            offerOptions: {
                offerToReceiveAudio: 1,
                offerToReceiveVideo: 1
            },

            errors: {
                message: "",
            }
        };
    },

    computed: {
        emptyMessage() {
            return this.newMessage == ""
        }
    },

    async mounted() {
        this.getMessages(this.otheruser.id);
        this.initializeVideo(this.conversation);
    },
    
    methods: {
        changeBackground() {
            var body = document.getElementsByTagName("BODY")[0];
            
            if (body.classList.contains("dark")) {
                axios.post('change-background', {  background: 'light'})
            } else if (body.classList.contains("light")) {
                axios.post('change-background', {  background: 'dark'})
            } else {
                return
            }
        },

        async getMessages(user_id) {
            let _this = this;

            this.loading = true;
            this.loadingMessage = "fetching messages...";

            let url = `/messages/${user_id}`;

            var chat_body = this.$el.querySelector("#chatbody");

            axios.get(url)
            .then(response => {
                if(response.data.messages != null) {
                    this.messages = response.data.messages;
                }

                this.loading = false;
                this.loadingMessage = "";

                setTimeout(function () {
                    chat_body.scrollTop = chat_body.scrollHeight;
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
                    chat_body.scrollTop = chat_body.scrollHeight;
                }, 200);
            })
            .listenForWhisper('typing', (e) => {
                this.typingUser = e.typingUser;
                this.typing = e.typing;

                // remove is typing indicator after 0.9s
                setTimeout(function() {
                    _this.typing = false
                }, 9000);
            });
        },

        isTyping() {
            let channel = Echo.private('chat');
            let self = this;

            setTimeout(function() {
                channel.whisper('typing', {
                    typingUser: self.authuser.name,
                    typing: true
                });
            }, 3000);
        },

        notTyping() {
            this.typing = false;
        },

        sendMessage() {
            if (this.otheruser == null) {
                return
            }

            if (this.newMessage == "") {
                return;
            }

            let user_id = this.otheruser.id;
            let message = this.newMessage;
            let url = `/send-message/${user_id}`;

            axios.post(url, {  user_id: user_id, message: message })
            .then(response => {
                this.messages.push(response.data.message);
                this.newMessage = "";

                var chat_body = this.$el.querySelector("#chatbody");

                setTimeout(function () {
                    var msg_body = this.$el.querySelector("#msg_body");
                    msg_body.scrollTop = msg_body.scrollHeight;
                }, 200);
            })
            .catch(error => {
                error.response.data.error.message ? (this.errors.message = error.response.data.error.message) : null
            });
        },

        async initializeVideo(conversation) {
            if (conversation != null) {
                Echo.private('video.' + conversation.id)
                .listen('VideoChatStart', (data) => {
                    if(data.to != this.authuser.id){
                        return;
                    }

                    if(data.type === 'signal') {
                        this.onSignalMessage(data);
                    } else if(data.type === 'text') {
                        console.log('received text message from ' + data.from + ', content: ' + data.content);
                    } else{
                        console.log('received unknown message type ' + data.type + ' from ' + data.from);
                    }
                });

                // Set the video element
                this.myVideo = document.getElementById("localVideo");
                this.remoteVideo = document.getElementById("remoteVideo");

                // Create peer connection
                this.createPeerConnection();

                // Event listeners
                this.onIceCandidates();
                this.onAddStream();
            }
        },

        async requestVideoCall() {
            if (this.conversation == null || this.conversation.length == 0) {
                return;
            }

            if (this.videoCalling == true) {
                return;
            }

            log(`${this.authuser.name} wants to start a call`); 

            this.isCaller = true;
            $('#videoCall').modal('show');

            await this.getUserMedia();

            this.startVideoCall();
        },

        async getUserMedia() {
            log(`Requesting ${this.authuser.name} video stream`);
            if ("mediaDevices" in navigator) {
                return log(`Requesting media`);
                try {
                    const stream = await navigator.mediaDevices.getUserMedia(this.constraints);
                    this.myVideo.srcObject = stream;
                    this.localStream = stream;
                    log("Received local video stream");

                    await this.getAudioVideo();
                } catch (error) {
                    log(`getUserMedia error: ${error}`);
                }
            } else {
                return log(`Not Requesting media`);
            }
        },

        getAudioVideo() {
            const video = this.localStream.getVideoTracks();
            const audio = this.localStream.getAudioTracks();
            if (video.length > 0) log(`Using video device: ${video[0].label}`);
            if (audio.length > 0) log(`Using audio device: ${audio[0].label}`);
        },

        // Send signaling data via Scaledrone
        async sendSignal(details) {
            let authuser = this.authuser.id; 
            let otheruser = this.otheruser.id;
            //return console.log(details['content'])

            var message = { from: authuser, to: otheruser, type: details['type'], subtype: details['subtype'], content: details['content'], time: new Date() };
            await axios.post('/trigger-video-call', {message: message});
        },

        startVideoCall() {
            // Add local stream
            this.addLocalStream();
            this.videoCalling = true;

            if (this.isCaller) {
                this.callFriend();
            } else {
                this.createAnswer()
            }
            
        },

        createPeerConnection() {
            this.pc = new RTCPeerConnection(this.configuration);
            log(`Created ${this.authuser.name} peer connection object`);
        },

        addLocalStream(){
            this.pc.addStream(this.localStream)
        },

        onIceCandidates() {
            // send any ice candidates to the other peer
            log(`${this.authuser.name} starting onice candidate`);
            var limit = 0;
            this.pc.onicecandidate = ({ candidate }) => {
                if (limit == 0) {
                    var details = [];
            
                    details['type'] = 'signal';
                    details['subtype'] = 'candidate';
                    details['content'] = candidate;

                    this.sendSignal(details);
                    limit = 1;
                } else {
                    return;
                }
            };
        },

         onAddStream() {
            log(`${this.authuser.name} starting onadd stream`);

            this.pc.onaddstream = (event) => {
                if(!this.remoteVideo.srcObject && event.stream) {
                    this.remoteStream = event.stream
                    this.remoteVideo.srcObject = this.remoteStream ;
                }
            }
        },

        callFriend() {
            log(`${this.authuser.name} wants to start a call`);   
            this.createOffer();
        },

        async setRemoteDescription(remoteDesc) {
            try {
                log(`${this.authuser.name} setRemoteDescription: start`);
                await this.pc.setRemoteDescription(remoteDesc);
                log(`${this.authuser.name} setRemoteDescription: finished`);
            } catch (error) {
                log(`Error setting the RemoteDescription in ${this.authuser.name}. Error: ${error}`);
            }
        },

        async createAnswer() {
            log(`${this.authuser.name} create an answer: start`);
            try {
                const answer = await this.pc.createAnswer();

                log(`Answer from ${this.authuser.name}\n ${answer.sdp}`);
                log(`${this.authuser.name} setLocalDescription: start`);
                
                await this.pc.setLocalDescription(answer);
                
                log(`${this.authuser.name} setLocalDescription: finished`);
                this.sendSignalingMessage(this.pc.localDescription, false);
            } catch (error) {
                log(`Error creating the answer from ${this.authuser.name}. Error: ${error}`);
            }
        },

        async createOffer() {
            log(`${this.authuser.name} create an offer: start`);
            
            try {
                const offer = await this.pc.createOffer(this.offerOptions);

                log(`Offer from ${this.authuser.name}\n ${offer.sdp}`);
                log(`${this.authuser.name} setLocalDescription: start`);
                
                await this.pc.setLocalDescription(offer);
                
                log(`${this.authuser.name} setLocalDescription: finished`);
                
                this.sendSignalingMessage(this.pc.localDescription, true);
            } catch (error) {
                log(`Error creating the offer from ${this.authuser.name}. Error: ${error}`);
            }
        },

        sendSignalingMessage(desc, offer) {
            const isOffer = offer ? "offer" : "answer";
            log(`${this.authuser.name} sends the ${isOffer} through the signal channel`);
            // send the offer to the other peer
            var details = [];
            
            details['type'] = 'signal';
            details['subtype'] = isOffer;
            details['content'] = desc;

            this.sendSignal(details);
        },

        onSignalMessage(m) {
            log(m.subtype);
            
            if(m.subtype === 'offer') {
                log('got remote offer from ' + m.from + ', content ' + m.content);
                this.onSignalOffer(m.content);
            } else if(m.subtype === 'answer') {
                this.onSignalAnswer(m.content);
            } else if(m.subtype === 'candidate') {
                log('got remote candidate from ' + m.from + ', content ' + m.content);
                this.onSignalCandidate(m.content);
            } else if(m.subtype === 'close') {
                this.onSignalClose();
            } else {
                console.log('unknown signal type ' + m.subtype);
            }
        },

        async onSignalOffer(offer) {
            log('onsignal offer')
            this.offer = offer;
            
            var data = {
                type: this.offer.type,
                sdp: this.offer.sdp += "\n"
            }
            await this.setRemoteDescription(data);
            $('#videoAnswer').modal('show');
        },

        answerCall() {
            this.isCaller = false;

            $('#videoAnswer').modal('hide');
            this.startAnswer()
        },

        async startAnswer() {
            log(`Requesting ${this.authuser.name} video stream`);
            
            await this.getUserMedia();
            await this.getAudioVideo();

            this.startVideoCall();
        },

        async onSignalAnswer(answer) {
            log('onRemoteAnswer : ' + answer);

            var data = {
                type: answer.type,
                sdp: answer.sdp += "\n"
            }
            await this.setRemoteDescription(data);
            
            this.onSetRemoteSuccess(this.pc);
        },

        onSetRemoteSuccess(pc) {
            $('#videoCall').modal('hide');
            log(pc + ' setRemoteDescription complete');
        },

        async onSignalCandidate(candidate) {
            try {
                log(`${this.authuser.name} attempting to add a candidate`);
                await this.pc.addIceCandidate(new RTCIceCandidate(candidate));
                log(`Candidate added`);
            } catch (error) {
                log(`Error adding a candidate in ${this.authuser.name}. Error: ${error}`)
            }
        },

        onSignalClose() {
            log('Ending call');
            this.pc.close();
            this.pc = null;

            this.videoCalling = false;

            this.closeMedia();
            this.clearView();
        },

        stopVideoCall() {
            this.pc.close();
            this.pc = null;

            this.videoCalling = false;
            
            this.closeMedia();
            this.clearView();

            $('#videoCall').modal('hide')
        },

        closeMedia(){
            if (this.localStream != undefined) {
                this.localStream.getTracks().forEach(function(track){track.stop();});   
            }
        },

        clearView(){
            this.myVideo.srcObject = null;
            this.remoteVideo.srcObject = null;
        },

        //Video call already going on and member wants to end it
        endVideoCall() {
            let details = [];

            details['type'] = 'signal';
            details['subtype'] = 'close';
            details['content'] = 'ending the call';

            this.sendSignal(details);

            log('Ending call');
            this.pc.close();
            this.pc = null;

            this.videoCalling = false;

            this.closeMedia();
            this.clearView();
        }
    }
};
</script>

<style scoped>
input[type="text"]:disabled, button:disabled {
    cursor: not-allowed! important; 
}

.videoRID {
    width: 100%;
}

.video {
    display: flex;
    position: relative;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
}

.videoUID {
    position: relative;
    right: 0;
    top: 0;
    bottom: 0;
    padding: 0 !important;
}
</style>