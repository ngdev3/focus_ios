<?php include 'header.php';?>

<style>
.notification_icon{
    width: 50px;
    height: 50px;
    background-color: #2e4a79;
    border-radius: 50px;
    text-align: center;
    padding: 15px;
    margin: 0 auto;
}
.notification_icon i{
    color: #fff;
    font-size: 22px;
}
.notification_detail h3{
    font-weight: 500;
    font-size: 16px;
    margin-top: 0px;
    margin-bottom: 0px;
}
.notification_detail p{
    font-size: 12px;
    line-height: 1.5;
	color: #000;
	overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    line-height: 21px;
    max-height: 44px;
}
.notification_detail p span{
    font-size: 10px;
    line-height: 1.5;
    color: #000000ad;
}
.notify_icon_div{
    display: table-cell;
    vertical-align: middle;
    width: 21%;
}
.notification_detail{
    display: table-cell;
    vertical-align: top;
}
.notification_div{
    display: table;
	    width: 100%;
}
.notification_div{
    box-shadow: 1px 1px 9px 1px #ccc;
    padding: 10px 0px;
    margin-bottom: 10px;
	width: 100%;
}
</style>
<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
				<li class="menu_icon back_icon"><a href="#"  ><img style="width:13px;" src="assets/img/icon/back.png" id="asdf" alt="menu icon" /></a></li>
				<li class="logo_name"><a class="text-left back">Notification</a></li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="notification pl-10 pr-10 pt-10 mt-50"> 
    <div class="notification_div">
	    <div class="notify_icon_div">
			<div class="notification_icon">
				<i class="fa fa-bell-o" aria-hidden="true"></i>
			</div>
		</div>	
		<div class="notification_detail">
		    <h3>Welcome to FOCUS APP</h3>
			<p>This is where you will see your personalized offers</p>
			<p><span>1 days ago</span></p>
		</div>
		
	</div>
	<div class="notification_div">
	    <div class="notify_icon_div">
			<div class="notification_icon">
				<i class="fa fa-bell-o" aria-hidden="true"></i>
			</div>
		</div>	
		<div class="notification_detail">
		    <h3>Welcome to FOCUS APP</h3>
			<p>This is where you will see your personalized offers</p>
			<p><span>1 days ago</span></p>
		</div>
		
	</div>
	 	
</div>
<script>

    $('.digit1 input').keyup(function(){
        if($(this).val().length==$(this).attr("maxlength")){
            $(this).next().focus();
        }
    });

</script>	
<?php include 'footer.php';?>