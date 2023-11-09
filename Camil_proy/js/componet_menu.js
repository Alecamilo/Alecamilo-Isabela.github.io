class menumain extends HTMLElement{
    constructor(){
        super();
    }
    connectedCallback(){
        this.innerHTML = `
        <img  src="../img/latido.png" alt="">
            <nav>
                <ul>
                    <li>
                        <a href="../app/modulo1.php">
                            <i class="fa-solid fa-bed-pulse" onclick="act_mod1()"
                                title="Tabla de Pacientes"
                                trigger="hover">
                            </i> 
                        </a>
                    </li>
                    <li>
                        <a href="../app/modulo2.php">
                            <i class="fa-solid fa-file-medical" onclick="act_mod2()"
                            title="Tabla de Médicos"
                            trigger="hover">
                        </i> 
                        </a>
                    </li>
                    <li>
                        <a href="../app/modulo3.php">
                            <i class="fa-solid fa-heart-circle-exclamation" onclick="act_mod3()"
                            title="Tabla de Citas"
                            trigger="hover">
                        </i> 
                        </a>
                    </li>
                    <li>
                        <a href="../app/modulo4.php">
                            <i class="fa-solid fa-hand-holding-medical" onclick="act_mod4()"
                            title="Tabla de Diagnósticos"
                            trigger="hover">
                        </i> 
                        </a>
                    </li>
                    <li>
                        <a href="../app/modulo5.php">
                            <i class="fa-solid fa-flask-vial" onclick="act_mod5()"
                            title="Tabla de Tratamientos"
                            trigger="hover">
                        </i> 
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="exit">
                <a href="../db/logout.php">
                     <i class="fa-solid fa-right-from-bracket"
                    title="Tabla de Tratamientos"
                    src="https://cdn.lordicon.com/ksdjzsym.json"
                    trigger="hover">             
                </i> 
                </a>
            </div>
        `;
    }

}


window.customElements.define("menu-main", menumain);