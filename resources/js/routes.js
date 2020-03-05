import Post from './components/template/index.vue'
import PostDetail from './components/template/detail.vue'
import ViewHome from './components/template/ViewHome.vue'
import PageNotFound404 from './components/PageNotFound404.vue'


export const routes = [
	{
		path: '/',
		component: ViewHome
	},
	{
		path: '/bai-viet',
		component: Post
	},
	{
		path: '/:slug',
		component: PostDetail
	},
	{
		path: '/*',
		component: PageNotFound404
	}
]