# Terms of Service

Descripció del projecte: El projecte 'VideosApp' consisteix en la creació d'una aplicació web tipus YouTube, on es gestionaran usuaris, vídeos i llistes. A través de diversos sprints, s'aniran implementant les funcionalitats bàsiques de l'aplicació, incloent la creació i visualització de vídeos, gestió d'usuaris i altres operacions relacionades amb la visualització de contingut.

Sprint 1: Creació del projecte i configuració inicial

Creació del projecte: Es va crear un projecte Laravel anomenat 'VideosAppPau', configurant Jetstream amb Livewire, PHPUnit, Teams i SQLite.
Test de helpers: Es va crear un test per verificar la creació d'un usuari per defecte i un usuari professor, amb els camps 'name', 'email' i 'password'. La contrasenya es va encriptar i els usuaris es van associar a un equip.
Configuració de helpers i credencials: Es van crear helpers a la carpeta 'app' i es va configurar el fitxer 'config' per utilitzar les credencials d'usuaris per defecte que es carreguen des del fitxer '.env'.

Sprint 2: Migracions, models i proves

Correcció d'errors: Es van corregir els errors del primer sprint, incloent l'ús d'una base de dades temporal per als tests.
Migració de vídeos: Es va crear una migració de vídeos amb els camps necessaris (id, title, description, url, published_at, previous, next, series_id).
Controlador i model de vídeos: Es va implementar el controlador 'VideosController' amb les funcions 'testedBy' i 'show', i el model de vídeos amb funcions per formatar les dates de publicació utilitzant la llibreria Carbon.
Helpers de vídeos per defecte: Es va crear un helper per afegir vídeos per defecte.
Afegir usuaris i vídeos per defecte: Es van afegir usuaris i vídeos per defecte al 'DatabaseSeeder'.
Creació de layout i rutes: Es va crear el layout 'VideosAppLayout' i les rutes i vistes per mostrar els vídeos.
Proves de vídeos: Es van crear proves per verificar la creació de vídeos per defecte i la correcta visualització de vídeos, incloent proves d'accés als vídeos per part dels usuaris.
