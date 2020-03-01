<template>
	<div id="home-component" class="container">
		<nav class="navbar navbar-expand-sm bg-info navbar-dark mb-2">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">{{message}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">{{sinhvien.age+".html"}}</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">{{sinhvien.name}}</a>
				</li>
			</ul>
		</nav>

	</div>
</template>

<script>
	export default{
		data(){
			return{
				message:"Xây dựng trang web",
				sinhvien:{
					name:"Nguyễn Hoàng Phương",
					age:"23"
				}
			}
		},

		methods:{
			SayHello(){
				alert("Chào ngày mới.");
			},
			SayBye(){
				alert("Chúc ngủ ngon.");
			}
		}
	}
</script>
<style lang='scss' scoped>
	
</style>