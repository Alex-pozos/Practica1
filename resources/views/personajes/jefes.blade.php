@extends('layout.plantilla')

@section('titulo', 'The Kings of fighters-Jefes')

@section('contenido')
    <div class="col centrar">
        <img src="{{ asset('img/kof_icono.png') }}" alt="" height="200">
        <h1 class="display-4" style="color: #cd7020 ">Lista de Jefes</h1>
    </div>
    <div class="row justify-content-between ml-4 mr-4">
        <!--Inicia row cards-->
        <div class="card mt-3 ml-2 borde" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Rugal1.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Rugal Bernstein"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"25 de marzo"</p>
                <p class="card-text"><strong>Descripción: </strong> Es el organizador del torneo KOF 94, su intención es
                    derrotar a los oponentes más fuertes del mundo para convertirlos en trofeos de su casa. Saisyu Kusanagi
                    en sus viajes de peleador lo reta pero es derrotado. El Japan Team fue el vencedor del torneo por lo
                    tanto Mature los introdujo hacia el Black Noah para la siguiente lucha con él. Al final es derrotado y
                    autodestruye la nave jurando que volverá.
                </p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Rugal2.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Omega Rugal"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"12 de diciembre"</p>
                <p class="card-text"><strong>Descripción: </strong>Rugal Bernstein quien volvió después de los sucesos
                    del año pasado, ahora se volvió más fuerte que nunca usando los poderes de Orochi. Al principio manipula
                    a Saisyu Kusanagi mediante un lavado de cerebro realizado por Vice (su otra secretaria) e invita
                    nuevamente a todos los competidores para probar su fuerza en un nuevo torneo. Al final muere cuando su
                    cuerpo no podía aguantar el poder de Orochi y explota desde adentro. Ahora para los fanáticos de cada
                    KOF se ha estado usando a Omega Rugal en los Dream Matches como jefe final.
                </p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Goenitz.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Leopold Goenitz"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"31 de diciembre"</p>
                <p class="card-text"><strong>Descripción: </strong>Goenitz es el jefe del torneo KOF 96 su intención
                    era despertar a Orochi y por supuesto él es uno de sus 4 Reyes Celestiales (Hakkesshu). Fue el
                    responsable de despetar el disturbio de la sangre en Leona (debido a que el padre de ella, Gaidel, se
                    negó a ayudarle a revivir a Orochi) causando que en ese estado mate a toda su familia y quien la quiere.
                    También se descubre que le arrancó a Rugal su ojo derecho pero lo dejó vivir porque le pareció
                    interesante su intento de usar los poderes de Orochi sin ser del linaje y por último mató a Maki Kagura
                    con el fin de avanzar su agenda para romper el Sello de Orochi. </p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Orochi.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Orochi"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Francia"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"13 de febrero"</p>
                <p class="card-text"><strong>Descripción: </strong>Orochi es el último jefe de esta saga que apareció
                    en KOF 97. Su propósito actual puede limitarse a una sombría venganza, debido a que fue sellado hace
                    1800 años por los esfuerzos de los clanes Kusanagi, Yasakani y Yata. Fue revivido con el trabajo de sus
                    descendientes tras un ritual donde se sacrificaron Yashiro, Shermie y Chris en el cuerpo de Chris. Al
                    final es sellado como antaño pero esta vez por el equipo de los 3 Tesoros Sagrados (Iori, Kyo y Chizuru)
                    que son los descendientes de los clanes que originalmente lo habían sellado.
                </p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Krizalid1.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Krizalid"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"8 de agosto de 1963"</p>
                <p class="card-text"><strong>Descripción: </strong>Es el organizador del torneo KOF 99, su propósito
                    fue obtener los datos de batalla (El Triger Data) para enriquecer la fuerza de los Clones de Kyo pues
                    este recogió a un Kyo inconsciente después de su batalla con Orochi y fusionó su ADN. En un principio
                    trajo a K´ y Maxima como agentes de NESTS, quienes reclutan a Shingo y Benimaru para formar equipo en el
                    torneo. Al final se descubre que su intención es la de derrocar todos los gobiernos mediante el plan de
                    los clones de Kyo. Es vencido por los guerreros y mientras aclama su derrota alguien desconocido
                    supuestamente le anula el plan de los clones y lo mata con una piedra dejándolo sin vida y sin memoria
                    (Después se sabría que era C-Zero). </p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Zero.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"C-Zero"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"26 de junio"</p>
                <p class="card-text"><strong>Descripción: </strong>Zero es el organizador del torneo KOF 2000 como
                    también el jefe final. Tuvo como objetivo dispersar las energías mediante un cañón llamado Cañón Zero,
                    que construyo en secreto en las semifinales. Para ello se pasa como un oficial llamado Ling y captura
                    junto con algunos aliados suyos a Heidern para resistir la fuerza militar, hasta obligarlo a continuar
                    con sus planes, para después llevar a los Guerreros a una bodega abandonada.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Zero2.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Zerp"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"10 de junio"</p>
                <p class="card-text"><strong>Descripción: </strong>Zero es un agente de NESTS y uno de los principales
                    peleadores que esperan a los finalistas del KOF 2001. Su misión fue en la que es entonces eliminar a los
                    ganadores del torneo. Por eso cuando los guerreros KOF abordaron un dirigible con la tipografía de KOF
                    2001, esta se desarma y se descubre de que en realidad es una nave espacial controlada por Zero. Al
                    parecer supo que su clon traiciono a NESTS y al final decide pelear con los ganadores del torneo.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Igniz.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Igniz"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Estados Unidos"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"04 de febrero"</p>
                <p class="card-text"><strong>Descripción: </strong>Igniz es el ambicioso líder de NESTS quien organiza
                    KOF 2001, como también es el jefe final del torneo. Revelo que K, Kula, Krizalid, Whip y K9999, eran
                    simplemente juguetes para su gusto, después aniquila al fundador del cartel Anidas Nests que al parecer
                    trata de robarle energías y por supuesto su propósito es quedarse como un Dios, también organizo el
                    torneo para que los luchadores sean reclutados en un ejercito y sacar fuentes de energía.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Mukai.png') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Mukai"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"06 de junio"</p>
                <p class="card-text"><strong>Descripción: </strong>Es el organizador real de Kof 2003 junto a Botan
                    como miembro de "Those from the Distant Land" tras saber qu los tres tesoros (Kyo, Iori y Chizuru) se
                    dieran cuenta (especialmente Chizuru) que su hemana Maki estaba literalmente en los hilos de botan,
                    cuando es vencido esta ileso el se admira del poder de los humanos. Mientras ello están atrapados, llega
                    Ash y le roba los poderes a Chizuru. Ash convence a Iori pero lo rechaza y Kyo jura vengarse.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Adelheid.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Adelheid Bernstein"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"02 de agosto"</p>
                <p class="card-text"><strong>Descripción: </strong>Es el hijo del fallecido Rugal tiene su hermana Rose
                    Bernstein y es el jefe alterno de KOF 2003 como también organizador alternativo, cuando es vencido por
                    Kyo e Iori Yagami dice que la derrota es derrota y luchar otra vez no tiene sentido, le dijo a su
                    hermana bajo la influencia de Botan. (el es diferente a su padre)

                    Vuelve a aparecer The King of Fighters XI como el sub-jefe intermedio, implica que se enfrentó el equipo
                    de Ikari Warriors y fue derrotado por ellos. El pacíficamente charla con Heidern y le explica que sólo
                    después de la herencia de su padre.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Magaki.gif') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Magaki"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"China"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"23 de septiembre"</p>
                <p class="card-text"><strong>Descripción: </strong>Es el jefe de The King Of Fighters XI junto con
                    Shion siendo los anfitriones del torneo. Tienen la esperanza de revivir a Orochi para darle el poder a
                    su amo. Magaki odia la ideología de Mukai de que los seres humanos deben ser observados cuidadosamente.
                    Cuando es derrotada Shion, Magaki la envía a otra dimensión como castigo por ser derrotada por seres
                    humanos. Al igual que Mukai antes que él, después de haber sido derrotado se puso de pie, aparentemente
                    ileso, y luego de comentar que tal vez era más de espíritu que se necesita para despertar a Orochi.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Saiki.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Saiki"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Suecia"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"03 de mayo"</p>
                <p class="card-text"><strong>Descripción: </strong>
                    Saiki es el líder confirmado de Those from the Past, es misterioso y bastante mencionado "maestro" de
                    los juegos anteriores de la Saga de Ash, actúa como sub-jefe de KOF XIII. Un ser que se ha considerado
                    vivo desde hace siglos, el desea reunir energía por medio del torneo para la resurrección de Orochi y
                    usar a la deidad para sus propios fines. Cuando Mukai le pide a Saiki que lo deje lidiár con el equipo
                    ganador, este está temiendo el fracaso de Mukai nuevamente y termina absorbiendo su energía para sí
                    mismo. </p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Dark-Ash.png') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Dark Ash"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"E. L. James"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"Mayo de 2011"</p>
                <p class="card-text"><strong>Descripción: </strong>Es el jefe final de XIII y la forma alterna de Ash
                    luego de que este le absorviera los poderes oscuros de Saiki (Tras su derrota), Este incidente causó que
                    la poderosa influencia de Saiki tomara el control y se fundiera con Ash para formar una sola entidad.
                    Ash Pelea contra los vencedores del torneo y es derrotado. Abatido, Saiki intenta hacer que Evil Ash
                    retroceda el tiempo previo al momento en que el portal que dirigiría hacia Orochi se cerrara, pero es
                    forzado a retroceder cuando Ash asume el control de su cuerpo. Ignorando las súplicas de su ancestro
                    para permitirle pasar y advertirle de las consecuencias, Ash decide borrar su propia existencia
                    esperando tranquilamente a que el portal se cierre para siempre.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Duke.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Duke"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Inglaterra"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"20 de julio"</p>
                <p class="card-text"><strong>Descripción: </strong>Duke es el anterior rey de Southtown y lider de la
                    banda Mertispholes, organizo el Maximum Impact para demostrar que tiene mas furza. Trae a su guia Hyena
                    como un cobarde que no sabe como son las cosas. Duke termino perdiendo ante Alba y regreso en Maximum
                    Impact 2, en el cual ayuda a Lien a saber de su pasado y resolver el suyo.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Jivatma.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Jivatma"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Estados Unidos"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"25 de agosto"</p>
                <p class="card-text"><strong>Descripción: </strong>Es el líder del Kusei/Judeim una organización que
                    entrenaba asesinos, construyo a Nagase como rival para Kula y sus ataques son similares a las de Dhalsim
                    (Street Fighter), Alba termino derrotandole pero no se supo si murió o continua estando como líder.</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/MissX.png') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Miss X"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Londres Inglaterra"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"25 de diciembre"</p>
                <p class="card-text"><strong>Descripción: </strong>Es el jefe del torneo femenino Gals Fighters, no
                    tuvo propósitos para hacerlo pero se dice que quiere probar como las chicas son fuertes hasta el
                    momento. En realidad es Iori Yagami disfrazado de mujer.
                </p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Geese.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Geese Howard"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Italia"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"25 de diciembre"</p>
                <p class="card-text"><strong>Descripción: </strong>Geese es el único jefe que ha estado presente en un
                    juego (The King of Fighters EX: Neo Blood), su intención es tomar control de Southtown usando los
                    poderes de Orochi en Iori Yagami para exparcirlo por la ciudad. Al final es derrotado y dice que algún
                    día volverá, lo cual hizo que la torre quede destruida. Ahora para los fanáticos de cada juego se
                    introdujo como jefe oculto de Endless Mode en los Remakes (Teniendo dos versiones, Normal y la versión
                    oscura llamada Nightmare Geese).</p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Rugal3.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Ultimate Rugal"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"Japón"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"07 de diciembre"</p>
                <p class="card-text"><strong>Descripción: </strong>Es la forma alternativa de Rugal de Capcom Vs SNK
                    2, luego de que este robara los poderes de Akuma (personaje y jefe de la Saga Street Fighter de Capcom)
                    y es el jefe alternativo de SNK en el juego. A diferencia de Omega Rugal, tiene el cuerpo todo negro, su
                    cabello cambia a blanco (como Omega Rugal) y sus movimientos se hacen mas rápidos con los poderes
                    obtenidos de Akuma. El no tiene avance en la trama pero es considerado jefe de Croosver y parte de
                    juegos MUGEN. </p>

            </div>
        </div>
        <div class="card mt-3 ml-2" style="width: 17rem;">
            <img class="card-img-top" src="{{ asset('img/jefes/Athena.jpg') }}" alt=""
                style="width: 16.9rem; height: 25rem; background:black">
            <div class="card-body" style=" background:#cd7020  ">
                <h5 class="card-title"><strong>Nombre: </strong>"Princesa Athena"</h5>
                <p class="card-text"><strong>Lugar de nacimiento: </strong>"thailandia"</p>
                <p class="card-text"><strong>Fecha de nacimiento: </strong>"29 de marzo"</p>
                <p class="card-text"><strong>Descripción: </strong>Athena es el jefe final secreto de SNK en SVC
                    Chaos: SNK Vs Capcom. Ella recide en el cielo y manda a uno de los guerreros del juego para luchar con
                    ella. En si ella no tiene historia, pero es considerada otro personaje mas de un juego, hay una
                    referencia a ella cuando Athena Asamiya venia disfrazada de Athena en el final del Old Hero Team en KOF
                    97.</p>

            </div>
        </div>
    </div>
@endsection
