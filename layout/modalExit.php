<style>
    .modal-overlay {
    display: none; /* Mặc định ẩn */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 100000;
}

/* Khung modal */
.modal-box {
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    max-width: 400px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
}

/* Nút bấm */
.modal-actions {
    margin-top: 15px;
}

.modal-btn {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 5px;
    font-size: 16px;
}

.primary-btn {
    background: #007bff;
    color: white;
}

.modal-btn:hover {
    opacity: 0.8;
}
</style>

<div id="customModal" class="modal-overlay">
  <div class="modal-box">
    <h2>Chờ chút!</h2>
    <p>Bác sĩ đang online và có thể giúp anh ngay bây giờ.</p>
    <div class="modal-actions">
      <button class="modal-btn primary-btn" onclick="chatNow()">Chat ngay</button>
      <button class="modal-btn" onclick="closePopup()">Để sau</button>
    </div>
  </div>
</div>


<script>
    // Phát hiện hành vi thoát trang (desktop + mobile)
    function detectExitIntent(e) {


        // Desktop: Chuột di chuyển ra khỏi cửa sổ trên cùng
        if (e.clientY < 0) {
            console.log(e, 'e');
            showPopup();
        }
        // Mobile: Vuốt xuống dưới cùng màn hình
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            showPopup();
        }
    }

    function showPopup() {
    document.getElementById("customModal").style.display = "flex";
}

function closePopup() {
    document.getElementById("customModal").style.display = "none";
}

function chatNow() {
    window.location.href = 'https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en';
    closePopup();
}

    // Gắn sự kiện theo dõi
    document.addEventListener('mouseleave', detectExitIntent); // Cho desktop
    window.addEventListener('scroll', detectExitIntent); // Cho mobile
</script>