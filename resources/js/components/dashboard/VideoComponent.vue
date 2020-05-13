<template>
<div v-if="videoCalling" class="col-6 col-s-9">
    <div>
        <video  class="img-responsive" width="400" autoplay id='remoteVideo'>
            <source src="/storage/testvideo.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <video  class="img-responsive" autoplay id='localVideo'>
            Your browser does not support the video tag.
        </video>
    </div>
  </div>
</template>

<script>
export default {
    
};
</script>