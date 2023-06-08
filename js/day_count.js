function createFallingHeart() {
    var heart = document.createElement('div');
    heart.classList.add('heart');
    document.body.appendChild(heart);

    var randomX = Math.floor(Math.random() * window.innerWidth);
    heart.style.left = (randomX - 100) + 'px';
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