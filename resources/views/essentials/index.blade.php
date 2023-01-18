<style type="text/css">
	ul{
    	list-style:none;
	}
	li{
		cursor:pointer;
	}
</style>

<div>
	<ul>
		<li onclick="openPage('media')">media-query</li>
		<li onclick="openPage('container')">container-query</li>
		<li onclick="openPage('flex')">flex</li>
	</ul>
</div>

<script type="text/javascript">
	function openPage(page){
		console.log(page);
        window.open('/essentials/' + page);
	}
</script>