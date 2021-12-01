Vue.config.devtools = true;

new Vue({
    el: "#root",
    data: {
        cds: [],
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi/php-ajax-dischi/api/data.php").then((resp) => {
            this.cds = resp.data.cdList;
            console.log(this.cds);
        })

        
    }
})


