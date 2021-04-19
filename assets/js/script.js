let app = new Vue({
    el: '#app',
    data: {
        show_all_news: true,
        show_searched: false,
        news_data: 0,
    },
    methods: {
        show_searched_news: function(){
            let input_data = document.getElementById('title_search').value;
            if(input_data !== ''){
                this.show_all_news = false;
                this.show_searched = true;
                axios.post('http://localhost/proj/index.php/news/getsearchednews', {title: input_data})
                    .then(data => {
                        if(data.data != ''){
                            this.news_data = JSON.parse(data.data);
                        }
                    });
            }
            else{
                this.show_all_news = true;
                this.show_searched = false;
            }
        }
    }
})