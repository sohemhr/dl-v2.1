<style>
.preloader {
    position: fixed;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: 9999;
    background: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100vw;
    height: 100vh;
}
.waviy span {
    position: relative;
    display: inline-block;
    font-size: 3rem;
    font-weight: 700;
    color: #021573;
    animation: waviy 0.8s infinite;
    animation-delay: calc(0.1s * var(--i));
}
@keyframes waviy {
    0%, 40%, 100% { transform: translateY(0); }
    20% { transform: translateY(-20px); }
}
</style>
<div class="preloader" id="preloader">
    <div class="waviy position-relative">
        <span style="--i:1">D</span>
        <span style="--i:2">O</span>
        <span style="--i:3">K</span>
        <span style="--i:4">T</span>
        <span style="--i:5">E</span>
        <span style="--i:6">R</span>
        <span style="--i:7">L</span>
        <span style="--i:8">E</span>
        <span style="--i:9">G</span>
        <span style="--i:10">A</span>
        <span style="--i:11">L</span>
    </div>
</div>
<script>
window.addEventListener('load', function() {
    document.getElementById('preloader').style.display = 'none';
});
</script>