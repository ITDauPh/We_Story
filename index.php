<!DOCTYPE html>
<html>

<head>
	<title>Love Day Count - We Diary</title>
	<link rel="icon" type="image/x-icon" href="./images/infinity.png">
	<style>
		* {

			text-transform: capitalize;
			background-color: #333;
			color: #fff;
		}

		body {
			font-family: Arial, sans-serif;
			text-align: center;
		}

		h1 {
			color: #333;
		}

		#countdown {
			font-size: 48px;
			margin-top: 50px;
		}

		.heart {
			position: absolute;
			width: 100px;
			height: 100px;
			background-color: pink;
			clip-path: polygon(50% 0%,
					90% 0%,
					100% 10%,
					100% 30%,
					50% 90%,
					0% 30%,
					0% 10%,
					10% 0%);
			animation: falling-heart 4s infinite;
		}

		@keyframes falling-heart {
			0% {
				top: -100px;
				opacity: 1;
				transform: rotate(0deg) scale(1);
			}

			100% {
				top: 100%;
				opacity: 0;
				transform: rotate(360deg) scale(0.2);
			}
		}

		.grid-container {
			display: grid;
			gap: 50px 100px;
			justify-content: center;
			grid-template-columns: auto auto auto;
			
			padding: 10px;

		}

		.grid-item {
			
			
			padding: 5px;
			font-size: 30px;
			text-align: center;
		}
	</style>
</head>

<body>
	<div class="grid-container">
		<div class="grid-item">
			<img src="https://scontent.fsgn2-5.fna.fbcdn.net/v/t39.30808-1/335450717_923581512171016_431189872598139531_n.jpg?stp=dst-jpg_s200x200&_nc_cat=106&ccb=1-7&_nc_sid=7206a8&_nc_ohc=Pn2fa8T2tfIAX9QXKUh&_nc_ht=scontent.fsgn2-5.fna&oh=00_AfAjy9sk0awfwz1aI9ZrkU97Wi1BCziXgvFzSkd4KMuPgQ&oe=6485E7C2" alt="">
			<div>Roster</div>
		</div>
		<div class="grid-item"><img src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t39.30808-1/348462261_811667913950133_9131402867157915656_n.jpg?stp=dst-jpg_p200x200&_nc_cat=107&ccb=1-7&_nc_sid=7206a8&_nc_ohc=jGrWTGjkHw8AX-4Yemm&_nc_ht=scontent.fsgn2-3.fna&oh=00_AfCqulRY8YN5xq76EHPFswgHzMUfUAuUgG994jVvoBNCKw&oe=64857841" alt="">
			<div>Vivis</div>
		</div>
	</div>
	<div id="countdown"></div>

	<script>
		function createFallingHeart() {
			var heart = document.createElement('div');
			heart.classList.add('heart');
			document.body.appendChild(heart);

			var randomX = Math.floor(Math.random() * window.innerWidth);
			heart.style.left = randomX + 'px';
		}

		setInterval(createFallingHeart, 1000);

		// Định nghĩa ngày bắt đầu của mối quan hệ
		var startDate = new Date("2022-10-02");

		function updateCountdown() {
			var currentDate = new Date();
			var timeDiff = Math.abs(currentDate.getTime() - startDate.getTime());

			// Tính toán số ngày, giờ, phút và giây
			var days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
			var hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((timeDiff % (1000 * 60)) / 1000);

			// Hiển thị đếm ngược trên trang web
			var countdownElement = document.getElementById("countdown");
			countdownElement.innerHTML = days + " ngày, " + hours + " giờ, " + minutes + " phút, " + seconds + " giây";

			// Cập nhật đếm ngược mỗi giây
			setTimeout(updateCountdown, 1000);
		}

		// Gọi hàm cập nhật đếm ngược ban đầu
		updateCountdown();
	</script>
</body>

</html>