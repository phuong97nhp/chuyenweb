import Post from './components/template/index.vue'
import PostDetail from './components/template/detail.vue'
import ViewHome from './components/template/ViewHome.vue'


const routes = [
	{ 
		path: '/', 
		component:  ViewHome
	},
	{ 
		path: '/:slug', 
		component: PostDetail 
	},
	{ 
		path: '/bai-viet', 
		component: Post 
	}
]