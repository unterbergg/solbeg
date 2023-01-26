import axios from 'axios';
import animate from "./animate";

class LoadMore {

    canBeLoaded = true;
    bottomOffset = null;
    docEl = null;
    postsEl = null;
    categoriesEl = null;
    cat = null;
    instance = null;
    projects = false;

    constructor(docEl, postsEl) {
        this.bottomOffset = parseInt(solbeg_loadmore_params.bottomOffset);
        this.docEl = document.documentElement;
        this.postsEl = document.getElementById('posts');
        this.instance = axios.create();

        if (!this.postsEl.parentNode.classList.contains('projects')) {
            this.categoriesEl = document.getElementById("categories-menu");
            this.setActiveCategory();
            this.getPosts();

            window.addEventListener('scroll', this.scrollHandler.bind(this));

            let nodeList = document.getElementById("categories-menu").querySelectorAll('a');
            for(let i = 0; i < nodeList.length; i++) {
                nodeList[i].addEventListener('click', this.clickHandler.bind(this));
            }
        } else {
            this.projects = true;
            window.addEventListener('scroll', this.scrollHandler.bind(this));
        }
    }

    scrollHandler() {
        if (this.docEl.scrollTop > (this.docEl.scrollHeight - this.bottomOffset) && this.canBeLoaded == true) {
            if (this.projects) {
                this.getProjects();
                return;
            }

            this.getPosts();
        }
    }

    clickHandler(e) {
        if (e.target.classList.contains('nav-item-cat-page')) {
            return;
        }
        e.preventDefault();

        this.categoriesEl.querySelector('.active').classList.remove('active');
        e.target.classList.add('active');

        solbeg_loadmore_params.paged = 0;
        this.cat = e.target.dataset.catid;

        if (e.target.href.indexOf("#") > -1) {
            history.replaceState(null, null, '#' + e.target.href.split('#').pop());
        } else {
            history.replaceState(null, null, ' ');
        }

        this.getPosts(true);
    }

    getPosts(clear = false) {
        let formdata = new FormData();
        formdata.append('action','loadmore_posts' );
        formdata.append('paged', solbeg_loadmore_params.paged );
        formdata.append('cat',this.cat );

        axios.interceptors.request.use(function (config) {
            this.canBeLoaded = false;
            return config;
        }.bind(this), function (error) {
            return Promise.reject(error);
        });

        axios.post(
            solbeg_loadmore_params.ajaxurl,
            formdata
        ).then(response => {
            if (response.data) {
                if (clear) {
                    this.clear();
                }
                this.postsEl.innerHTML += response.data;
                this.canBeLoaded = true;
                solbeg_loadmore_params.paged++;
            } else {
                this.canBeLoaded = false;
            }
        }).catch(error => {
            console.log(error);
        });
    }

    getProjects() {
        let formdata = new FormData();
        formdata.append('action','loadmore_projects' );
        formdata.append('post_per_page', solbeg_loadmore_params.post_per_page );
        formdata.append('offset', solbeg_loadmore_params.offset );
        formdata.append('projects', this.postsEl.dataset.projects);

        axios.interceptors.request.use(function (config) {
            this.canBeLoaded = false;
            return config;
        }.bind(this), function (error) {
            return Promise.reject(error);
        });

        axios.post(
            solbeg_loadmore_params.ajaxurl,
            formdata
        ).then(response => {
            if (response.data) {
                this.postsEl.innerHTML += response.data;
                this.canBeLoaded = true;
                solbeg_loadmore_params.offset = parseInt(solbeg_loadmore_params.offset) + parseInt(solbeg_loadmore_params.post_per_page);

                animate.init();
            } else {
                this.canBeLoaded = false;
            }
        }).catch(error => {
            console.log(error);
        });
    }

    setActiveCategory () {
        let hash = ("cat" in this.categoriesEl.dataset) ? '#' + this.categoriesEl.dataset.cat : window.location.hash;
        let active = this.categoriesEl.querySelector("a[href$='"+hash+"']") ?? this.categoriesEl.querySelectorAll("a")[0];

        if (active) {
            active.classList.add('active');
            this.cat = hash.slice(1);
        }
    }

    clear() {
        this.postsEl.innerHTML = "";
    }

}

export default LoadMore;