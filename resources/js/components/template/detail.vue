<template>
	<div class="container">
		<h1>{{posts.post_title}}</h1>
		<p>
			{{posts.post_detail}}
		</p>
	</div>
</template>

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
		mounted () {
	    axios
	      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
	      .then(response => (this.info = response))
	  }
	}
</script>

<style>
	
</style>