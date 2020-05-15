<template>
  <div class="row mb-5 sm-mb-3">
    <div v-for="user in users.data" :key="user.id" class="col-md-3 sm-mb-3">
        <div class="profile-item-hover-1">
            <a href="#" class="profile-item" data-toggle="modal" :data-target="'#modal' + user.id">
                <div class="profile-image clearfix">
                    <img class="img-fluid" :src="user.photo_url" :alt="user.name">
                </div>

                <div class="profile-details profile-text">
                    <h5 class="title">{{ user.name }}</h5>
                    <span class="text-black">{{ user.age }} Years Old</span>
                    
                    <div class="row">
                        <button @click.prevent="selectUser(user)" type="button" data-toggle="modal" :data-target="'#modal' + user.id" class="col-md-6 btn btn-outline-dark text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                        </button>
                            
                        <button class="col-md-6 btn btn-outline-dark text-warning" type="button" data-toggle="tooltip" title="" data-original-title="Video call">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                        </button>
                    </div>
                </div>
            </a>
        </div>

        <!--Modal: Name data-backdrop="static" data-keyboard="false"-->
        <div class="modal fade" :id="'modal' + user.id"  tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-header">
                    <!--Header-->
                    <div class="row">
                        <div class="col-md-12">
                            {{ user.name }}
                        </div>
                    </div>
                    
            
                </div>
                <div class="modal-content">
                    <!--Body-->
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div
                                    class="image"
                                    @click="index = images[0]"
                                    :style="{ backgroundImage: 'url(' + images[0] + ')', width: '300px', height: '200px' }"
                                ></div>
                            </div>
                        </div>
                        <gallery :images="images" :index="index" @close="index = null"></gallery>
        
                        <!--<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                            <textarea class="embed-responsive-item" name="message" id="message" cols="30" rows="10" placeholder="send a message"></textarea>
                        </div>-->
            
                    </div>
            
                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        
                    </div>
                </div>
            </div>
        </div>
        <!--Modal: Name-->
    </div>
</div>
</template>

<script>
import VueGallery from 'vue-gallery';

export default {
    props: ['users'],
     components: {
        'gallery': VueGallery
    },

    data() {
        return {
            images: [
                'https://dummyimage.com/800/ffffff/000000',
                'https://dummyimage.com/1600/ffffff/000000',
                'https://dummyimage.com/1280/000000/ffffff',
                'https://dummyimage.com/400/000000/ffffff'
            ],
            index: null
        }
    },

    created() {
        console.log(this.users.data[0].id)
    }
}
</script>

<style>
.image {
    float: left;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    border: 1px solid #ebebeb;
    margin: 5px;
  }
</style>