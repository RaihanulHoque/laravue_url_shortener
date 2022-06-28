<template>
    <!-- Showing Existing URL -->
    <div v-if="shortenUrl">
        <div class="shadow p-3 mb-5 rounded bg-success shorten-rul">
            <h5>Shorten URL:
            <AppLink :href="[dest_url]">{{ shortenUrl }}</AppLink>
        </h5>
        </div>

        <p>Original URL:
            <AppLink :href="[dest_url]">{{ dest_url }}</AppLink>
        </p>
    </div>
    <form onkeydown="return event.key != 'Enter';" @submit.prevent="addUrl">
        <div class="row mt-4">
            <div class="col">
                <input type="text" v-model="url.destination_url" placeholder="Enter URL" class="form-control origin-url-input" id="urlInput">
            </div>
        </div>
        <button
        @click="addUrl()"
        :class="[ url.destination_url? 'active' : 'inactive', 'btn mt-3 btn-block']"
        >Generate</button>
    </form>
</template>
<script>
import axios from 'axios';
import AppLink from './AppLink.vue';

export default {

    data: function () {
        return {
            url: {
                destination_url: "",
            }
        };
    },
    methods: {


        addUrl() {
            //Checking the URL is valid or not
            const pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
            '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
            '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
            '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
            '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
            '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
            const isValid = !!pattern.test(this.url.destination_url);

            if(isValid === true){
                const dest_url = "";
                const shortenUrl = "";
                // checking all the good response status codes for getting the successful response
                const goodResponseStatus = [200, 201, 204];
                if (this.url.destination_url == "") {
                    return;
                }

                const axios = require('axios');
                const sendGetRequest = async () => {
                    try {
                        const resp = await axios.post('api/add-url', {
                                            url: this.url.destination_url
                                        })
                                        .then(response => {
                                            if (goodResponseStatus.includes(response.status)) {
                                                this.url.destination_url = response.data.default_short_url;
                                                this.dest_url = response.data.destination_url;
                                                this.shortenUrl = response.data.default_short_url;
                                                //console.log(response.data.default_short_url, "--- Getting response after submit");
                                            }
                                        });
                    } catch (err) {
                        // Handle Error Here
                        console.error(err);
                    }
                };
                sendGetRequest();

            }else{
                alert("Please enter a valid URL!");
                document.querySelector('#urlInput').focus();
            }

        },

    },
    components: { AppLink }
}
</script>
<style scoped>
    .active{
        background-color: rgb(81, 33, 214);
        color: aliceblue;
    }
    .inactive{
        background-color: cadetblue;
    }
    .shorten-rul{
        color:aliceblue;
    }
    .shorten-rul a{
        color:rgb(209, 212, 18);
    }
</style>
