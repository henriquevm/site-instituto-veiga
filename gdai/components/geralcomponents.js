class CapaSimples extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <div class="d-none d-md-block text-center" style="width: 100%">
            <img
            class="img-fluid"
            src="img/capaSimplesG.svg"
            alt="Imagem de capa como o titulo: Grupo de Divulgação de Astronomia IFSULDEMINAS."
            style="width: 100%"
            />
        </div>
        <div class="d-md-none text-center" style="width: 100%">
            <img
            class="img-fluid"
            src="img/capaSimplesP.svg"
            alt="Imagem de capa como o titulo: Grupo de Divulgação de Astronomia IFSULDEMINAS."
            />
        </div>
            
        `;
    }
}
customElements.define('capa-simples', CapaSimples);

class Rodape extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
            <div class="divFace">
            <div class="txtFace col-lg-7">
                <p class="text-center">
                Começa mais mais sobre o G-DAI no Facebook
                </p>
            </div>
            <div class="face col-lg-5">
                <iframe
                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgdaipcs&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId"
                width="340"
                height="130"
                style="border: none; overflow: hidden"
                scrolling="no"
                frameborder="0"
                allowTransparency="true"
                allow="encrypted-media"
                ></iframe>
            </div>
            </div>
            <div class="rodape">
            <div class="col-lg-12">
                <p>2020 - G-DAI</p>
                <p style="font-size: 12px;">Desenvolvido por <a href="hhttps://www.henriquevm.dev/"> henriquevm.dev </a> </p>
            </div>
            </div>
        `;
    }
}
customElements.define('rodape-final', Rodape);

class Icones extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
            <a
            href="https://www.youtube.com/channel/UC3aM8LVfvsYP__1878LFvDQ"
            target="_blank"
        >
            <img
            src="img/iconYou.svg"
            alt="icone do YouTube"
            style="width: 30%"
            />
        </a>
        &nbsp&nbsp
        <a href="https://www.facebook.com/gdaipcs" target="_blank">
            <img
            src="img/iconFace.svg"
            alt="icone do Facebook"
            style="width: 20%"
            />
        </a>
        `;
    }
}
customElements.define('icone-rede', Icones);