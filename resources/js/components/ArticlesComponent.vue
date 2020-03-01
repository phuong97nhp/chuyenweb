<template>
	<div>
		<h2>Home</h2>
		<div class="card card-body" v-for="article in articles" v-bind:key="article.id">
			<a v-bind:href="article.post_slug">
				<h3>{{article.post_title}}</h3>
				<img v-bind:src="article.post_img">
				<p>{{article.post_metakey}}</p>
			</a>
		</div>
	</div>
</template>

<script>
	export default{
		data(){
			return{
				articles:[],
				article:{
					id: '',
					name: '',
					title: 'Nguyễn Hoàng Phương',
					body: '',
				},
				article_id:'',
				pagination:{},
				edit:false
			}
		},

		created(){
			this.fetchArticles();
		}, 

		methods: {
			fetchArticles() {
				fetch('api/home')
				.then(res => res.json())
				.then(res => {
					//console.log(res.data);
					this.articles = res.data;
					vm.makePagination(res.meta, res.link);
				})
				.catch(err => console.log(err));
			}
		}
	}
</script>

<style>
	
</style>