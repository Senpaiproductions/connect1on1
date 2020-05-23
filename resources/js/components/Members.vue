<template>
  <div class="row mb-5 sm-mb-3">
    <div v-for="user in users.data" :key="user.id" class="col-md-3 sm-mb-3">
      <div class="profile-item-hover-1">
        <div class="profile-item">
          <div class="profile-image clearfix">
            <img class="img-fluid" data-toggle="modal" :data-target="'#modal' + user.id" :src="user.photo_url" :alt="user.name" style="cursor: pointer;" />
          </div>

          <div class="profile-details profile-text">
            <h5 class="title">{{ user.name }}</h5>
            <span class="text-black">{{ user.age }} Years Old</span>

            <div class="row">
              <button
                @click.prevent="selectUser(user)"
                class="col-md-6 btn btn-outline-dark text-warning"
                type="button"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-message-circle"
                >
                  <path
                    d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"
                  />
                </svg>
              </button>

              <button
                class="col-md-6 btn btn-outline-dark text-warning"
                type="button"
                data-toggle="tooltip"
                title
                data-original-title="Video call"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="feather feather-video"
                >
                  <polygon points="23 7 16 12 23 17 23 7" />
                  <rect x="1" y="5" width="15" height="14" rx="2" ry="2" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!--Modal: Name data-backdrop="static" data-keyboard="false"-->
      <div
        class="modal in"
        :id="'modal' + user.id"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg quiz-modal-width" role="document">
          >
          <div class="modal__profile__container modal-content">
              <div class="container-fluid container-close-pos">
                <div class="row">
                    <div class="col-12 end-xs">
                        <a href="javascript:;" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times" style="font-size: 40px;">
                                <use xlink:href="#fa-times"></use>
                            </i>
                        </a>
                    </div>
                </div>
            </div>

            <!--<div class="container-fluid container-ctrls-pos">
                <div class="row">
                    <div class="col-6 start-xs">
                        <a href="javascript:;" class="back displayNone" style="display: inline;">
                            <img src="/images/mod-arrow-left.png" class="mod-arrow-size" alt="">
                        </a>
                    </div>
                    
                    <div class="col-6 end-xs">
                        <a href="javascript:;" class="next displayNone" style="display: inline;">
                            <img src="/images/mod-arrow-right.png" class="mod-arrow-size" alt="">
                        </a>
                    </div>
                </div>
            </div>-->
            <!--Body-->
            <div class="modal-body">
                <div class="profile_card">
                    <div class="container-fluid modal__profile__details">
                        <div class="top__part__fihxed" style="height: auto;">
                            <div class="row">
                                <div
                                    class="expand1 marginrgt20 photos"
                                    style="height: 225px; overflow: hidden;"
                                >
                                    <div class id="ui-id-8">
                                        <div class="endless">
                                            
                                            <img
                                            :src="user.photo_url"
                                            class="prof--image--size"
                                            style="display: block;"
                                            @click="index = images[0]"
                                            />

                                            <gallery :images="images" :index="index" @close="index = null"></gallery>
                                        </div>
                                    </div>
                                
                                    <div class="prof--expand--pos" style="display: none;">
                                        <a href="javascript:;" class="expand-the-image" style="display: block;">
                                            <svg class="icon icon-expand icon--pos" />
                                        </a>
                                        <a href="javascript:;" class="collapse-the-image displayNone">
                                            <svg class="icon icon-collapse icon--pos" />
                                        </a>
                                    </div>
                                </div>
                                <div class="prof--contact--box">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-8 col-6">
                                            <button type="button" class="btn btn--addtofavorites">Star</button>
                                            </div>
                                            <div class="col-sm-4 col-6 end-xs">
                                            <div class="mc--buttons row around-xs">
                                                <a :href="'chat/' + user.slug" class="mc--img mc--chat on" ></a>
                                                <div class="mc--img mc--video available"></div>
                                                <div class="mc--img mc--phone available"></div>
                                            </div>
                                            </div>
                                        </div>
                                        <div id="message-box">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="prof--textarea--border">
                                                        <textarea class="prof-textarea-box" v-model="newMessage" :disabled="notLoggedIn"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="container-fluid container-msg-buttons">
                                                    <div v-show="notLoggedIn" class="row">
                                                        <div class="col-12 start-xs paddingbot5">
                                                            <span class="start-xs">
                                                            Please
                                                            <a href="/login">sign in</a> or
                                                            <a href="/register" data-toggle="modal" data-target="#signup">join</a> to send a quick message.
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div
                                                            class="col-sm-12 end-sm nowrap-sm col-12 center-xs nowrap-xs"
                                                        >
                                                            <button type="button" class="btn btn-primary btn--send--width" @click.prevent="sendMessage(user)" :disabled="notLoggedIn || emptyMessage">
                                                              Send
                                                              <span
                                                                v-show="sending"
                                                                class="spinner-border spinner-border-sm"
                                                                role="status"
                                                                aria-hidden="true"
                                                              ></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <div class="row baseline-xs" style="margin-left: 0px;">
                                <h5 class="profile-display-name">{{ user.name }}</h5>,
                                <span class="profile-age paddinglft5">{{ user.age }}</span>
                            </div>
                            
                            <div class="row profile-desc" style="margin-left: 0px;">
                                <div class="profile--description">{{ user.about }}</div>
                            </div>

                            <div class="row nowrap-xs mob--labels">
                                <dl>
                                    <dt>Age</dt>
                                    <dd>{{ user.age }}</dd>
                                </dl>
                                
                                <dl>
                                    <dt>Interested In</dt>
                                    <dd>
                                        <div>
                                            <span v-if="user.interest == 'female_interest'"> Women </span>
                                            <span v-if="user.interest == 'male_interest'"> Men </span>
                                        </div>
                                    </dd>
                                </dl>
                                
                                <dl>
                                    <dt>Languages</dt>
                                    <dd>
                                        <div>
                                            English
                                        </div>
                                    </dd>
                                </dl>
                                
                                <dl>
                                    <dt>Her Local Time</dt>
                                    <dd>03:57am</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer justify-content-center"></div>
          </div>
        </div>
      </div>
      <!--Modal: Name-->
    </div>

    <span v-if="selectedUsers != null && selectedUsers.length != 0" class="main-chat">
        <popupwithoutconvo v-for="user in selectedUsers" :key="user.id" :user="user" :authuser="authuser" v-on:remove="removeSelectedUser"></popupwithoutconvo>
    </span>

  </div>
</template>

<script>
import popupwithoutconvo from './chat/PopupWithoutConvo';

import VueGallery from "vue-gallery";

export default {
  props: ["users", "authuser"],
  
  components: {
    popupwithoutconvo,
    gallery: VueGallery
  },

  data() {
    return {
      selectedUsers: [],
      
      newMessage: "",
      sending: false,

      images: [
        "https://dummyimage.com/800/ffffff/000000",
        "https://dummyimage.com/1600/ffffff/000000",
        "https://dummyimage.com/1280/000000/ffffff",
        "https://dummyimage.com/400/000000/ffffff"
      ],

      index: null
    };
  },

  computed: {
    notLoggedIn() {
      return this.authuser == 'null'
    },

    emptyMessage() {
      return this.newMessage == ""
    }
  },

  methods: {
    //send a quick message to the user
    sendMessage(user) {
      if (this.authuser == 'null') {
        return window.location.href = '/login';
      }
      
      if (user == null) {
        return
      }

      if (this.newMessage == "") {
        return;
      }

      this.sending = true;

      let user_id = user.id;
      let message = this.newMessage;
      let url = `/send-message/${user_id}`;

      axios.post(url, { user_id: user_id, message: message })
      .then(response => { this.sending = false; this.newMessage = "" });
    },

    selectUser(user) {
      if (this.authuser == 'null') {
        return window.location.href = '/login';
      }

      let exists = this.selectedUsers.filter(function(selected) {
        if (user.id === selected.id) {
          return selected.id;
        }
      })

      if (exists.length > 0) {
        return;
      }

      this.selectedUsers.push(user);
    },

    removeSelectedUser(e) {
      for(let s in this.selectedUsers) {
        if (this.selectedUsers[s].id === e.id) {
          this.selectedUsers.splice(s, 1);       
        }
      }
    }
  }
};
</script>

<style scoped>
@import url('./css/modal.css');

dl dt {
    font-family: 'Montserrat', sans-serif;
}
</style>