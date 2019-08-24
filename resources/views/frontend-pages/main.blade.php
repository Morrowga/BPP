<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Burmese Plight</title>
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=myanmar3' />
	<link rel="stylesheet" href='https://mmwebfonts.comquas.com/fonts/?font=zawgyi' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

</head>
<body>
	
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light display-flex">
			<a class="navbar-brand" href="/">BURMESE PLIGHT</a>							
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/contact">Contact Us</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="{{ route('user_login') }}">Member Login</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="/blogg">Blogs</a>
					</li>
					
				</ul>
			</div>
		</nav>
	</div><!--container-->
	
	
	<div class="header-img">
		<div class="col-12">
    <h1 class="description">Welcome To Our Page</h1>
			<img class="img-fluid" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/10488/woods-3.jpeg" alt="ImageHere">
			<a href="/newfeed">
            <button class="button" >
            <span> 
            <p class="new" style="color:#000;">NewFeeds</p>
            </span>
            </button>
      </a>

		</div>
	</div>
	
	<div class="center-outer">
		<div class="center-inner">
			
			<div class="bubbles">
				<h1>What We Do</h1>
			</div>
			
		</div>
	</div>

	<script>
    jQuery(document).ready(function($){
			
			var bArray = [];
			var sArray = [4,6,8,10];
			
			for (var i = 0; i < $('.bubbles').width(); i++) {
				bArray.push(i);
			}
			
			function randomValue(arr) {
				return arr[Math.floor(Math.random() * arr.length)];
			}
			
			setInterval(function(){
				
				var size = randomValue(sArray);
				$('.bubbles').append('<div class="individual-bubble" style="left: ' + randomValue(bArray) + 'px; width: ' + size + 'px; height:' + size + 'px;"></div>');
				
				$('.individual-bubble').animate({
					'bottom': '100%',
					'opacity' : '-=0.7'
				}, 3000, function(){
					$(this).remove()
				}
				);
				
				
			}, 350);
			
		});
		
		
		
	</script><!---center-outer-->
  
  </script>
	
	
	<div id="text-1" class="row">
		<div class="col-12 col-md-6 left">
			<p><strong class="eng">H</strong>ello! The major aim of our page is to support the requirements of needy people who are struggling in their life. <br>And we created this page as a bridge between the people who need helps and benefactors.</p>
			
			<p class="zawgyi"><strong class="mm">မ</strong>ဂၤလာပါ ခင္ဗ်ာ.. က ြ်န္ေတာ္တို႕ PAGE တည္ေထာင္ရျခင္း ၏ ရည္ရြယ္ခ်က္မွာ <br> ျမန္မာႏိုင္ငံ၏အ ေျခခံလူတန္းစား ထဲက မွ မျပည့္မစံုဘဝနဲ႕ ရပ္သူေနရသူမ်ား၏ လိုအပ္ခ်က္ မ်ားကို ျဖည့္ဆည္းေပးႏိုင္ရန္  ျဖစ္ပါသည္။ <br>လိုအပ္သူ ႏွင့္အလွဴရွင္ ႏွစ္ဦး တိုက္ရိုက္ခ်ိတ္ဆက္ ႏိုင္ ရန္ တံတားတခုအျဖစ္ ဖန္တီးေပးထားျခင္းျဖစ္ပါသည္။
			</p>
			
			<button type="button" class="btn unibutton" data-toggle="modal" data-target="#exampleModal">
				Unicode User
			</button>
			
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Unicode</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body unicode">
							မဂၤလာပါ ခင္ဗ်ာ.. က ြ်န္ေတာ္တို႕ PAGE တည္ေထာင္ရျခင္း ၏ ရည္ရြယ္ခ်က္မွာ <br> ျမန္မာႏိုင္ငံ၏အ ေျခခံလူတန္းစား ထဲက မွ မျပည့္မစံုဘဝနဲ႕ ရပ္သူေနရသူမ်ား၏ လိုအပ္ခ်က္ မ်ားကို ျဖည့္ဆည္းေပးႏိုင္ရန္  ျဖစ္ပါသည္။ လိုအပ္သူ ႏွင့္အလွဴရွင္ ႏွစ္ဦး တိုက္ရိုက္ခ်ိတ္ဆက္ ႏိုင္ ရန္ တံတားတခုအျဖစ္ ဖန္တီးေပးထားျခင္းျဖစ္ပါသည္။
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--left-->
		
		<div class="col-12 col-md-6 right">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/10488/woods-3.jpeg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/10488/woods-3.jpeg" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/10488/woods-3.jpeg" class="d-block w-100" alt="...">
					</div>
				</div>
			</div>
		</div><!--right-->
	</div><!--row-->
	
	
	<div class="main" id="section1">
		<a href="#section2"><i class="fas fa-angle-double-down fa-4x"></i></a>
	</div><!--section1-->
	
	<div class="main" id="section2">
		<div class="center-outer">
			<div class="center-inner">
				
				<div class="bubbles">
        <a href="/blogg" style="text-decoration: none;"><h1>BLOGS</h1></a>
				</div>
				<main id="main">
					<gallery ref="gallery" v-bind:images="images" v-on:next="next">
					</gallery>
				</main>
				
				<template id="gallery_template">
					<transition-group tag="figure" class="Gallery" name="open">
						<img v-for="(image, index) of images" 
						v-bind:src="image" 
						v-bind:key="index"
						v-on:click="onClick"
						v-bind:style="{'--circle-x': x, '--circle-y': y}">
					</transition-group>
				</template>
				
			</div>
		</div>
	</div><!--section2-->
	
	<script>		
		
		Vue.component('gallery', {
			template: '#gallery_template',
			props: {
				images: Array
			},
			data() {
				return {
					x: '50%',
					y: '50%'
				}
			},
			methods: {
				onClick(event) {
					const x = event.offsetX - event.target.offsetLeft
					const y = event.offsetY - event.target.offsetTop
					const xPercent = `${Math.round(100 * x / event.target.offsetWidth)}%`
					const yPercent = `${Math.round(100 * y / event.target.offsetHeight)}%`
					this.x = xPercent
					this.y = yPercent
					this.$emit('next', {x: xPercent, y: yPercent})
				}
			}
		})
		
		const vm = new Vue({
			el: '#main',
			data: {
				images: [
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/10488/woods-3.jpeg',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/10488/woods-3.jpeg',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/10488/woods-3.jpeg',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/10488/woods-4.jpeg'
				]
			},
			methods: {
				next() {
					const image = this.images.shift()
					this.$nextTick(() => this.images.push(image))
				}
			}
		})
		
	</script><!--section2-->
	
	<div id="container_button">
		<div class="box-wrap">
			<div class="box">
				<p class="donate">
					<img class="img-fluid" src="images/donate2.png" alt="">
				</p>
				<p class="donate-text">
					Start with as much as <br>you can afford
				</p>
				<p class="donate-text-mm">တတ္ ႏိုင္ သ ေလာက္ ျဖင့္ ပါ ဝင္ လိုက္ ပါ။<p>
				</div>
				<div class="box">
					<p class="respect">
						<img class="img-fluid" src="images/respect.png" alt="">
					</p>
					<p class="respect-text">Please help each other with kindness.</p>
					<p class="respect-text-mm">ေမတၱာျဖင့္ လူလူခ်င္း ရိုင္းပင္း ကူညီ ပါ။</p>
				</div>
				<div class="box">
					<p class="myanmar">
						<img class="img-fluid" src="images/myanmar.png" alt="">
					</p>
					<p class="myanmar-text">Please live in the mother land 'Myanmar' with love</p>
					<p class="myanmar-text-mm">ခ်စ္ျခင္း မ်ားျဖင့္ အမိေျမ ထဲ ေနထိုင္ပါ။</p>
				</div>
			</div><!--box-wrap -->
		</div><!--container-button-->
		
		<section id="footer">
			<div class="container-footer">
				<div id="footer-text" class="row">
					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<a href="mainpage.html"><h3 class="foottext"> Home BurmesePlight</h3></a>
						
					</div>
					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<a href="">
            <h3 class="foottext"> Join Now +959795864194</h3>
            </a>
					</div>
					<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
						<a href="aboutus.html"><h3 class="foottext"> More About Us Contact Now </h3></a>
					</div>
				</div>
				
				
				
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
						<ul class="list-unstyled list-inline social text-center">
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">Humanitarian Transaction Corporation</a></u> is a Registered Own Business. Yangon [Bahan Township]</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">YANGON</a></p>
				</div>
			</hr>
		</div>	
	</div>
</section><!--footer-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>

body,html {
	width: 100%;
	margin: 0 auto;
    height: auto;
    scroll-behavior: smooth;
  -webkit-font-smoothing: antialiased;
    overflow-x: hidden;
}


.zawgyi {
      font-family:Zawgyi-One,second font,third font;
        }
.unicode{
      font-family:Myanmar3,Yunghkio,'Masterpiece Uni Sans';
    }

.container{
	margin-top: 20px;
	width: 100%;
	height: auto;
	background: #FFFFFF;
  font-family: 'Philosopher', sans-serif;
   margin-right: 40px !important;
}
 



.navbar-brand{
  font-size: 25px !important;
}

.nav-item {
  padding-right: 90px;
  padding-left: -90px;
	font-size: 15px;
	display: inline-block;
  font-size: 20px;
}

/*header-img*/

.header-img{
     width: 100%;
     height: auto;
     font-size: 20px;
     padding: 12px 24px;
     border: none;
     cursor: pointer;
     border-radius: 4px;
     text-align: center;
     transition: all 0.5s;
     font-family: 'Philosopher', sans-serif;
     text-decoration: none;
     margin-top: 40px;
	  margin-bottom: -40px;
}

.description{
    font-weight: bold;
    position: absolute;
      top: 35%;
     left: 50%;
     color: #FFFFFF;
     cursor: pointer;
     text-align: center;
     font-family: 'Philosopher', sans-serif;
     text-decoration: none;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

 .button {
	 position: absolute;
     top: 35%;
     left: 18%;
     width: 200px;
     height: 60px;
     background-color: #30a88e;
     color: #FFFFFF;
     font-size: 20px;
     padding: 12px 24px;
     border: none;
     cursor: pointer;
     border-radius: 4px;
     text-align: center;
     transition: all 0.5s;
     font-family: 'Philosopher', sans-serif;
     text-decoration: none;

}

/* header-img*/

@media screen and (min-width:340px) and (max-width:640px) {
  .button span{
    width: 100%  !important; 
    font-size: 10px !important;
  }

  .button {
    width: 100px !important;
    height: 40px !important;
    padding: 2px 2px !important;
  }

  .bubbles h1{
      width: 100%;
      font-size: 26px !important;
  }
 
}

/*what we do/blog*/

.center-outer {
display: table;
width: 100%;
height: 200px;
margin-top: 14px;
margin-bottom: -14px;
}

.center-inner {
display: table-cell;
vertical-align: middle;
text-align: center;
}

.bubbles {
display: inline-block;
font-family: arial;
position: relative;
}

.bubbles h1 {
position: relative;
margin: 1em 0 0;
font-family: 'Philosopher', sans-serif;
color: #000;
z-index: 2;
font-size: 60px;
}

.individual-bubble {
position: absolute;
border-radius: 100%;
bottom: 10px;
background-color: #30a88e;
z-index: 1;
}
/*whatwe do/blog*/

* {
  box-sizing: border-box;
}

/*whatwedo*/

#text-1 {
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 20px;
}
.mm{
  font-size: 35px;
  color: #30a88e;
}

.eng{
  font-size: 35px;
  color: #30a88e;
}
.left{
  font-family: 'Slabo 27px', serif;
  text-align: center;
  font-size: 17px;
  font-weight: bold;
  padding-top: 30px;

}


.right {
  float: right;

}

.btn {
  background: #30a88e;
  color: #FFFF;
}


.unibutton{
  margin-bottom: 10px !important;
}

#section1 {
  padding-top: 30px;
  height: 200px;
  display: table;
  margin: 0 auto;
  -webkit-animation: bounce 2s infinite alternate linear;
  -moz-animation: bounce 2s infinite alternate linear;
  animation: bounce 2s infinite alternate linear;
}

.fa-angle-double-down{
  color: #30a88e;
  margin-top: 50px;
  margin-bottom: -50px;  
}

.fa-angle-double-down:hover {
  opacity: 1;

}


@-webkit-keyframes bounce {
  to { -webkit-transform: scale(2); }
}
@-moz-keyframes bounce {
  to { -moz-transform: scale(2); }
}
@keyframes bounce {
  to { transform: scale(2); }
}



.textblog {
  position: relative;
  text-transform: uppercase;
  font-size: 70px;
  letter-spacing: 4px;
  overflow: hidden;
  text-align: center;
  background: linear-gradient(90deg, #000, #fff, #000);
  background-repeat: no-repeat;
  background-size: 80%;
  animation: animate 4s linear infinite;
  -webkit-text-fill-color: rgba(255, 255, 255, 0);
}

@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}

@use postcss-cssnext;

* {
  margin: 0;
  box-sizing: border-box;
}
/*whatwedo*/


/*blog*/
main {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  max-width: 1000px;
  margin: auto;
  margin-top: 40px;
}

main > * {
  margin: auto 0;
} 

.Gallery {
  display: block;
  position: relative;
  padding-top: calc(2/3 * 100%);
  transform-style: preserve-3d;
  perspective: 100vw;
}

.Gallery > img {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  cursor: pointer;
  --circle-x: 50%;
  --circle-y: 50%;
}

@keyframes openup {
  to {
    clip-path: circle(100vw at var(--circle-x) var(--circle-y));
  }
}

.open-enter-active {
  clip-path: circle(0 at var(--circle-x) var(--circle-y));
}

.open-enter-to {
  animation: openup 500ms ease-in;
}
/*blog*/


/*container_button*/


#conatiner_button{
  width: 100%;
  height: 350px;
}

.box-wrap{
  display:flex;
  align-items:center;
  justify-content:center;
  margin:5%;
}
.box{
  padding:30px;
  margin:2%;
  background:white;
  width:30%;
  border:1px solid #d6d6d6;
  box-shadow:0 2px 3px 0px rgb(48, 168, 142) ;
  border-radius:3px;
  transition:.2s all;
  height: 350px;
}
.box-wrap:hover .box{
  filter:blur(3px);
  opacity:.5;
  transform: scale(.98);
  box-shadow:none;
}
.box-wrap:hover .box:hover{
  transform:scale(1);
  filter:blur(0px);
  opacity:1;
  box-shadow:0 8px 20px 0px rgb(48, 168, 142);
}


.donate{
  text-align: center;
}


.myanmar{
  text-align: center;
}


.respect{
  text-align: center;
}


.donate-text{
  text-align: center;
  padding-top: 25px;
  font-weight: bold;
  font-size: 15px;
  text-transform: uppercase;
  font-family: 'Slabo 27px', serif;

}
.respect-text{
  text-align: center;
  padding-top: 25px;
  font-weight: bold;
  font-size: 15px;
  text-transform: uppercase;
  font-family: 'Slabo 27px', serif;

}
.myanmar-text{
  text-align: center;
  padding-top: 25px;
  font-weight: bold;
  font-size: 15px;
  text-transform: uppercase;
  font-family: 'Slabo 27px', serif;

}

.donate-text-mm{
  text-align: center;
  font-weight: bold;
}

.respect-text-mm{
  text-align: center;
  font-weight: bold;
}

.myanmar-text-mm{
  text-align: center;
  font-weight: bold;
}

/*container-button*/



/*footer*/

section .section-title {
    text-align: center;
    color: #007b5e;
    text-transform: uppercase;
}
#footer {
    background: #007b5e !important;
    width: 100%;

}

#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
    font-family: 'Merriweather', serif;

}
#footer ul.social li{
  padding: 3px 0;

}
#footer ul.social li a i {
    margin-right: 5px;
	font-size:25px;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
  transition: .5s all ease;
}
#footer ul.social li:hover a i {
	font-size:30px;
  margin-top:-10px;
  
}

#footer ul.quick-links li{
	padding: 3px 0;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#footer ul.quick-links li:hover{
	padding: 3px 0;
	margin-left:5px;
	font-weight:700;
}

#footer ul.quick-links li:hover a i {
    font-weight: 700;
}




#footer h3{
	color: #fff;
	font-size: 18px;
	font-weight: 600;
	line-height: 27px;
	padding: 40px  10px;
  text-transform: uppercase;
  text-align: center;
  font-family: 'Philosopher', sans-serif;

}


#footer-text{
  display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
   -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
   -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    
}


/*footer*/
</style>