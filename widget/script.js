const mtnOrigin = new URL(document.currentScript.src).origin;

/*
 * Add global style to disable scrollbar
 */

const MTN_BODY_STYLES = `
.mtn-body-override {
    overflow: hidden;
}`;

const mtnGlobalStyle = document.createElement("style");
mtnGlobalStyle.innerHTML = MTN_BODY_STYLES;
document && document.body.appendChild(mtnGlobalStyle);

/*
 * Button / Modal styles
 */

const MTN_BUTTON_STYLES = `
.mtn-btn {
    padding: 12px 32px;
    font-size: 16px;
    border-radius: 48px;
    border: none;
    cursor: pointer;
    background-color: #005ad7;
    color: white;
    outline: none;
    border: 2px solid #005ad7;
    text-decoration: none;
}

.mtn-btn:active,
.mtn-btn:hover,
.mtn-btn:focus{
    background: #143c8c;
    border-color: #143c8c;
}
`;

const MTN_MODAL_STYLES = `
@keyframes mtn-widget-modal-open {
    0% {
        opacity: 0;
        transform: translateX(-50%) translateY(calc(50px - 50%));
    }

    100% {
        opacity: 1;
        transform: translateX(-50%) translateY(-50%);
    }
}

.mtn-modal {
    all: unset;

    box-sizing: border-box;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translateX(-50%) translateY(-50%);
    width: 100%;
    height: 100%;

    z-index: 999999;
    background-color: white;

    animation: 0.2s mtn-widget-modal-open forwards;
}

@media (min-width: 992px) {
    .mtn-modal {
        width: calc(100% - 20px);
        max-width: 1200px;
        height: calc(100% - 20px);
        border: 2px solid #b2bbc9;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
}

.mtn-close-btn {
    all: unset;

    position: fixed;
    top: 10px;
    right: 10px;
    z-index: 1;
    padding: 10px;
    cursor: pointer;
}

.mtn-iframe {
    all: unset;

    display: block; /* avoid third scroll */
    border: 0;
    width: 100%;
    height: 100%;
}
`;

class MTNModal extends HTMLElement {
    constructor() {
        super();
        const shadowDOM = this.attachShadow({ mode: "open" });

        this.div = document.createElement("div");
        this.div.classList.add("mtn-modal");

        const style = document.createElement("style");
        style.innerHTML = MTN_MODAL_STYLES;

        shadowDOM.appendChild(style);
        shadowDOM.appendChild(this.div);
        this.render();
    }

    static get observedAttributes() {
        return ["charity"];
    }

    attributeChangedCallback(name, oldValue, newValue) {
        this.render(newValue);
    }

    render(charity) {
        this.div.innerHTML = `
    <button class="mtn-close-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <path fill="none" fill-rule="evenodd" stroke="#001E4B" stroke-linecap="square" stroke-width="2" d="M8 8L.929.929 8 8 .929 15.071 8 8zm0 0l7.071 7.071L8 8 15.071.929 8 8z"/>
        </svg>
    </button>
    <iframe class="mtn-iframe" src="${mtnOrigin}/${
            charity || ""
        }?widget=true&utm_source=widget&utm_medium=referral&utm_campaign=mtn-2021&utm_content=${charity}"></iframe>
    `;
        const button = this.div.querySelector(".mtn-close-btn");
        button.addEventListener("click", () => {
            document.body.querySelector("mtn-modal").remove();
            document.body.classList.remove("mtn-body-override");
        });
    }
}

class MTNButton extends HTMLElement {
    constructor() {
        super();

        const shadowDOM = this.attachShadow({ mode: "open" });

        const button = document.createElement("button");
        button.innerHTML = "DONATE NOW";
        button.classList.add("mtn-btn");

        button.addEventListener("click", () => {
            const charity = this.getAttribute("charity");
            openMyTenNights(charity);
        });

        const style = document.createElement("style");
        style.innerHTML = MTN_BUTTON_STYLES;

        shadowDOM.appendChild(style);
        shadowDOM.appendChild(button);
    }
}

function openMyTenNights(charity) {
    if (document.body.querySelector("mtn-modal")) {
        // already exists, so don't do anything
        return;
    }

    const legacyModal = document.body.querySelector("mtn-widget-modal");
    if (legacyModal && !charity) {
        // the legacy modal used to have the charity associated,
        // i.e. <mtn-widget-modal charity-id="islamic-relief-uk"></mtn-widget-modal>
        // so hijack that to obtain the charity ID if the button doesn't have one.
        charity = legacyModal.getAttribute("charity-id");
    }

    const modal = new MTNModal();
    charity && modal.setAttribute("charity", charity);
    document.body.appendChild(modal);
    document.body.classList.add("mtn-body-override");
}

customElements.define("mtn-button", MTNButton);
customElements.define("mtn-modal", MTNModal);

/*
 * Hijack Legacy MTN elements
 */

// wrap the MTN custom elements, allowing backwards compatibility with the
// old version of the MTN widget.
class MTNLegacyModal extends HTMLElement {
    open() {
        openMyTenNights();
    }
}
class MTNLegacyButton extends MTNButton {}

customElements.define("mtn-widget-button", MTNLegacyButton);
customElements.define("mtn-widget-modal", MTNLegacyModal);

/*
 * Add Event listener for pushing into GA / GTM
 */
function handleMyTenNightsMessage({ origin, data }) {
    if (origin !== mtnOrigin) {
        return;
    }

    // Push into GTM if present
    window.dataLayer && window.dataLayer.push(JSON.parse(data));
}

window.addEventListener("message", handleMyTenNightsMessage, false);
