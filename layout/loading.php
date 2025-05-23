<style>
    #loading-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: white; /* Màu nền overlay */
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1000; /* Đảm bảo nó ở trên các nội dung khác */
}

.spinner {
    width: 50px;
    height: 50px;
    border: 5px solid #ccc;
    border-top: 5px solid #3498db; /* Màu sắc của spinner */
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

<div id="loading-overlay">
    <div class="spinner"></div>
</div>

<script>
    window.addEventListener("load", function() {
    const loadingOverlay = document.getElementById("loading-overlay");
    loadingOverlay.style.display = "none";
});
</script>