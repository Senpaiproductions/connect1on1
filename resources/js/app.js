/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import { setup } from "axios-cache-adapter";
import VueAxios from "vue-axios";
import axios from "axios";

Vue.use(VueAxios, axios);
axios.defaults.baseURL = "/api";
axios.defaults.headers.common = {
    "X-Requested-With": "XMLHttpRequest",
    "Accept": "application/json",
    "Content-Type": "application/x-www-form-urlencoded",
    "X-CSRF-TOKEN": document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content")
};

// Create `axios` instance with pre-configured `axios-cache-adapter` attached to it
const api = setup({
    // `axios-cache-adapter` options
    cache: {
        maxAge: 15 * 60 * 1000
    }
});

window.api = api;

import VueChatScroll from 'vue-chat-scroll';
import VueTimeago from 'vue-timeago';

Vue.use(VueChatScroll);

Vue.use(VueTimeago, {
    name: 'timeago', // component name, `timeago` by default
    locale: 'en-US',
    /*locales: {
        'en-US': require('vue-timeago/locales/en-US.json')
    }*/
    
})

//date formats
import moment from "moment";
Vue.filter("myDate", function(created) {
    return moment(created).format("MMMM Do Y");
});

Vue.filter("momentsAgoDate", function(created) {
    return moment(created).fromNow();
});

Vue.filter("momentsToNowDate", function(created) {
    return moment(created).toNow();
});

Vue.filter("dateToSeconds", function(created) {
    return moment(created).format('X');
});

//countdown
Vue.filter('two_digits', function (value) {
    if(value.toString().length <= 1)
    {
        return "0"+value.toString();
    }
    return value.toString();
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('chat', () => import('./components/Chat'));

Vue.component('dashboard', () => import('./components/dashboard/Dashboard.vue'));

/*Vue.component('chat-popup', () => import('./components/chat/ChatPopup.vue'));

Vue.component('popup-without-convo', () => import('./components/chat/PopupWithoutConvo.vue'));*/


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
*/

import findmembers from './components/Members';
import chat from './components/Chat';

const app = new Vue({
    el: '#app',

    components: {
        findmembers,
        chat
    },

    data() {
        return {
            selectedUsers: []
        }
    },

    methods: {
        selectUser(user) {
            let exists = this.selectedUsers.filter(function(selected) {
                if (user.id === selected.id) {
                    return selected.id;
                }
            })

            if (exists.length > 0) {
                return;
            }

            this.selectedUsers.push(user);
            /*let url = `/get-message-without-convo/${user.id}`

            axios.get(url)
            .then((response) => {
                this.conversations = response.data.conversations
                this.loading = false;
            })*/
        },

        removeSelectedUser(e) {
            for(let s in this.selectedUsers) {
                if (this.selectedUsers[s].id === e.id) {
                    this.selectedUsers.splice(s, 1);       
                }
            }
        }
    }
});
