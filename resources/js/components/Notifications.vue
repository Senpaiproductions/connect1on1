<template>
<div class="notifications">
    <span class="nk-cart-toggle" style="position: relative">
        <i class="fas fa-bell" style="font-size: 14px"></i>
                  
        <span v-if="unreadNotifications != null && unreadNotifications.length != 0" style="position: absolute; top: -7px; right: -12px; font-size: 10px; padding: 2px 5px; background: rgb(221, 75, 57) none repeat scroll 0% 0% !important; color: rgb(255, 255, 255);border-radius: 50%;" class="label label-danger" id="msgcount">{{ unreadNotifications.length > 10 ? '9+' : unreadNotifications.length }}</span>
    </span>

    <div class="nk-cart-dropdown" style="width: 300px; height: 250px; overflow: auto;">
        <div class="text-center">
            <h5 class="nk-username">Notifications</h5>
            
            <hr style="background: white" />
            
            <ul class="nk-widget-categories">
                <h5 class="mt-80 text-center" v-if="notifications" v-show="!notifications.length">No New Notifications!</h5>

                <li v-if="notifications && notifications.length != 0" v-for="notification in notifications" :key="notification.id" class="text-left">
                    <span style="float: left; margin-top: 14px">
                        <!--<i :class="notification.read_at != null ?  notification.data.icon + ' read' : notification.data.icon + ' unread'" style="font-size: 15px;"></i>-->
                        {{ notification.data.icon }}
                    </span>

                    <a @click.prevent="markAsRead(notification)" :href="notification.data.link" :class="notification.read_at != null ? 'read' : 'unread'">{{ notification.data.message }}</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: ['user'],

    data() {
        return{
            notifications: []
        }
    },
    
    computed: {
        unreadNotifications() {
            if (!this.notifications && !this.notifications.length) {
                return null;
            }
            return this.notifications.filter(notification => {
                return notification.read_at == null;
            })
        }
    },

    created() {
        // this.getNotifications().then(() => {
        //     this.setNotificationInteval();
        // })
    },

    methods: {
        async setNotificationInteval({ commit, dispatch }) {
            setInterval(function() {
                this.getNotifications()
            }, 300000);
        },
        
        async getNotifications() {
            let url = `/notifications`;
            
            await axios.get(url)
            .then((response) => {
                this.notifications = response.data.notifications
            })
            .catch(err => {
                console.log(err.response)
            });
        },

        async markAsRead(notification) {
            const id = notification.id
            const url = `/markAsRead`;

            notification.read_at = 'now';
            axios.post(url, {id})
            .then(() =>{
                window.location.href = notification.data.link;
            })
        },
    }
}
</script>