function alternar() {

    let cambio = `
        <h1 class="text-center pt-5">Que bueno que te interesa</h1>
        <p class="fs-5 py-5">Pues mira nosotros somos mas que solo un medio de contacto, a traves de nuestra app no solo podras escojer tu conductor de preferencia si no que ademas tendras un seguimiento en tiempo real de tu pedido y podras relizar pagos por la misma app </p>
        <a class="btn btn-primary m-auto" href="#about" onclick="alternarMenos()">menos</a>
        `;

    let segundoCambio =`<img class="img-fluid" src="img/logo 1.png" alt="">`

    window.alternarMenos = function() {
        document.getElementById('primer_js').innerHTML = `
            <img class="img-fluid" src="img/logo 1.png" alt="">
        `;
        document.getElementById('segundo_js').innerHTML = `
             <h1 class="text-center pt-5">Quienes somos</h1>
            <p class="fs-5 py-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex reiciendis veniam minus animi consequatur rerum ratione nesciunt, pariatur soluta fugiat assumenda quo et tenetur doloribus quia aperiam dolores eum. Fugiat?</p>
            <div class="btn">
              <a class="btn btn-primary m-auto" href="#about" onclick="alternar()">Saber mas</a>
            </div>
        `;
    };

    document.getElementById('primer_js').innerHTML=cambio
    document.getElementById('segundo_js').innerHTML=segundoCambio

}
