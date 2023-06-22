<style>
header{
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    width: 100%;
    top: -80px;
    transition: top 0.3s;
    transition-timing-function: ease-in;
}
header.active{
    top: 0;
    transition: top 0.3s;
    transition-timing-function: ease-out;
}
header div{
    padding: 20px 15px;
    
}
</style>

<header>
    <div><a href="/Accueil">Accueil</a></div>
    <div><a href="/Creations">Créations</a></div>
    <div><a href="/Presentation">Qui suis-je ?</a></div>
    <div><a href="/Contact">Contact</a></div>
</header>

<script>
document.addEventListener("mousemove", headerPosition);

function headerPosition(e) {
    //console.log(`Screen X/Y: ${e.screenX}, ${e.screenY}`); UTILE EN SAH PR DES EFFETS D'ECRANS CHELOUS
    const header = document.querySelector('header')
    if(e.clientY < 70) header.classList.add('active')
    else header.classList.remove('active')
}
</script>